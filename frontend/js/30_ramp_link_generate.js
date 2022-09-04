function ramp_link_generate(t)
{
    var t;
    var url;
    var txt;
    switch(t)
    {
	case "pass":
	break;
	default:
	t = localStorage.getItem('wallet_addr');
	if(t && t.length == 42)
	{
	    url = ramp_link(t);
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
function ramp_link(h)
{
    var url = "https://widget.hackaton.ramp-network.org/?swapAsset=MATIC_ECRUNDAX&swapAmount=100000000000000000000&userAddress="+h;
    var t = "https://"+glob["domain"]+"/10";
    url += '&finalUrl='+t;
    return url;
}