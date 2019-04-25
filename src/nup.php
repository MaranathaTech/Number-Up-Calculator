<?php

class nup
{
	
	public  $sheetWidth = 13 ;
	public  $sheetHeight = 19 ;
	public  $cardWidth = 0 ;
	public  $cardHeight = 0 ;
	public  $bleed = .25 ;
	public  $margin = .25 ;


	public  $nup1 = array() ;
	public  $nup2 = array() ;
	public  $monkey1 = array() ;
	public  $monkey2 = array() ;



function showCalcWDrawing(){
		echo"<center><BR><h2>Imposition Specs:</h2>
		Sheet Size: $this->sheetWidth x $this->sheetHeight
		<BR>Card Size: $this->cardWidth x $this->cardHeight
		<br>Bleed: ".($this->bleed /2)."
		<br>Margin: $this->margin";

	echo"<BR><BR><hr><BR><h2>Nup1</h2>";
foreach($this->nup1 as $key => $value){	
echo"<BR>$key -> $value";
}
$img = imagecreatetruecolor( ($this->sheetWidth*72) *.1 ,  ($this->sheetHeight*72) *.1);
$myWidthpx = (($this->nup1['stepX']*72)*.1)-2;
$myHeightpx = (($this->nup1['stepY']*72)*.1)-2;
$bg = imagecolorallocate ( $img, 255, 255, 255 );
$xOffset = (((($this->sheetWidth - ($this->nup1['nupX']*$this->nup1['stepX']) )*72)*.1) / 2);
$yOffset = (((($this->sheetHeight - ($this->nup1['nupY']*$this->nup1['stepY']) )*72)*.1) / 2);
$orgY = $yOffset;

for($i = 0; $this->nup1['nupX'] > $i; $i++){
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
for($j = 1; $this->nup1['nupY'] > $j; $j++){
$yOffset+=(($this->nup1['stepY']*72)*.1);
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
}
$yOffset = $orgY ;
$xOffset+=(($this->nup1['stepX']*72)*.1);
}
imagepng($img,"nup1.png");
echo"<BR><img src='nup1.png'></img>";




echo"<BR><BR><hr><BR><h2>Nup2</h2>";
foreach($this->nup2 as $key => $value){	
echo"<BR>$key -> $value";
}
$img = imagecreatetruecolor( ($this->sheetWidth*72) *.1 ,  ($this->sheetHeight*72) *.1);
$myWidthpx = (($this->nup2['stepX']*72)*.1)-2;
$myHeightpx = (($this->nup2['stepY']*72)*.1)-2;
$bg = imagecolorallocate ( $img, 255, 255, 255 );
$xOffset = (((($this->sheetWidth - ($this->nup2['nupX']*$this->nup2['stepX']) )*72)*.1) / 2);
$yOffset = (((($this->sheetHeight - ($this->nup2['nupY']*$this->nup2['stepY']) )*72)*.1) / 2);
$orgY = $yOffset;

for($i = 0; $this->nup2['nupX'] > $i; $i++){
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
for($j = 1; $this->nup2['nupY'] > $j; $j++){
$yOffset+=(($this->nup2['stepY']*72)*.1);
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
}
$yOffset = $orgY ;
$xOffset+=(($this->nup2['stepX']*72)*.1);
}
imagepng($img,"nup2.png");
echo"<BR><img src='nup2.png'></img>";







if($this->monkey1['nup'] > $this->nup1['nup']){


echo"<BR><BR><hr><BR><h2>Monkey1</h2>";
foreach($this->monkey1 as $key => $value){	
echo"<BR>$key -> $value";
}
$img = imagecreatetruecolor( ($this->sheetWidth*72) *.1 ,  ($this->sheetHeight*72) *.1);
$myWidthpx = (($this->monkey1['stepX']*72)*.1)-2;
$myHeightpx = (($this->monkey1['stepY']*72)*.1)-2;
$bg = imagecolorallocate ( $img, 255, 255, 255 );

if($this->monkey1['alignment']=="right"){
$xOffset = (((($this->sheetWidth - (($this->monkey1['nupX']*$this->monkey1['stepX']) + ($this->monkey1['monkeyNupX'] * $this->monkey1['monkeyStepX'])))*72)*.1) / 2);
$yOffset = (((($this->sheetHeight - ($this->monkey1['nupY']*$this->monkey1['stepY']) )*72)*.1) / 2);
}
else{
$xOffset = (((($this->sheetWidth - ($this->monkey1['nupX']*$this->monkey1['stepX']) )*72)*.1) / 2);
$yOffset = (((($this->sheetHeight - (($this->monkey1['nupY']*$this->monkey1['stepY']) + ($this->monkey1['monkeyNupY'] * $this->monkey1['monkeyStepY'])))*72)*.1) / 2);
}



$orgY = $yOffset;
$orgX = $xOffset;

for($i = 0; $this->monkey1['nupX'] > $i; $i++){
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
for($j = 1; $this->monkey1['nupY'] > $j; $j++){
$yOffset+=(($this->monkey1['stepY']*72)*.1);
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
}
$yOffset = $orgY ;
$xOffset+=(($this->monkey1['stepX']*72)*.1);
}

if($this->monkey1['alignment']=="bottom"){
$xOffset = $orgX;

}
else{
$yOffset = $orgY;	
}

$orgX = $xOffset;
$orgY = $yOffset;

for($i = 0; $this->monkey1['monkeyNupX'] > $i; $i++){
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myHeightpx,$yOffset+$myWidthpx,$bg);
for($j = 1; $this->monkey1['monkeyNupY'] > $j; $j++){
$yOffset+=(($this->monkey1['monkeyStepY']*72)*.1);
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myHeightpx,$yOffset+$myWidthpx,$bg);
}
$yOffset = $orgY ;
$xOffset+=(($this->monkey1['monkeyStepX']*72)*.1);
}



imagepng($img,"monkey1.png");
echo"<BR><img src='monkey1.png'></img>";

}







if($this->monkey2['nup'] > $this->nup2['nup']){

echo"<BR><BR><hr><BR><h2>Monkey2</h2>";
foreach($this->monkey2 as $key => $value){	
echo"<BR>$key -> $value";
}
$img = imagecreatetruecolor( ($this->sheetWidth*72) *.1 ,  ($this->sheetHeight*72) *.1);
$myWidthpx = (($this->monkey2['stepX']*72)*.1)-2;
$myHeightpx = (($this->monkey2['stepY']*72)*.1)-2;
$bg = imagecolorallocate ( $img, 255, 255, 255 );

if($this->monkey2['alignment']=="right"){
$xOffset = (((($this->sheetWidth - (($this->monkey2['nupX']*$this->monkey2['stepX']) + ($this->monkey2['monkeyNupX']*$this->monkey2['monkeyStepX'])))*72)*.1) / 2);
$yOffset = (((($this->sheetHeight - ($this->monkey2['nupY']*$this->monkey2['stepY']) )*72)*.1) / 2);
}
else{
$xOffset = (((($this->sheetWidth - ($this->monkey2['nupX']*$this->monkey2['stepX']) )*72)*.1) / 2);
$yOffset = (((($this->sheetHeight - (($this->monkey2['nupY']*$this->monkey2['stepY']) + ($this->monkey2['monkeyNupY']*$this->monkey2['monkeyStepY'])))*72)*.1) / 2);
}



$orgY = $yOffset;
$orgX = $xOffset;
for($i = 0; $this->monkey2['nupX'] > $i; $i++){
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
for($j = 1; $this->monkey2['nupY'] > $j; $j++){
$yOffset+=(($this->monkey2['stepY']*72)*.1);
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myWidthpx,$yOffset+$myHeightpx,$bg);
}
$monkeyY=$yOffset;

$yOffset = $orgY ;
$xOffset+=(($this->monkey2['stepX']*72)*.1);
}

if($this->monkey2['alignment']=="bottom"){
$xOffset = $orgX;
$yOffset = $monkeyY+ (($this->monkey2['stepY']*72)*.1);
}
else{
$yOffset = $orgY ;	
}

$orgX = $xOffset;
$orgY = $yOffset;
for($i = 0; $this->monkey2['monkeyNupX'] > $i; $i++){
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myHeightpx,$yOffset+$myWidthpx,$bg);
for($j = 1; $this->monkey2['monkeyNupY'] > $j; $j++){
$yOffset+=(($this->monkey2['monkeyStepY']*72)*.1);
imagefilledrectangle($img,$xOffset,$yOffset,$xOffset+$myHeightpx,$yOffset+$myWidthpx,$bg);
}
$yOffset = $orgY ;
$xOffset+=(($this->monkey2['monkeyStepX']*72)*.1);
}



imagepng($img,"monkey2.png");
echo"<BR><img src='monkey2.png'></img>";

}

echo "</center>";
	
}

	
function showCalculation(){



echo"<BR><b>Nup1</b>";
foreach($this->nup1 as $key => $value){	
echo"<BR>$key -> $value";
}

echo"<BR><BR><b>Nup2</b>";
foreach($this->nup2 as $key => $value){	
echo"<BR>$key -> $value";
}
	
echo"<BR><BR><b>Monkey1</b>";
foreach($this->monkey1 as $key => $value){	
echo"<BR>$key -> $value";
}	

echo"<BR><BR><b>Monkey2</b>";
foreach($this->monkey2 as $key => $value){	
echo"<BR>$key -> $value";
}	
	
}
	
	
function calculate(){


$width = $this->cardWidth;
$height = $this->cardHeight;
$bleed = $this->bleed;
$margin = $this->margin;
$sheetHeight = $this->sheetHeight;
$sheetWidth = $this->sheetWidth;


if($width > $height){
$width1 = $width + $bleed;
$height1 = $height + $bleed;
}
else{
$width1 = $height + $bleed;
$height1 = $width + $bleed;
}

$nup1X = floor($sheetWidth / $width1);
$nup1Y = floor($sheetHeight / $height1);
$nup2X = floor($sheetHeight / $width1);
$nup2Y = floor($sheetWidth / $height1);
$this->nup1['nup'] = $nup1X * $nup1Y;
$this->nup1['nupX'] = $nup1X;
$this->nup1['nupY'] = $nup1Y;
$this->nup1['stepX'] = $width1;
$this->nup1['stepY'] = $height1;
$this->nup2['nup'] = $nup2X * $nup2Y;
$this->nup2['nupX'] = $nup2Y;
$this->nup2['nupY'] = $nup2X;
$this->nup2['stepX'] = $height1;
$this->nup2['stepY'] = $width1;

$nup1XLeftover = $sheetWidth - ($nup1X * $width1);
$nup1YLeftover = $sheetHeight - ($nup1Y * $height1);
$nup2XLeftover = $sheetHeight - ($nup2X*$width1);
$nup2YLeftover = $sheetWidth - ($nup2Y* $height1);

//determine monkey


$nup1Amonkey = floor($nup1YLeftover / $width1);
$nup1AmonkeyAmount = floor($sheetWidth / $height1);
$nup1AmonkeyFinal = $nup1Amonkey * $nup1AmonkeyAmount;

$nup1Bmonkey = floor($nup1XLeftover / $height1);
$nup1BmonkeyAmount = floor($sheetHeight/ $width1);
$nup1BmonkeyFinal = $nup1Bmonkey * $nup1BmonkeyAmount;
//echo"<BR>$nup1BmonkeyFinal";
if($nup1AmonkeyFinal > $nup1BmonkeyFinal){
$nup1monkey =$nup1Amonkey;
$nup1monkeyAmount = $nup1AmonkeyAmount;
$nup1monkeyFinal =$nup1AmonkeyFinal;		
$this->monkey1['alignment'] = "bottom";
}
else{
$nup1monkey =$nup1Bmonkey;
$nup1monkeyAmount = $nup1BmonkeyAmount;
$nup1monkeyFinal =$nup1BmonkeyFinal;	
$this->monkey1['alignment'] = "right";

}
$nup2Amonkey = floor($nup2YLeftover / $width1);
$nup2AmonkeyAmount = floor($sheetHeight / $height1);
$nup2AmonkeyFinal = $nup2Bmonkey * $nup2AmonkeyAmount;

$nup2Bmonkey = floor($nup2XLeftover / $height1);
$nup2BmonkeyAmount = floor($sheetWidth / $width1);
$nup2BmonkeyFinal = $nup2Bmonkey * $nup2BmonkeyAmount;

if($nup2AmonkeyFinal > $nup2BmonkeyFinal){
$nup2monkey =$nup2Amonkey;
$nup2monkeyAmount = $nup2AmonkeyAmount;
$nup2monkeyFinal =$nup2AmonkeyFinal;	
$this->monkey2['alignment'] = "right";
	
}
else{
$nup2monkey =$nup2Bmonkey;
$nup2monkeyAmount = $nup2BmonkeyAmount;
$nup2monkeyFinal =$nup2BmonkeyFinal;	
$this->monkey2['alignment'] = "bottom";

}

/*$nup1monkey = floor($nup1YLeftover / $width1);
$nup1monkeyAmount = floor($sheetWidth / $height1);
$nup1monkeyFinal = $nup1monkey * $nup1monkeyAmount;

$nup2monkey = floor($nup2YLeftover / $width1);
$nup2monkeyAmount = floor($sheetHeight / $height1);
$nup2monkeyFinal = $nup2monkey * $nup2monkeyAmount;*/



$nup1Final = $nup1monkeyFinal + ($nup1X * $nup1Y);
$nup2Final = $nup2monkeyFinal + ($nup2X * $nup2Y);

$this->monkey1['nup'] = $nup1Final;
$this->monkey1['nupX'] = $nup1X;
$this->monkey1['nupY'] = $nup1Y;
$this->monkey1['stepX'] = $width1;
$this->monkey1['stepY'] = $height1;
$this->monkey1['monkeyNupY'] = $nup1monkeyAmount;
$this->monkey1['monkeyNupX'] = $nup1monkey;
$this->monkey1['monkeyStepX'] = $height1;
$this->monkey1['monkeyStepY'] = $width1;

$this->monkey2['nup'] = $nup2Final;
$this->monkey2['nupX'] = $nup2Y;
$this->monkey2['nupY'] = $nup2X;
$this->monkey2['stepX'] = $height1;
$this->monkey2['stepY'] = $width1;
$this->monkey2['monkeyNupY'] = $nup2monkey;
$this->monkey2['monkeyNupX'] = $nup2monkeyAmount;
$this->monkey2['monkeyStepX'] = $width1;
$this->monkey2['monkeyStepY'] = $height1;


if($nup1Final >= $nup2Final){
//return $nup1Final;
}
else{
//return $nup2Final;
}


}









}

?>