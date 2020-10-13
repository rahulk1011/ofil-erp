<!DOCTYPE html>
<html>
<title>Current Courses
</title>
<body bgcolor="darkslategray">

<h3 align="center"><font color="gold" face="calibri">Current Course Details</font></h3>

<font color="midnightblue" face="calibri">
<?php

$tab ="<table align='center' border='1' bordercolor='navy' cellpadding='2' cellspacing='0' width ='80%'>";
$tab=$tab."<tr bgcolor='lightpink'><th align='center'>Course ID</th>";
$tab=$tab."<th align='center'>Course Name</th>";
$tab=$tab."<th align='center'>Category</th>";

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");
$q = "Select * from course";
$s = mysql_query ($q);
while($r = mysql_fetch_array($s))
{
	$tab =$tab."<tr bgcolor='lightsteelblue'><td align='center' width='50'>$r[0]</td>";
	$tab =$tab."<td align='center' width='250'>$r[1]</td>";
	$tab =$tab."<td align='center' width='100'>$r[2]</td>";
}
$tab=$tab."</table>";
echo $tab;

mysql_close();
?>

</body>
</html>