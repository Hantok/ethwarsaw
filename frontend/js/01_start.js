    //let web3 = new Web3(Web3.givenProvider || "ws://localhost:8545");
    let web3 = new Web3(Web3.givenProvider );
    var x = web3.utils.soliditySha3({t: 'bytes32', v: '0x407D73d8a49eeb85D32Cf465507dd71d507100c1'});
    console.log(x);

    function create_hash()
    {
        var x = document.getElementById("ipasswd").value;
        console.log(x);
        var y;
        var l = x.length;
        var s = "";
        var i;
        var t;
        for(i=0;l > i;i++)
        {
            t = x.charCodeAt(i);
//	console.log(t);
            t = toHex(t);
//	console.log(t);
//	console.log(toHex(t));
            s += t;
//    console.log(x.charCodeAt(0));
//    console.log(x.charCodeAt(1));
        }
        s = "0x"+s;
        console.log("S: "+s);
        y = web3.utils.soliditySha3({t: 'bytes32', v: s});
        console.log("Y: "+y);
    }

    function toHex(d)
    {
        return  ("0"+(Number(d).toString(16))).slice(-2).toUpperCase();
    }

