function show_password()
{
    var p = localStorage.getItem('pimper_pass');

    if(p)
    {
    var x = document.getElementById('ipasswd');
    x.value = p;
    checkbox_clear();
    }
    else
    {
	set_msg_txt("Saved password not found");
	hide_msg_txt();
    }

}