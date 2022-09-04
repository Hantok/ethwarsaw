<?php
$t = __FILE__;
$t = pathinfo($t);
$t = $t[filename];
$pid = $t;

$prev = "/2";
?>

<div class="container">
    <div class="row justify-content-center align-items-center">

<!--  ----------------step 1------------------------------ -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4  col-centered text-center">
            <div class=pay>
                <div class=title>
                    Buy ticket (by password)
                </div>

		<div class=info>
		Payments methods:
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span>
        </div>
	<br>
                <button class="btn btn-primary w-75 btn_step" onclick="ramp_link_generate('pass');"><img src=/images/logo-ramp.svg style="width:20px;height:20px;"> Card</button>
                <br><br>OR<br><br>
                <button class="btn btn-primary w-75 btn_step">Crypto (coming soon)</button>
            </div>
<?php
include "arrow.php";

?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
