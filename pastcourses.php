<!DOCTYPE html>
<html>
<title>Past Courses
</title>
<body bgcolor="darkslategray">

<br>
<table align="center" width="95%">
<tr height="15">
<td width="200" align="center"><a href="home.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">HOME</a></td>
<td width="200" align="center"><a href="courses.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">COURSE CALENDAR</a></td>
<td width="200" align="center"><a href="cdirdbshow.php" style="text-decoration: none"><font color="lime" face="calibri" size="4">COURSE DIRECTOR</a></td>
<td width="200" align="center"><a href="fcdbshow.php" style="text-decoration: none"><font color="lime" face="calibri" size="4">FACULTY LIST</a></td>
<td width="200" align="center"><a href="rating.html" style="text-decoration: none"><font color="lime" face="calibri" size="4">RATING</a></td>
<td width="200" align="center"><font color="gold" face="calibri" size="4"><b>PAST COURSES DETAIL</a></td>
</tr>
</table>

<h3 align="center"><font color="tomato" face="calibri">Past Course Details</font></h3>
<h4 align="center"><font color="linen" face="calibri">
CAC: Advance Computer &nbsp
CCC: Cost Control Programme &nbsp
CIND: Long Term &nbsp
CM: Metallurgy &nbsp
CSA: Small Arms &nbsp
NCA: Administration
</font></h4>

<font color="midnightblue" face="calibri">
<?php

$tab ="<table align='center' border='2' bordercolor='navy' cellpadding='4' cellspacing='0' width ='90%'>";
$tab=$tab."<tr bgcolor='lightpink'><th align='center'>Course ID</th>";
$tab=$tab."<th align='center'>Course Name</th>";
$tab=$tab."<th align='center'>Participants 13-14</th>";
$tab=$tab."<th align='center'>ACG 13-14</th>";
$tab=$tab."<th align='center'>Participants 14-15</th>";
$tab=$tab."<th align='center'>ACG 14-15</th>";
$tab=$tab."<th align='center'>Participants 15-16</th>";
$tab=$tab."<th align='center'>ACG 15-16</th>";

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");
$q = "Select * from p_course";
$s = mysql_query ($q);
while($r = mysql_fetch_array($s))
{
	$tab =$tab."<tr bgcolor='lightsteelblue'><td align='center' width='80'>$r[0]</td>";
	$tab =$tab."<td>$r[1]</td>";
	$tab =$tab."<td align='center' width='50'>$r[2]</td>";
	$tab =$tab."<td align='center'>$r[3]</td>";
	$tab =$tab."<td align='center' width='50'>$r[4]</td>";
	$tab =$tab."<td align='center'>$r[5]</td>";
	$tab =$tab."<td align='center' width='50'>$r[6]</td>";
	$tab =$tab."<td align='center'>$r[7]</td>";
}
$tab=$tab."</table>";
echo $tab;

mysql_close();
?>

</body>
</html>