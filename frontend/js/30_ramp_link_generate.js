function ramp_link_generate(t)
{
    var t;
    var url;
    var txt;
    switch(t)
    {
	case "pass":
	t = localStorage.getItem('pimper_pass');
	if(t)
	{
	    h = create_hash(t);
	    url = ramp_link(h,"/11");
	    location.href = url;

	}
	else
	{
	    txt = "Password ERROR: return to prev page";
	    set_msg_txt(txt);
	    hide_msg_txt();

	}

	break;
	default:
	t = localStorage.getItem('wallet_addr');
	if(t && t.length == 42)
	{
	    url = ramp_link(t,"/10");
	    location.href = url;
	}
	else
	{
	    txt = "Wallet ERROR: return to prev page";
	    set_msg_txt(txt);
	    hide_msg_txt();
	}
    }
}
function ramp_link(h,r)
{
    var url = "https://widget.hackaton.ramp-network.org/?swapAsset=MATIC_ECRUNDAX&swapAmount=100000000000000000000&userAddress="+h;
    var t = "https://"+glob["domain"]+r;
    url += '&finalUrl='+t;
    return url;
}