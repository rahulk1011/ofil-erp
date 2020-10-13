<!DOCTYPE html>
<html>
<title>Current Faculty
</title>
<body bgcolor="darkslategray">

<br>
<table align="center" width="95%">
<tr height="15">
<td width="200" align="center"><a href="home.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">HOME</a></td>
<td width="200" align="center"><a href="courses.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">COURSE CALENDAR</a></td>
<td width="200" align="center"><a href="cdirdbshow.php" style="text-decoration: none"><font color="lime" face="calibri" size="4">COURSE DIRECTOR</a></td>
<td width="200" align="center"><font color="gold" face="calibri" size="4"><b>FACULTY LIST</td>
<td width="200" align="center"><a href="rating.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">RATING</a></td>
<td width="200" align="center"><a href="pastcourses.php" style="text-decoration: none"><font color="lime" face="calibri" size="4">PAST COURSES DETAIL</a></td>
</tr>
</table>

<h3 align="center"><font color="tomato" face="calibri">Faculty Details</font></h3>

<font color="midnightblue" face="calibri">
<?php

$tab ="<table align='center' border='2' bordercolor='navy' cellpadding='4' cellspacing='0' width ='95%'>";
$tab=$tab."<tr bgcolor='lightpink'><th align='center' width='80'>Faculty DOB</th>";
$tab=$tab."<th align='center'>Faculty Name</th>";
$tab=$tab."<th align='center'>Organisation</th>";
$tab=$tab."<th align='center' width='20'>Working in OF</th>";
$tab=$tab."<th align='center'>Home Address</th>";
$tab=$tab."<th align='center'>Office Address</th>";

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");
$q = "Select * from faculty";
$s = mysql_query ($q);
while($r = mysql_fetch_array($s))
{
	$tab =$tab."<tr bgcolor='lightsteelblue'><td align='center'>$r[0]</td>";
	$tab =$tab."<td align='center'>$r[1]</td>";
	$tab =$tab."<td align='center'>$r[2]</td>";
	$tab =$tab."<td align='center'>$r[3]</td>";
	$tab =$tab."<td align='center'>$r[4]</td>";
	$tab =$tab."<td align='center'>$r[5]</td>";
}
$tab=$tab."</table>";
echo $tab;

mysql_close();
?>

</body>
</html>