<?php
$t = __FILE__;
$t = pathinfo($t);
$t = $t[filename];
$pid = $t;

$msg = "Save PASSWORD and click checkbox";

$prev = "/2";
$next = "/6";

?>

<div class="container">
    <div class="row justify-content-center align-items-center">

<!--  ----------------step 1------------------------------ -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4  col-centered text-center">
            <div class=pay>
                <div class=title>
                    Password INSTALLER
                </div>
		<div class=info>
        	    Generate or insert a strong password 
<!--(from 8 symbols, at least 1 digit, and a special character)-->
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span></div>

                <button class="btn btn-primary w-75 btn_step" onclick="show_password()">Show my previous password</button>
                <br>OR<br>
                <button class="btn btn-primary w-75 btn_step" onclick="generate_password()">Generate NEW Password</button>
                <br>OR<br>

		<div class=itext>
		<span>YOUR Pimper password:</span><br>
                <input class="form-control form-control-lg w-75" type="text" placeholder="password (min lenght: 10)" minlength="10" id=ipasswd value="Hello!%" onchange=checkbox_clear();>
		</div>



<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkbox_save" onclick=check_password_save();>
  <label class="form-check-label" for="checkbox_save">
    I save password in SAFE place
  </label>
</div>
<br><br>

            </div>
<?php
include "arrow.php";
?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
