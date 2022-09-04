function check_password_save()
{
    var x = document.getElementById('checkbox_save');
    var y = document.getElementById('ipasswd');
    var h;
    if(x.checked)
    {
	if(y.value)
	{
	    glob["next_enable"] = 1;
	    localStorage.setItem('pimper_pass', y.value);
	    h = create_hash();
	    localStorage.setItem('pimper_hash', h);
	}
	else
	{
        set_msg_txt("Password Empty");
        hide_msg_txt();
	x.checked = false;

	}
    }
    else
    glob["next_enable"] = "";
}
