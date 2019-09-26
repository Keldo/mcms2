<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__))
{
	header("Location: /");
}
else
{
	if($sentry->get_real_ip() != '64.223.238.52')
	{
		// Update page counts
		$query = "UPDATE site_views SET site_count=site_count+1";
		$result = $db->query($query);
	}
?>


<section>
<div class="main">
	<h2>Welcome to DW Pool</h2>
	<p>Our Bitcoin Node is up and 100% operational as is our stratum front end for miners. Please see the <a href="/connect">Connect Page</a>.</p>
</div>
<div class="main">
	<h2>DW OS</h2>
	<p>The Tiny Miners OS is in the beginning stage of development, intent is a stripped down version of something, with no GUI and the primary mining software packages installed amongst Anti-Virus, Anti-Rootkit and Anti-DDoS.</p>
</div>
<div class="main">
	<h2>Sentry</h2>
	<p>This domain is secured by a custom security class called Sentry&trade; which will ban anyone from a known threat country, malicius bots, scrapers, harvesters, etc. Be Warned!</p>
</div>
<div class="main">
	<h2>Coinbase</h2>
	<p>If you are new to mining and not sure how to get a Crypto Address for Bitcoin or Ethereum, etc. We strongly recommend using <a href="https://www.coinbase.com/join/cilley_1" target="_blank"><strong>Coinbase</strong></a> simply because
	it is the oldest, extremely secure and offers a vault for secure storage.</p>
</div>
</section>

<section id="features">
  <div class="box">
    <div class="level">
		Zero Fee
		<p class="stuff">No Fuss, just anonymous SPLNS Bitcoin Mining For Everyone..</p>
	</div>
  </div>
  <div class="box">
    <div class="level">
     CURRENT ISSUES:
    <p class="stuff">None, as of yet.</p>
   </div>
  </div>
  <div class="box">
    <div class="level">
    BTC Pool
    <p class="stuff">Our BTC Pool can handle extremely large amounts of miners without detriment to performance..</p>
  </div>
 </div>
 <div class="box">
    <div class="level">
    ALWAYS REMEMBER
    <p class="stuff">We do not require you to Register, for the sake of your security, nor do we require, or offer a wallet. Your BTC Address is all you need!</p>
  </div>
 </div>
</section>

<?php
}
?>