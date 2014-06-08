<html>
<head>
<title>User barcode generator</title>
<style>
.username{
	margin-left: auto; 
	margin-right: auto; 
	display: block; 
	text-align: center; 
	font-family: consolas; 
	font-size: 14px;
}

.barcode{
	margin-left: auto; 
	margin-right: auto; 
	display: block;
}

table,th,td{
	border:1px solid black;
	border-collapse:collapse;
	float: left;
}

/* Fix for pagebreaks when printing */
table { page-break-after:auto }
tr    { page-break-inside:avoid; page-break-after:auto }
td    { page-break-inside:avoid; page-break-after:auto }
thead { display:table-header-group }
tfoot { display:table-footer-group }
	
</style>
</head>
<body>
<table border="0">
<?php
$usernames = array(
	"user1",
	"user2",
	"user2",
);

sort($usernames);

foreach($usernames as $username){
?>
<tr>
	<td>
	<img class="barcode" src="http://www.racoindustries.com/barcodegenerator/1d/barcode-image.axd?S=Code128&AC=T&BH=0.2&BW=0.01&BBS=None&BBW=0.01&BM=0.025&C=<?=$username?>&C128CS=Auto&IFMT=Png&QZ=0.05&TM=0.05" alt="<?=$username?>">
	<div class="username"><?=$username?></div>
	</td>
</tr>
<?php } ?>
</table>
</body>
</html>
