<html>
<head>
<link rel="stylesheet" type="text/css" href="http://siwhitehouse.co.uk/stickers/serendipity/style/css/style.css">
<style>
.container {
    height: 100%;
    width: 100%;
}
table {
    border: 1px solid black;
}
th, td {
    border: 1px solid black; height: 50px;
}
</style>
</head>
<body>
<div id="header" align="center">
	<h1>The Got - Got - Need Machine</h1>
</div>
<h2>
<form action="calculate.php" method="post">
<table border="2" class="container">
	<col width = "45%">
	<col width = "5%">
	<col width = "45%">
	<tr>
		<td text-align:right>I have got </td>
		<td align="center"><input type="text" name="stickers"></td>
		<td align="left"> stickers</td>
	</tr>
	<tr>
		<td align="right">I have got </td>
		<td align="center"><input type="text" name="swaps"></td>
		<td align="left"> swaps</td>
	</tr>
	<tr>
		<td align="right">I need to get </td>
		<td align="center"><input type="text" name="total"></td>
		<td align="left"> stickers in total</td>
	</tr>
	<tr>
	<td></td>
	<td align = center><center><input type="submit"></center></td>
	<td></td>
	</tr>
</table>
</form></h2>
</body>
</html>