<html>
<head><title>The Got - Got - Need Machine</title>
<link rel="stylesheet" type="text/css" href="!!http://siwhitehouse.co.uk/stickers/serendipity/style/css/style.css">
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tfoot, thead, tr, th, td {
	border: 0;
	font-family: inherit;
	font-size: 100%;
	font-style: inherit;
	font-weight: inherit;
	margin: 0;
	outline: 0;
	padding: 0;
	vertical-align: baseline;
}
th {
	font-size: 28px;
	line-height: 75px;
	font-family: 'MarketDecoRegular';
	font-weight: normal;
	color: #002870;
	white-space: nowrap;
}
table {
    border: 4px solid;
    border-spacing:10px 10px;
    border-collapse: separate;
    border-color: #009c3b;
    border-radius: 25px;
}
tr, td {
    border-collapse: collapse;
}
/* Headings */
h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'MarketDecoRegular';
	font-weight: normal;
	color: #002870;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
	color: inherit;
}
h1 {
	font-size: 32px;
	line-height: 34px;
	margin-bottom: 14px;
}
h2 {
	font-size: 28px;
	line-height: 30px;
	margin-bottom: 10px;
}
h3 {
	font-size: 24px;
	line-height: 26px;
	margin-bottom: 8px;
}
h4 {
	font-size: 20px;
	line-height: 22px;
	margin-bottom: 4px;
}
h5 {
	font-size: 17px;
	line-height: 19px;
}
h6 {
	font-size: 12px;
	line-height: 14px;
}
body {
	background: #FFDF00;
	line-height: 1;
}
.half-line {
  line-height: .5em;
}

</style>
</head>
<?php
/*
	Initialise variables
*/
$total = $stickers = $swaps = '';
if (isset($_POST['total'])) {
   $total = $_POST['total'];
   $stickers = $_POST['stickers'];
   $swaps = $_POST['swaps'];
   $remainder = $total - $stickers;
   $potential_remainder = $total-$stickers-$swaps;
   $y= round($total*(log($total) + 0.5772156649)+0.5);
}

function portion ($remainder, $total){
$expected = 0;
for ($x=$remainder; $x>=1; $x--) {
  	$expected = $expected + ($total/$x);
	}
return $expected;
}
?>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<div align="center">
<p>
&nbsp;
</p>
   <table border="2" align="center" cellpadding="12">
	<th colspan="3">The Got-Got-Need Machine</th>
   </tr>
   <tr><td><h2 align="right">I have got </h2></td><td align="center">&nbsp;<input type="text" name="stickers" size="5" value="<?php echo $stickers; ?>">&nbsp;</td><td><h2>stickers</h2></td></tr>
   <tr><td><h2 align="right">I have got </h2></td><td align="center">&nbsp;<input type="text" name="swaps" size="5" value="<?php echo $swaps; ?>">&nbsp;</td><td><h2>swaps</h2></td></tr>
   <tr><td><h2 align="right">I need </h2></td><td align="center">&nbsp;<input type="text" name="total" size="5" value="<?php echo $total; ?>">&nbsp;</td><td><h2>stickers <br> in total</h2></td></tr>
   <tr><td>&nbsp;</td><td align="center">&nbsp;<input type="submit" value="Calculate">&nbsp;</td><td>&nbsp;</td></tr>
   </table>
   </form>
   <br>
<?php
if (isset($_POST['total'])) {
   echo '<div id="results" style="text-align:center">';
   echo '<h3>';
   echo "To collect all $total stickers you should expect to buy ";
   echo "$y stickers, without swapping";
   echo "<br>";
   echo "<br>";
   echo "To get the remaining $remainder stickers you should expect to buy ";
   echo round (portion($remainder, $total));
   echo " more stickers.";
   echo "<br>";
   echo "<br>";
   if ($potential_remainder > 0) {
      echo "If you trade your $swaps swaps, you'll only have ";
      echo $potential_remainder;
      echo " left to collect";
      echo "<br>";
      echo "<br>";
      echo "To get those, you'd only expect to have to buy ";
      echo round(portion($potential_remainder, $total));
      echo " more stickers. <br><br> Best get swapping!<br>";
   } else {
      echo 'If you managed to swap ' . ($total - $stickers) . ' of the ' . $swaps . ' tickets you have spare, you would have everything!<br><br>';
      echo 'Good luck in swapping!';
   }
   echo '</h3>';
   echo '</div>';

}
?>

</div>
</body>
</html>