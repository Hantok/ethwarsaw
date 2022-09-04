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
                     Successful ticket purchase
                </div>

		<div class=info>
		Payment by password
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span>
        </div>
	<br>
                <a href=/13 class="btn btn-primary w-75 btn_step" onclick="">View Ticket</a>
		<br><br>OR<br><br>
                <a href=/13 class="btn btn-primary w-75 btn_step" onclick="">Claim NFT</a>
            </div>
<?php
include "arrow.php";

?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
