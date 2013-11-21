<!DOCTYPE html>
<html>
<head>
	<title>About ~ COMPSOC</title>
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
			<li><a href="about.php?announce" class="onit">About</a></li>
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
		
		<article>
		<div class="post-header">
		  <h1>HTML CSS Layout test:</h1>
		  <h3>Just so you can see what the CSS does...</h3>
		</div>
		<p>The title is wrapped in a div with class post-header, which modifies the formatting a little</p>
		<h1>Heading 1</h1>
		<p>Spacer Paragraph...</p>
		<h2>Heading 2</h2>
                <p>Spacer Paragraph...</p>
		<h3>Heading 3</h3>
                <p>Spacer Paragraph...</p>
		<h4>Heading 4</h4>
                <p>Spacer Paragraph...</p>
		<h5>[unused] Heading 5</h5>
                <p>Spacer Paragraph...</p>
		<h6>[unused] Heading 6</h6>
                <p>Spacer Paragraph...</p>
		<hr/>
		<p>Horizontal rule, &lt;hr/&gt; above</p>
		<blockquote>If there are developers in the audience you'll know this: Developers have the attention spans of slightly moronic woodland creatures. There's not much going on; they want to work on the next thing. Giving them another week is just going to add frustration to everything.
		<cite>Linus Torvalds, LinuxCon Europe 2013</cite></blockquote>
		<p>Block Quote, &lt;blockquote&gt;...&lt;cite&gt;&lt;/cite&gt;&lt/blockquote&gt;</p>
		<p>Inline quotes are slightly different: <q>Developers have the attention spans of slightly moronic woodland creatures.</q> but are still useful. &lt;q&gt;&lt;/q&gt;</p>
		
		<p>There's some special formatting for images as well: a &lt;div class="image-caption"&gt; conaining an &lt;img /&gt; tag and a &lt;p&gt;&lt/p&gt; will render like:</p>
		<div class="image-caption">
		  <img src="http://comp-soc.com/compsoc/sponsor-logos/googlelogo" />
		  <p>With the caption content rendering in the paragraph tag</p>
		</div>
		
		<p>Which is different to how images normally render, here kindly demonstrated by Amazon; By default, they render as blocks that are centred.</p>
		<img src="http://comp-soc.com/compsoc/sponsor-logos/amazonlogo" />

		<p>iframes have a little bit of customisation, i.e. they're forced into 100% width. This may change:</p>
		<iframe width="420" height="315" src="//www.youtube.com/embed/jjRAKuis7T8" frameborder="0" allowfullscreen></iframe>

		<p>In HTML 5 &lt;b&gt; (bold) has been replaced with &lt;strong&gt; and &lt;i&gt; (itlaics) has been replaced with &lt;em&gt; (emphasis). Ol tags still render but we're not using them.</p>
		<p>So, some bold text using the strong tags looks like: <strong>this</strong> whilst using the old b tags looks like <b>this</b>, i.e. is deprecated in most browsers.</p>
		<p>Similarly, the emphasis tage gives test like <em>this</em> and the old i tag gives <i>this</i>, which is again deprecated as we're using HTML5</p>
		<p>The &lt;sup&gt; and &lt;sub&gt; tags are also available for <sup>superscript</sup> and <sub>subscript</sub> text, and are chainable <sup>for people<sup> who reddit too much<sup>Ahhhhh!</sup></sup></sup> But they do mess up the line heights a bit...</p>
		<p>There are other 'semantic' HTML5 tags, like <small>small (Does nothing)</small>, <ins>ins for inserted text</ins>, <del>del for deleted text</del>, and <mark>mark</mark> to mark/hilight text. There's custom css for text selection, that <span style="color: #fff; background: #f57870;">makes it look like this.</span></p>

		<table><thead><tr><td>Double Column</td><td>Tables</td></tr></thead>
		<tbody><tr><td>Top Left</td><td>Top Right</td></tr>
		<tr><td>Middle Left</td><td>Middle Right</td></tr>
		<tr><td>Bottom Left</td><td>Bottom Right</td></tr>
		</tbody></table>
		<p>Various table formats</p>
		<table><thead><tr><td>Triple</td><td>Column</td><td>Tables</td></tr></thead>
		<tbody>
		<tr><td>Top Left</td><td>Top Middle</td><td>Top Right</td></tr>
		<tr><td>Middle Left</td><td>Middle Middle</td><td>Middle Right</td></tr>
		<tr><td>Bottom Left</td><td>Bottom Middle</td><td>Bottom Right</td></tr>
		</tbody></table>

		<p>Difinition lists aren't all that common, but we have CSS for them! Yay!</p>
		<dl>
		  <dt>Dummster Anzunehmender User</dt>
		  <dd>German for stupidest immaginable user; Often at the centre of PEBKAC issues...</dd>
		  <dt>Bogosort</dt>
		  <dd>The archetypical perversely awful algorithm (as opposed to bubble sort, which is merely the generic bad algorithm).</dd>
		</dl>

		<p>We have the standard ordered and unordered lists as well: &lt;ul | ol&gt; &lt;li&gt;&lt;/li&gt; &lt;/ul | /ol&gt;</p>
		<ul>
		  <li>Unoredered list</li>
		  <li>And another</li>
		  <li><ul>
		      <li>An embedded ul</li>
		      <li>Looks a bit odd...</li>
		  </ul></li>
		  <li>And we can also embed ordered lists in unordered ones:</li>
		  <li><ol>
		      <li>1st entry</li>
		      <li>second</li>
		  </ol></li>
		  <li>And the list goes on...</li>
		</ul>
		
		<p>And ordered lists have a different indexing system for 3 levels deep:</p>

		<ol>
		  <li>The list uses numbered indexing</li>
		  <li>for the first level, then</li>
		  <li><ol>
		      <li>Lowecase latin for the next level of lists;</li>
		      <li><ol>
			  <li>Then lowercase numerals for the third level of listing</li>
			  <li>And on and on and on and on and on and on...</li>
		      </ol></li>
		  </ol></li>
		</ol>

		<p>Preformatted code blocks: &lt;pre&gt; &lt;/pre&gt;</p>
		<pre>
Note that html in pres will still be rendered; e.g. <q>a quote</q>
   And that whitespace, like indentation, persists

loeb :: Functor f => f (f a -> a) -> f a
loeb x = go where go = fmap ($ go) x

moeb :: (((a -> b) -> b) -> c -> a) -> c -> a
moeb f x = go where go = f ($ go) x
		</pre>
		<p>We also have footnotes, which should be auto generated??</p>
		
		<div class="footnotes">
		<ol>
		  <li>These are fairly self-explanatory</li>
		  <li>Just your run of the mill footnotes...</li>
		  <li>You've seen these before</li>
		</ol>
		</div>
		
		</article>
		
		
		<?php include("footer.php"); ?>
	
	</div><!-- end container -->
	
</div><!-- end wrapper -->
</body>

</html>
