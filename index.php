<?php
	// Get the name from the URL or GET Parameters.
	$name = isset($_GET["name"]) ? $_GET["name"] : "Praveen Kumar";
	// Create an image from the PNG that I have got.
	$image = imagecreatefrompng("empty.png");
	// Create a text colour.
	$textColour = imagecolorallocate($image, 0, 0, 0);
	// Get the font path.
	$fontPath = __DIR__ . "/font.otf";
	// Get the bounding box of the text.
	$coords = imagettfbbox(60, 0, $fontPath, $name);
	// Import the custom font from path.
	// Write text inside image.
	// Left margin should be negated with half width of the text.
	// Current text width is given by the above $coords, so divide it by 2.
	imagettftext($image, 60, 0, 1000 - ($coords[2] / 2), 720, $textColour, $fontPath, $name);
	// Instruct the browser to read this page as image.
	header("Content-type: image/png");
	// Show the image to the browser or output.
	imagepng($image);
	// Destroy the image in the memory.
	imagedestroy($image);
?>