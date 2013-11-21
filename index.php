<!DOCTYPE html>
<html>
<head>
	<title>COMPSOC</title>
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
			<li><a href="index.php" class="onit">Home</a></li>
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
	
	
	
	<section id="gallery">
		<div class="column">
			<h3>November STMU</h3>
			<p>Come on Friday the 29th to the Informatics Forum for free pizza! Someone also mentioned 
			some tech talks and stuff...</p>
			<em>2013-11-29 18:00 to 20:00</em>
		</div>
		<div class="column">
			<h3>New New Compsoc Website</h3>
			<p>Apparently there's a SIG for this but there's a bunch of first years on it so don't get your
			hopes up... Anyone have experience building sites in Haskell??! <sup>Not even joking<sup>oh god</sup></sup>
			YAY!</p>
		</div>
		<div class="column">
			<h3>Random Latin because...</h3>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis lorem ut lorem 
			varius fringilla. Duis quis metus ligula. Donec ultricies posuere risus a fringilla. 
		</div>
		<div class="clear"></div>
	</section><!-- end gallery -->
	
	<!--[if lte IE 7]><div id="i-hate-ie">
	        <h3>WE LOVE HTML5, CSS3 AND KITTENS!</h3>
                <p>Your browser, unfortunately, doesn't and we can't be bothered to write special CSS and stuff just so it works in fossilised browsers...</p>
	        <p>So maybe invest in something free like Chrome, Firefox and not IE!</p>
	</div><![endif]-->
	
	<div id="content">
		
		<article>
			<div class="post-header">
				<h1>Home</h1>
				<h3>This is where post metadata and timestamps will go...</h3>
			</div>
			<h2>Welcome to the New New CompSoc Website!</h3>
			<p>This is just the HTML theme for the site which will be built in Python using the Django framework. Please give constructive criticism and feedback on #compsoc on irc.imaginarynet.org.uk. </p>
			<h3>Current To-Do List:</h3>
			<ul>
				<li>Add a sidebar - I hate doing this in CSS...</li>
				<li>Themeing for KnowledgeBase and User profiles</li>
			</ul>
			<h3>Stuff you can fiddle with:</h3>
			<p>The pages Home, About, FAQ, Sponsors and the profile page, got to by clicking the random gravatar in the top right corner.</p>
			<p>Also, adding ?announce and ?logout to the end of the URLs show the themeing for site announcements and being logged out.</p>
			
		</article>

                <?php include("sidebar.php"); ?>

                <div class="comments">
                        <div class="form">
                        <form action="index.php" method="get" >
                                <div class="meta">
                                        <h3>Leave a Comment:</h3>
                                        <span class="detail">You can use <a href="http://daringfireball.net/projects/markdown/syntax" alt="Markdown Syntax list" target=blank>Markdown</a> syntax in your comment.</span>
                                        <input type="submit" value="Post Comment" />
                                </div>
                                <textarea name="Comment" maxlength="10000" required placeholder="Your wonderful and much appreciated comment goes here..."></textarea>
                                <div class="clear">&nbsp;</div>
                        </form>
                        </div>
                        <!-- Comments! -->
                </div><!-- end comments -->

		
		<?php include("footer.php"); ?>
	</div><!-- end container -->
	
</div><!-- end wrapper -->
</body>

</html>
