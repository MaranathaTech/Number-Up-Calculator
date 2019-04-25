<?php

//This is where the magic happens
include("classes/nup.php");


 echo "<link rel='stylesheet' type='text/css' href='bootstrap.min.css' />";   
 echo "<link rel='stylesheet' type='text/css' href='style.css' />";  



$myNup = new nup;

//set trim with & height. This example uses GET, so you can test via url
$myNup->cardWidth = $_GET['width'];
$myNup->cardHeight = $_GET['height'];

//set the bleed to correctly determine the image size of each item
$myNup->bleed = ($_GET['bleed'] * 2);

//set the margin to the desired non-print area around the edge of the sheet
$myNup->margin = $_GET['margin'];

//set the sheet size
$myNup->sheetWidth = $_GET['sheetWidth'];
$myNup->sheetHeight = $_GET['sheetHeight'];


$myNup->calculate();//creates nup arrays

//$myNup->showCalculation();//just prints nup arrays to screen

$myNup->showCalcWDrawing();//prints nup arrays to screen and creates image examples of each possible imposition


?>