function check_next(pid)
{

    if(glob["next_enable"])
    {
	    if(glob["next"])
	    {
	    location.href = glob["next"];
	    return false;
	    }
	    else
	    return true;
    }
    if(glob["msg"])
    set_msg_txt("!!! "+glob["msg"]);
    else
    set_msg_txt("!!! Check the entered data on the page");
    hide_msg_txt();
    return false;
}