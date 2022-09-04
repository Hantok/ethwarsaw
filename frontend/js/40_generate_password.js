function generate_password()
{
    var p = "";
    p += window.crypto.getRandomValues(new BigUint64Array(1))[0].toString(36)
    p += window.crypto.getRandomValues(new BigUint64Array(1))[0].toString(36)

    var x = document.getElementById('ipasswd');
    x.value = p;
    checkbox_clear();
//    console.log(p);
}