<?php
$t = __FILE__;
$t = pathinfo($t);
$t = $t[filename];
$pid = $t;

$msg = "Save DATA and click checkbox";
$prev = "/2";
?>

<div class="container">
    <div class="row justify-content-center align-items-center">

<!--  ----------------step 1------------------------------ -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4  col-centered text-center">
            <div class=pay>
                <div class=title>
                    Wallet GENERATOR
                </div>

		<div class=info>
		!!! Store all on this page  in a safe place !!!
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span></div>

                <div class="btn_bottom w-100">
                    <input class="btn btn-primary w-75 btn_step" type="submit" value="Get WALLET" onclick=generate_wallet()>
                </div>
		
		You wallet data:<br>
		<textarea class="wtxt w-75" id=wallet_info></textarea>
		<br>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkbox_save" onclick=check_save();>
  <label class="form-check-label" for="checkbox_save">
    I save all data in SAFE place
  </label>
<br><br>
</div>

            </div>
<?php
include "arrow.php";

?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
