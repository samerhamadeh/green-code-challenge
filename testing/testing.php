<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
$str = file_get_contents('picdetails.json');
$json = json_decode($str, true);
$n = count($json);
?>
<div class="slideshow-container" style='width:900px'>
	<?php
		for ($x = 0; $x < $n; $x++) {
		echo "
		<div class='mySlides fade'>
			<div class='numbertext'>" . ($x+1) . " / " . $n . "</div>
			<img src='" . $json[$x]['image'] . "' style='width:100%;max-height:360px;'>
			<div class='text'>" . $json[$x]['title'] . "</div>
		</div>
		";
	}
	?>
	
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
	<?php
		for($y = 1; $y <= $n; $y++)
		echo "
		<span class='dot' onclick='currentSlide(" . $y . ")'></span> 
		";
	
	?>
  
</div>
<script src="js/slideshow.js"></script>

</body>
</html> 
