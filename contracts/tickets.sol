// SPDX-License-Identifier: MIT
pragma solidity ^0.8.15;

import "@openzeppelin/contracts/token/ERC20/IERC20.sol";
import "@openzeppelin/contracts/interfaces/IERC20Metadata.sol";
import "@openzeppelin/contracts/token/ERC20/utils/SafeERC20.sol";


interface INft
{
    function mint(address recipient) external returns(uint256 tokenId);
}
interface IToken
{
    function approve(address spender,uint256 amount)external;
    function allowance(address owner,address spender)external view returns(uint256);
    function balanceOf(address addr)external view returns(uint256);
    function decimals() external view  returns (uint8);
    function name() external view  returns (string memory);
    function symbol() external view  returns (string memory);
    function totalSupply() external view  returns (uint256);
}
contract tickets
{
        event eLog(uint256 nn,string name,uint256 value);
	uint256 BlockDeploy;
 
	constructor()
	{
	    uint256 BlockDeploy = block.number;
	}

    function ChainId()public view returns(uint256)
    {
	return block.chainid;
    }

    struct ticketStruct
    {
	uint256 id;
	address hash;
	uint48 utime;
	address tokenAddress;
	uint256 amount;
	uint256 fee;
	uint256 reward;
	uint256 nft;
	bool claimed;
    }
    address public nftContract = 0x9F07E8E081a9dA0b1D0CBFA2A14252Bf633C3844;
    uint256 public ticketLast = 0;
    uint256 public maxTickets = 300;
    address public addressPartner = 0xAeD62fFDB2e1129E5Ec4168Ce5a17C847a5DdcD2;
    uint256 public feeValue = 350; // 3.5 %
    address public feeAddress = 0x54cF8D5dDA985E900Aaf6c92CfEe02bA7dc21df8;
    mapping(uint256 => ticketStruct)public history;  
    mapping(address => uint256)public hisByHash;
    mapping(uint256 => address)public nftClaimer;
    function processTicket(uint256 tokenAmount,address hash)public
    {
	uint256 nn;
	address tokenAddress = 0xcbc0E321fd0ca116260f67B828E86486C99A0254;

	require(hisByHash[hash] == 0,"This HASH already exists [duplicate].");
	
	ticketLast++;
	require(ticketLast <= ticketLast,"TICKETS: all tickets sold out.");


	require(IToken(tokenAddress).balanceOf(msg.sender) >= tokenAmount,"RAMP: you are trying to send a smaller amount than is available.");
	require(IToken(tokenAddress).allowance(msg.sender,address(this)) >= tokenAmount,"RAMP: increase allowance.");
	history[ticketLast].id 		= ticketLast;
	history[ticketLast].hash 	= hash;
	history[ticketLast].utime 	= uint48(block.timestamp);
	history[ticketLast].tokenAddress = tokenAddress;  
	history[ticketLast].amount 	= tokenAmount;

	hisByHash[hash] = ticketLast;

	uint256 fee;
	fee = tokenAmount * feeValue / 10000;

	uint256 reward = tokenAmount - fee;
	history[ticketLast].fee = fee;
	history[ticketLast].reward = reward;

	IERC20(tokenAddress).transferFrom(msg.sender,feeAddress,fee);
	IERC20(tokenAddress).transferFrom(msg.sender,addressPartner,reward);

//        bytes memory b;

//	b = bytes(hash);

	emit eLog(nn++,"hash",uint256(uint160(hash)));
	 
    }
    function hash(bytes32 str)public pure returns (address) 
    {
	return address(uint160(uint256(keccak256(abi.encode(uint256(str))))));
    }
    function claim(bytes32 passwd,address recipient)public
    {
	uint256 id;
	address thisHash = hash(passwd);
	bool checkOk = false;
	if(hisByHash[thisHash] > 0)
	{
	    checkOk = true;
	    id = hisByHash[thisHash];
	}
	if(checkOk == false)
	{
	    if(hisByHash[msg.sender]>0)
	    {
		checkOk = true;
		id = hisByHash[msg.sender];
		recipient = msg.sender;
	    }
	}
	require(checkOk == true,"Password incorrect or sender not exists.");
	require(history[id].claimed == false,"Nft already claimed.");
	require(recipient != address(0),"Recipient must be non zero.");

	uint256 tokenId = INft(nftContract).mint(recipient);
	history[id].claimed = true;
	history[id].nft = tokenId;
	
	nftClaimer[tokenId] = recipient;
    }

}