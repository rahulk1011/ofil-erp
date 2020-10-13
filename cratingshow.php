<!DOCTYPE html>
<html>
<title>Course Ratings
</title>
<body bgcolor="darkslategray">

<h3 align="center"><font color="gold" face="calibri">Current Course Ratings</font></h3>

<font color="midnightblue" face="calibri">
<?php

$tab ="<table align='center' border='2' bordercolor='navy' cellpadding='4' cellspacing='0' width ='80%'>";
$tab=$tab."<tr bgcolor='lightpink'><th align='center' width='80'>Course ID</th>";
$tab=$tab."<th align='center'>Course Name</th>";
$tab=$tab."<th align='center' width='100'>Course Rating</th>";
$tab=$tab."<th align='center' width='100'>Participants</th>";

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");
$q = "Select * from c_grade";
$s = mysql_query ($q);
while($r = mysql_fetch_array($s))
{
	$tab =$tab."<tr bgcolor='lightsteelblue'><td align='center'>$r[0]</td>";
	$tab =$tab."<td align='center'>$r[1]</td>";
	$tab =$tab."<td align='center'>$r[2]</td>";
	$tab =$tab."<td align='center'>$r[3]</td>";
}
$tab=$tab."</table>";
echo $tab;

mysql_close();
?>

</body>
</html>