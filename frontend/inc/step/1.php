<?php
$t = __FILE__;
$t = pathinfo($t);
$t = $t[filename];
$pid = $t;

$next_enable = 1;
$next = "/9";
?>

<div class="container">
    <div class="row justify-content-center align-items-center">

<!--  ----------------step 1------------------------------ -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4  col-centered text-center">
            <div class=pay>
                <div class=title>
                    INTRO
                </div>

		<div class=info>
		A simple as <b>Pimper</b>
		</div>
		<div class=msg><span id=msg_txt>&nbsp;</span></div>

<div class=about>
<b>Inspiration</b><br>
<p><i>Easy-to-use solution to organize ticket purchases in form of NFTs with FIAT and crypto. Convenience first, details under the hood.</i>
<br>
<b>How it works</b>
<br>- Organizer setups an event in one transaction
<br>- Participants pay in crypto or in FIAT and receive NFT tickets
<br>- Both parts are happy: organizers don't share their user database with third-party services. Participants visited the event and received unique NFT tickets.
<br>

<b>How we built it</b>
<br><i>We built a layer that receives FIAT payment for NFT tickets.</i>
We are excited to announce EVM-compatible smart contracts that implement the following features in a trustless way:
<br>- receives payment to generate NFTs
<br>- splits rewards between organizers and service providers
<br>- allow buyers to securely store, claim and/or transfer NFTs even without any knowledge of crypto
<br>
<b>Accomplishments that we're proud of</b>
<br>
Pimper solution is ready to be extended. It fully meets the requirements of the payment regulators. Mass adoption is coming
<br>
<b>Roadmap</b>
<br>- Buy tickets directly with any exchangeable token
<br>- Easy to setup flow to create a collection of event NFTs
<br>- Handle multiple types of tickets
<br>- Permanent storages support
<br>- Add support for NFT mutability
</div>
            </div>
<?php
include "arrow.php";

?>
        </div>
<!-- ------------------------------------------------------ -->

    </div>
</div>
