<html>
<head>
<title>Site</title>
<meta name="description" content="Site">
 <link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
<div class="container">
	<div class="top-bar">
		<div class="fixed-width">
			<div id="logo">
				<img src="/logo-laptop.png" width="100%" height="70" alt="Site"/>
			</div>
			<ul>
				<li><a href="http://localhost/site/1.php?id=1">Home</a></li>
				<li><a href="http://localhost/site/1.php?id=2">lesson 1</a></li>
				<li><a href="http://localhost/site/1.php?id=3">lesson 2</a></li>
		
			</ul>
			<div id="search-box">
				<input type="text"
				placeholder="search"/>
			</div>
		</div>
	</div>


	<div class="news-bar">
		<div class="fixed-width">
		<p> Site</p>
		</div>
	</div>
	<div class="category-bar">
		<div class="fixed-width">
		<ul>
			<li>adress</li>
			<li>contact phone</li>
		</ul>
		</div>
	</div>

<!--</div>-->
	<div class="content">
		<div class="fixed-width">
			<h1>tasks</h1>
			<?php
			if ($_GET['id']==1){}
			else if ($_GET['id']==2){include 'lesson 2.php';}
			else if($_GET['id']==3){include 'lesson 3.php';}
			?>
			<p>text text text text text text</p>
		</div>
	</div>
	<div class="watch-listen">
	<h2>block 2 video/photo</h2>
	<img src=""/>
	</div>
	<div class="copyright">
		<div class="fixed-width">
			<h3>Copyright</h3>
		</div>
	</div>
</div>
</body>
</html>