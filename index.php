<?php
	// Get the name stored in a variable.
	$name = "Praveen Kumar";
	// Create an image from the PNG that I have got.
	$image = imagecreatefrompng("empty.png");
	// Create a text colour.
	$textColour = imagecolorallocate($image, 0, 1, 0);
	// Write text inside image.
	imagestring($image, 5, 1000, 700, $name, $textColour);
	// Instruct the browser to read this page as image.
	header("Content-type: image/png");
	// Show the image to the browser or output.
	imagepng($image);
	// Destroy the image in the memory.
	imagedestroy($image);
?>
