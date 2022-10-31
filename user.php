<html>
<head>
<title>Site</title>
<meta name="description" content="Site">
 <link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>

<div class="fixed-width"> 
		<div class="form">
			<h3>
<?php
$string = "не определено";
if(isset($_POST["string"])){
  
    $string = $_POST["string"];
}

$arr1 = str_split($string);
echo "Strng:";
for ($i=count($arr1)-1; $i>=0; $i--) {
     echo  $arr1[$i];
}

echo "</br><a href='http://localhost/site/1.php?id=3'>back</a>";
?>
		</h3>
	</div>
</div>
</body>
</html>