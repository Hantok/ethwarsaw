function hide_msg_txt()
{
    setTimeout(hide_msg_txt_action,2000);
}
function hide_msg_txt_action()
{
    var x = document.getElementById('msg_txt');
    x.innerHTML = "&nbsp;";
}
function set_msg_txt(txt)
{
    var x = document.getElementById('msg_txt');
    x.innerHTML = txt;

}
