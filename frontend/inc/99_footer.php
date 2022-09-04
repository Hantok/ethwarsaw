<?php
                                                            
print "<script>";                                                
print "                                                          
var glob = new Array();                                          
glob[\"next_enable\"] = \"$next_enable\";                                    
glob[\"msg\"] = \"$msg\";
glob[\"prev\"] = \"$prev\";
glob[\"next\"] = \"$next\";
glob[\"domain\"] = \"$domain\";
";                                                               
print "</script>";                                               
$f = "script.js";                                                
$t = $www_dir;                                                   
$t .= "js/";                                                     
$t .= $f;                                                        
$a = filemtime($t);                                              
//print "<script src=\"/js/script.js?$a\"></script>";

print "<script src=/js/".($js_debug?"?".time():"")."></script>"
?>
</body>
</html>