<?php

error_reporting(0);
$d = __DIR__."/";
$h = opendir($d);
while($f = readdir($h))
{
    if($f == "." || $f == "..")continue;
    $tf = $d.$f;
    $t = pathinfo($tf);
    //print_r($t);
    if($t[extension]=="js")
    {
        $a = file_get_contents($tf);
        $t3 = explode("\n",$a);
        $t2 = $t3[0];
        $t2 = trim($t2);
        //print "T2:".$t2."\n";
        if($t2 == "// 0")
        {
            continue;
        }
        $txt = "";
        $txt .= "// =========== $t[filename] =========\n";
        $txt .= $a."\n";
        $txt2[$t[filename]] = $txt;

    }
}

ksort($txt2);
$txt = implode("\n",$txt2);
print $txt;
?>