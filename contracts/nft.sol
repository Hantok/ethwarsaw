// SPDX-License-Identifier: MIT
pragma solidity ^0.8.15;

import "@openzeppelin/contracts/token/ERC721/ERC721.sol";
import "@openzeppelin/contracts/token/ERC721/extensions/ERC721Enumerable.sol";
import "@openzeppelin/contracts/utils/Counters.sol";

contract nft is ERC721Enumerable
{
    using Counters for Counters.Counter;

    Counters.Counter private _tokenIdTracker;


    constructor() ERC721("TicketNFT", "TNFT") 
    {
	
    }

    // Contract without AdminControl. For MVP only.
    function mint(address recipient) public returns(uint256 tokenId)
    {        
	tokenId = _tokenIdTracker.current();
        _mint(recipient, tokenId);
        _tokenIdTracker.increment();
    }
}