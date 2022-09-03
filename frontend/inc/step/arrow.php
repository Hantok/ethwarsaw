            <div class=steps>
            <div class="row w-100">
                <div class="cols-6 cols_l w-50">
<?php
$t = $pid-1;
if($pid > 1)
print "<a href=/$t class=arrow onclick=\"return(check_prev(id));\">&#8592; prev</a> ";
?>
</div>
                <div class="cols-6 cols_r w-50">
<?php
$t = $pid+1;
$f = __DIR__."/$t.php";

if(file_exists($f))
print  "<a href=/$t class=arrow onclick='return(check_next($t,this));'>next &#8594;</a>";
?>
</div>
            </div>
            </div>
