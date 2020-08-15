<?php
	// Get the name stored in a variable.
	$name = "Praveen Kumar";
	// Create an image from the PNG that I have got.
	$image = imagecreatefrompng("empty.png");
	// Create a text colour.
	$textColour = imagecolorallocate($image, 0, 0, 0);
	// Get the font path.
	$fontPath = __DIR__ . "/font.otf";
	// Import the custom font from path.
	// Write text inside image.
	// Left margin should be negated with half width of the text.
	// Current text width is 575px, so divided by 2 comes around 285.
	imagettftext($image, 60, 0, 1000 - (575 / 2), 700, $textColour, $fontPath, $name);
	// Instruct the browser to read this page as image.
	header("Content-type: image/png");
	// Show the image to the browser or output.
	imagepng($image);
	// Destroy the image in the memory.
	imagedestroy($image);
?>