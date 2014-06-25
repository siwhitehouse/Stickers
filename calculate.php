<html>
<head>
<link rel="stylesheet" type="text/css" href="http://siwhitehouse.co.uk/stickers/serendipity/style/css/style.css">
</head>
<body>
<div id="header" align="center">
	<h1>The Got - Got - Need Machine</h1>
</div>
<div id="results" style="text-align:center">
<h2>
<?php
/*
	Initialise variables
*/

$total = $_POST['total'];
$stickers = $_POST['stickers'];
$swaps = $_POST['swaps'];
$remainder = $total - $stickers;
$potential_remainder = $total-$stickers-$swaps;
$expected = 0;

$y= round($total*(log($total) + 0.5772156649)+0.5);
echo "To collect a full set of $total stickers you should expect to have to buy ";
echo "$y stickers, without swapping";
echo "<br>";
echo "You already have $stickers stickers. To get the remaining $remainder stickers you should expect to buy ";
echo round (portion($remainder, $total));
echo " more stickers.";
echo "<br>";
echo "But, if you successfully swapped the $swaps stickers you've got spare, you'd only have ";
echo $potential_remainder;
echo " left to collect";
echo "<br>";
echo "To get those, you'd only expect to have to buy ";
echo round(portion($potential_remainder, $total));
echo " more stickers. <br> Best get swapping!";

function portion ($remainder, $total){
for ($x=$remainder; $x>=1; $x--) {
  	$expected = $expected + ($total/$x);
	}
return $expected;
}



?>
</h2>
</div>
</body>
</html>