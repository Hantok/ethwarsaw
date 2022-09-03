    function generate_wallet() 
    {
	var wallet_address;
	var wallet_privateKey;
	var wallet_mnemonicphrase;

	var t;
	t = localStorage.getItem('wallet_addr');
	if(t)
	{
	    wallet_address = t;
	    wallet_privateKey = localStorage.getItem('wallet_privateKey');
	    wallet_mnemonicphrase = localStorage.getItem('wallet_mnemonicphrase');
	}
	else
	{

        const wallet = ethers.Wallet.createRandom()
//        console.log(wallet.address);
//        console.log(wallet.privateKey);
//        console.log(wallet.mnemonic.phrase);
	wallet_address 	= wallet.address;
	wallet_privateKey 	= wallet.privateKey;
	wallet_mnemonicphrase = wallet.mnemonic.phrase;

	localStorage.setItem('wallet_addr', wallet_address);
	localStorage.setItem('wallet_privateKey', wallet_privateKey);
	localStorage.setItem('wallet_mnemonicphrase', wallet_mnemonicphrase);

	}
	
	var txt = "";
	txt += "ADDRESS:\n"+wallet_address+"\n\n"; 
	txt += "Private Key:\n"+wallet_privateKey+"\n\n"; 
	txt += "Seed phrase:\n"+wallet_mnemonicphrase+"\n\n";
	var x = document.getElementById("wallet_info"); 
	x.value = txt;

      }

