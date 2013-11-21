<!DOCTYPE html>
<html>
<head>
	<title>Your Account ~ COMPSOC</title>
	<!--[if lte IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/style.css">

</head>


<body>
<div id="wrapper">
	<?php include("header.php"); ?>
	<nav>
	       <div id="navwrap">
	       <ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php?announce">About</a></li>
			<li><a href="FAQ.php">FAQ</a></li>
                        <li><a href="knowledge.php">KnowledgeBase</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="sponsors.php">Sponsors</a></li>
                        <li><a href="hardlib.php">HardLibrary</a></li>
                        <li><a href="join.php">Join CompSoc</a></li>
                        <li><a href="EGM.php">EGM</a></li>

		</ul>
		<form class="search" method="GET">
		        <input type="text" name="search"></input>
		</form>
		</div>
	</nav>
	
	<div id="container"><!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->
	
	
	<!--[if lte IE 7]><div id="i-hate-ie">
	        <h3>WE LOVE HTML5, CSS3 AND KITTENS!</h3>
                <p>Your browser, unfortunately, doesn't and we can't be bothered to write special CSS and stuff just so it works in fossilised browsers...</p>
	        <p>So maybe invest in something free like Chrome, Firefox and not IE!</p>
	</div><![endif]-->
	
	<div id="content">
		
	        <div id="account-blurb">
		  <img src="<?php bigGravUrl(); ?>" />
		  <div id="user-info">
		  <h2>JR Hacker</h2>
		  <p>jrh@catb.org</p>
		  </div>
		</div>
	        
	        <?php include("footer.php"); ?>
	
	</div><!-- end container -->

	<?php
	   function genRandomString($length = 10) {
             $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
             $randomString = '';
             for ($i = 0; $i < $length; $i++) {
               $randomString .= $characters[rand(0, strlen($characters) - 1)];
             }
           return $randomString;
           }
	   function bigGravURL() {
             $hash = md5( strtolower( trim( genRandomString() ) ) );
             echo "http://www.gravatar.com/avatar/" . $hash . ".jpg?s=220&d=retro";
           }
	?>
	
</div><!-- end wrapper -->
</body>

</html>
