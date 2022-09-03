    function generate_wallet() {
        const wallet = ethers.Wallet.createRandom()
        console.log(wallet.address);
        console.log(wallet.privateKey);
        console.log(wallet.mnemonic.phrase);
	var txt = "";
	txt += "ADDRESS:\n"+wallet.address+"\n\n"; 
	txt += "Private Key:\n"+wallet.privateKey+"\n\n"; 
	txt += "Seed phrase:\n"+wallet.mnemonic.phrase+"\n\n";
	var x = document.getElementById("wallet_info"); 
	x.value = txt;
      }

