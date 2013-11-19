<!DOCTYPE html>
        <?php
	   function generateRandomString($length = 10) {
	     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	     $randomString = '';
	     for ($i = 0; $i < $length; $i++) {
	       $randomString .= $characters[rand(0, strlen($characters) - 1)];
	     }
           return $randomString;
	   }
	   function gravurl() {
	     $hash = md5( strtolower( trim( generateRandomString() )));
	     echo "http://www.gravatar.com/avatar/" . $hash . ".jpg?s=60&d=retro";
	   }
	?>

	<?php if(isset($_GET['announce'])){ ?>
	<aside id="announce"><p>Hey guys! Just a heads-up on the upcoming STMU this friday in AT 4.04!</p></aside>
	<?php } ?>
	<header><div id="headwrap">
		<div id="banner"><!--span class="black">COMP</span><span class="red">SOC</span--></div>
		<div id="userinfo">
		        <?php if( !isset( $_GET['logout'])){ ?>
		        <div id="uname">
		                <h3>JR Hacker</h3>
				<a href="index.php?logout" class="button">Log Out</a>
			</div>
		        <img src="<?php gravurl(); ?>" class="avatar"/></div>
		        <?php } ?>
		<div class="clear"></div>
	</div></header>
