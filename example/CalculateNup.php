<?php

//This is a form that allows for input of variables for calculation

 echo "<link rel='stylesheet' type='text/css' href='bootstrap.min.css' />";   
 echo "<link rel='stylesheet' type='text/css' href='style.css' />";  

echo'<center><form action="returnData.php" method="get"><div class="ernie-main"><div class="ernie-form"><div class="form-group"><h1>Calculate Nup</h1><br>';

echo'<div>Sheet Width: <br><input type="text" id="sheetWidth" name="sheetWidth" value="13"></div><br><br>';
echo'<div>Sheet Height: <br><input type="text" id="sheetHeight" name="sheetHeight" value="19"></div><br><br>';
echo'<div>Card Width: <br><input type="text" id="width" name="width" value="13"></div><br><br>';
echo'<div>Card Height: <br><input type="text" id="height" name="height" value="19"></div><br><br>';
echo'<div>Bleed: <br><input type="text" id="bleed" name="bleed" value=".125"></div><br><br>';
echo'<div>Margin:<br><input type="text" id="margin" name="margin" value=".25"></div><br><br>';




echo '<br><hr><br><button type="submit" class="btn btn-lg">Calculate</button></div></div></div>  </form></center>';

?>