<!DOCTYPE html>
<html>
<head>
	<title>Your Account ~ COMPSOC</title>
	<!--[if lte IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/ico" href="img/favicon.ico">
        <link rel="apple-touch-icon" type="image/png" hrep="img/compsoc-icon.png">

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
		  <img src="<?php bigGravUrl(); ?>" alt="Profile Picture" />
		  <div id="user-info">
		  <h2>JR Hacker</h2>
		  <p>
		  jrhacker@catb.org<br/>
		  #compsoc : jrh
		  </p>
		  </div>
		  <a href="account.php" class="button">Edit</a> 
		</div>
		
		<div id="account-main">
		  
		  <div class="account-column">
		    
		    <h1>Cascaders</h1>
		    <p>Select programming languages and Informatics topics that you're willing to help people out with:</p>
		    <table><thead>
			<tr><td>Subject</td><td>Level</td><td></td></tr>
		    </thead><tbody>
			<tr><td>C</td><td>4</td><td>I <3 machine code</td></tr>
			<tr><td>Bash Scripting</td><td>4</td><td>Dream in #!/bin/bash</td></tr>
			<tr><td>INF1 Java</td><td>3</td><td>Pretty Damn Good</td></tr> 
			<tr><td>Haskell</td><td>2</td><td>Functional</td></tr>
			<tr><td>Java</td><td>2</td><td>Competent</td></tr>
			<tr><td>HTML & CSS</td><td>1</td><td>Bit of a &lt;noob&gt;</td></tr>
			<tr><td><a href="account.php" class="button">Add...</a></td></tr>
		    </tbody></table>
	
		    <h1>IRC</h1>
                    <h3>Current Swearer's league:</h3>
                    <p>Your postion is hilighted. Updated weekly. We're still not sure if this is a good thing or...</p>
                    <table><thead>
		    <tr><td>Rank</td><td>Nick</td><td>Score</td></tr>
		    </thead><tbody>
                    <tr><td>1st </td><td>sballmer                </td><td>  586</td></tr>
                    <tr><td>2nd </td><td>torvalds                </td><td>  526</td></tr>
                    <tr class="mark"><td>3rd </td><td>jrh        </td><td>  239</td></tr>
                    <tr><td>4th </td><td>woz                     </td><td>  208</td></tr>
                    <tr><td>5th </td><td>ritchie                 </td><td>  110</td></tr>
                    <tr><td>6th </td><td>thomson                 </td><td>  85</td></tr>
                    <tr><td>7th </td><td>berners                 </td><td>  63</td></tr>
                    <tr><td>8th </td><td>mullenweg               </td><td>  62</td></tr>
                    <tr><td>9th </td><td>larry                   </td><td>  43</td></tr>
                    <tr><td>10th</td><td>lambdabot               </td><td>  31</td></tr>
                    </tbody></table>
		  
		  </div>
		  
		  <div class="account-column">

		    <h1>User Information</h1>
                    <p>All the information we have on you</p>
                    <table><tbody>
                        <tr><td>Username</td><td>JRHacker</td></tr>
                        <tr><td>First Name</td><td><input type="text" name="fname" value="JR"></input></td></tr>
                        <tr><td>Second Name</td><td><input type="text" name="fname" value="Hacker"></td></tr>
                        <tr><td>Primary Email</td><td><input type="text" name="pemail" value="jrhacker@catb.org"></input></td></tr>
			<tr><td>Secondary Email</td><td><a href="account.php" class="button">Add...</a></td></tr>
			<tr><td>IRC Nick</td><td><input type="text" name="ircnick" value="jrh"></input></td></tr>
                    </tbody></table>
		    
		    <h1>Profile</h1>
		    <textarea>Not got much to say given I'm the archetypical filler content person...</textarea>
		  
		  </div>
		  
		  <h3></h3>
		  
		</div>
	        
		<div class="clear"></div>
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
