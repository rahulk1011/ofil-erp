<!DOCTYPE html>
<html>
<title>Course Director
</title>
<body bgcolor="darkslategray">

<br>
<table align="center" width="95%">
<tr height="15">
<td width="200" align="center"><a href="home.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">HOME</a></td>
<td width="200" align="center"><a href="courses.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">COURSE CALENDAR</a></td>
<td width="200" align="center"><font color="gold" face="calibri" size="4"><b>COURSE DIRECTOR</td>
<td width="200" align="center"><a href="fcdbshow.php" style="text-decoration: none"><font color="lime" face="calibri" size="4">FACULTY LIST</a></td>
<td width="200" align="center"><a href="rating.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">RATING</a></td>
<td width="200" align="center"><a href="pastcourses.php" style="text-decoration: none"><font color="lime" face="calibri" size="4">PAST COURSES DETAIL</a></td>
</tr>
</table>

<h3 align="center"><font color="tomato" face="calibri">Course Director Details</font></h3>

<font color="midnightblue" face="calibri">
<?php

$tab ="<table align='center' border='1' bordercolor='navy' cellpadding='2' cellspacing='0' width ='95%'>";
$tab=$tab."<tr bgcolor='lightpink'><th align='center'>Course ID</th>";
$tab=$tab."<th align='center'>Course Name</th>";
$tab=$tab."<th align='center'>Director Name</th>";
$tab=$tab."<th align='center'>Phone Number</th>";
$tab=$tab."<th align='center'>E-Mail ID</th>";

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");
$q = "Select * from coursedir";
$s = mysql_query ($q);
while($r = mysql_fetch_array($s))
{
	$tab =$tab."<tr bgcolor='lightsteelblue'><td align='center' width='100'>$r[0]</td>";
	$tab =$tab."<td align='center' width='500'>$r[1]</td>";
	$tab =$tab."<td align='center' width='250'>$r[2]</td>";
	$tab =$tab."<td align='center' width='150'>$r[3]</td>";
	$tab =$tab."<td align='center'>$r[4]</td>";
}
$tab=$tab."</table>";
echo $tab;

mysql_close();
?>

</body>
</html>