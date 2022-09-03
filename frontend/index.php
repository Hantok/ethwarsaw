<?php

include "conf.php";

$domen = $_SERVER['HTTP_HOST'];
$url = "https://".$domen."/";
$t = $_SERVER['REQUEST_URI'];
$t = explode("/",$t);
unset($t[0]);
$items = $t;
$item = $t[1];
$item2 = $t[2];
$item3 = $t[3];


//print $www_dir;
$d = $www_dir;
$d .= "inc/";
//print "D: $d\n";
$h = opendir($d);
while($f = readdir($h))
{

//print $f."\n";
    
    $tf = $d.$f;
    $t = pathinfo($d.$f);
    if($t[extension] == "php")
    {
        $inc_mas[$tf] = $f;
    }
}
asort($inc_mas);

foreach($inc_mas as $incer=>$f)
{
    
    $t = str_replace(".php","",$f);
    print "<!-- $t -->\n";
    include $incer;
}

?>