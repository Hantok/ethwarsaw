function check_next(pid)
{

    if(glob["next_enable"]) return true;
    if(glob["msg"])
    set_msg_txt("!!! "+glob["msg"]);
    else
    set_msg_txt("!!! Check the entered data on the page");
    hide_msg_txt();
    return false;
}