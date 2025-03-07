<?php
// Caching disable headers
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Output as a GIF image
header ('Content-type:image/gif');

// Include the GIFGenerator class
include( realpath(__DIR__) . '/GIFGenerator.class.php');

// Initialize a new GIFGenerator object
$gif = new GIFGenerator();

// Create a multidimensional array with all the image frames
$imageFrames = array(
	'repeat' => 5,
	'frames' => array(
		array(
			'image' => realpath(__DIR__) . '/images/newyear.jpg',
			'text' => array(
				array(
					'text' => 'Hello GIF frame 1',
					'font' => realpath(__DIR__) . '/fonts/Lato-Light.ttf',
					'font-size' => 30,
					'angle' => 0,
					'font-color' => '#000',
					'x-position' => 140,
					'y-position' => 138
				)
			),
			'delay' => 100
		),
		array(
			'image' => realpath(__DIR__) . '/images/newyear.jpg',
			'text' => array(
				array(
					'text' => 'Hello GIF frame 2',
					'font' => realpath(__DIR__) . '/fonts/Lato-Light.ttf',
					'font-size' => 15,
					'angle' => 0,
					'font-color' => '#000',
					'x-position' => 300,
					'y-position' => 138
				),
				array(
					'text' => 'Hello GIF frame 2',
					'font' => realpath(__DIR__) . '/fonts/Lato-Light.ttf',
					'font-size' => 15,
					'angle' => 0,
					'font-color' => '#000',
					'x-position' => 300,
					'y-position' => 108
				)
			),
			'delay' => 100
		),
		array(
			'image' => realpath(__DIR__) . '/images/newyear.jpg',
			'delay' => 50
		)
	)
);

echo $gif->generate($imageFrames);
?>