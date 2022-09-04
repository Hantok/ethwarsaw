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
		Payment by wallet
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span>
        </div>
	<br>
                <a href=/11 class="btn btn-primary w-75 btn_step" onclick="ramp_link_generate();">Claim NFT</button>
            </div>
<?php
include "arrow.php";

?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
