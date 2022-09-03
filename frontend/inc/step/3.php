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
                    Tx Form
                </div>
		<div class=info>
            Insert a strong password (from 8 symbols, at least 1 digit, and a special character)
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span></div>
		<div class=itext>
		<span>Pimper password:</span><br>
                <input class="form-control form-control-lg w-75" type="text" placeholder="password (min lenght: 10)" minlength="10" id=ipasswd value="Hello!%">
		</div>

                <div class="btn_bottom w-100">
                    <input class="btn btn-primary w-75 btn_step" type="submit" value="Submit" onclick=create_hash()>
                </div>

            </div>
<?php
include "arrow.php";
?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
