<?php
$t = __FILE__;
$t = pathinfo($t);
$t = $t[filename];
$pid = $t;

$msg = "Please, choose one option";
$prev = "/1";

?>

<div class="container">
    <div class="row justify-content-center align-items-center">

<!--  ----------------step 1------------------------------ -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4  col-centered text-center">
            <div class=pay>
                <div class=title>
                    Select type of PIMPER
                </div>
		<div class=info>
		View my ticket or buy
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span></div>

		<a href=/12 class="btn btn-primary w-75 btn_step">View</a>
		<br><br>OR<br><br>
		<a href=/2 class="btn btn-primary w-75 btn_step">Buy</a>

            </div>
<?php
include "arrow.php";
?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
