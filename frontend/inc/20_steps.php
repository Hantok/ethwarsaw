<?php

/*
print "ITEM: $item<br>";
print "ITEM2: $item2<br>";
print "ITEM3: $item3<br>";

*/

$def_item = "1";

if(!$item)
$item = $def_item;

$f = __DIR__."/step/".$item.".php";
$f2 = __DIR__."/step/".$def_item.".php";
if(file_exists($f))
{
    include $f;
}
else
include $f2;
?>