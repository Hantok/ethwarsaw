function check_save()
{
    var x = document.getElementById('checkbox_save');
    if(x.checked)
    glob["next_enable"] = 1;
    else
    glob["next_enable"] = "";
}