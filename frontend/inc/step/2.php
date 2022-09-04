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
                    Select type of PIMPER [purchase]
                </div>
		<div class=info>
		Get Ticket By
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span></div>


		<a href=/3 class="btn btn-primary w-75 btn_step">Password</a>
		<br><br>OR<br><br>
		<a href=/4 class="btn btn-primary w-75 btn_step">Wallet</a>

            </div>
<?php
include "arrow.php";
?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
