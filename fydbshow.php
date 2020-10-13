<!DOCTYPE html>
<html>
<title>Factory List
</title>
<body bgcolor="darkslategray">

<h3 align="center"><font color="gold" face="calibri">Factory Details</font></h3>

<font color="midnightblue" face="calibri">
<?php

$tab ="<table align='center' border='1' bordercolor='navy' cellpadding='2' cellspacing='0' width ='95%'>";
$tab=$tab."<tr bgcolor='lightpink'><th align='center'>Factory Name</th>";
$tab=$tab."<th align='center'>Phone Number</th>";
$tab=$tab."<th align='center'>Fax Number</th>";
$tab=$tab."<th align='center'>E-Mail ID</th>";
$tab=$tab."<th align='center'>Address</th>";

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");
$q = "Select * from factory";
$s = mysql_query ($q);
while($r = mysql_fetch_array($s))
{
	$tab =$tab."<tr bgcolor='lightsteelblue'><td align='center' width='300'>$r[0]</td>";
	$tab =$tab."<td align='center' width='150'>$r[1]</td>";
	$tab =$tab."<td align='center' width='150'>$r[2]</td>";
	$tab =$tab."<td align='center' width='250'>$r[3]</td>";
	$tab =$tab."<td align='center'>$r[4]</td>";
}
$tab=$tab."</table>";
echo $tab;

mysql_close();
?>

</body>
</html>