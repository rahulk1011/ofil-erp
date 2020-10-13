<!DOCTYPE html>
<html>
<title>Course Calendar
</title>
<body bgcolor="darkslategray">

<h3 align="center"><font color="gold" face="calibri">Course Calendar</font></h3>

<font color="midnightblue" face="calibri">
<?php

$cname = $_POST['cname'];
$dname = $_POST['dname'];
$dtbeg = $_POST['dtbeg'];
$dtend = $_POST['dtend'];
$t1 = $_POST['t1'];
$f1 = $_POST['f1'];
$t2 = $_POST['t2'];
$f2 = $_POST['f2'];
$t3 = $_POST['t3'];
$f3 = $_POST['f3'];
$t4 = $_POST['t4'];
$f4 = $_POST['f4'];
$t5 = $_POST['t5'];
$f5 = $_POST['f5'];
$t6 = $_POST['t6'];
$f6 = $_POST['f6'];
$t7 = $_POST['t7'];
$f7 = $_POST['f7'];
$t8 = $_POST['t8'];
$f8 = $_POST['f8'];
$t9 = $_POST['t9'];
$f9 = $_POST['f9'];
$t10 = $_POST['t10'];
$f10 = $_POST['f10'];
$t11 = $_POST['t11'];
$f11 = $_POST['f11'];
$t12 = $_POST['t12'];
$f12 = $_POST['f12'];
$t13 = $_POST['t13'];
$f13 = $_POST['f13'];
$t14 = $_POST['t14'];
$f14 = $_POST['f14'];
$t15 = $_POST['t15'];
$f15 = $_POST['f15'];
$t16 = $_POST['t16'];
$f16 = $_POST['f16'];
$t17 = $_POST['t17'];
$f17 = $_POST['f17'];
$t18 = $_POST['t18'];
$f18 = $_POST['f18'];

$tab="<table align='center' width='80%'>";
$tab=$tab."<tr><td width='100'><b><font color='linen' face='calibri'>Course Name:</td>";
$tab=$tab."<td width='200' align='left'><font color='cyan' face='calibri'>$cname</td>";
$tab=$tab."<td width='150'><b><font color='linen' face='calibri'>Director Name:</td>";
$tab=$tab."<td width='200'align='left'><font color='cyan' face='calibri'>$dname</td>";
$tab=$tab."<td width='100'><b><font color='linen' face='calibri'>From:</td>";
$tab=$tab."<td width='100' align='left'><font color='cyan' face='calibri'>$dtbeg</td>";
$tab=$tab."<td width='100'><b><font color='linen' face='calibri'>To:</td>";
$tab=$tab."<td width='100' align='left'><font color='cyan' face='calibri'>$dtend</td>";

$tab=$tab."</table>";
echo $tab;

$tab="<table align='center' width='95%' border='1' bordercolor='navy' cellspacing='0' cellpadding='3'>";
$tab=$tab."<tr bgcolor='lightpink'><td width='50' align='center'><b>DAY/TIME</td>";
$tab=$tab."<td align='center'><b>0900-1100 HRS</td>";
$tab=$tab."<td align='center'><b>1100-1300 HRS</td>";
$tab=$tab."<td align='center'><b>1400-1500 HRS</td>";
$tab=$tab."<td align='center'><b>1500-1600 HRS</td>";

$tab=$tab."<tr height='90'>";
$tab=$tab."<td width='50' align='center' bgcolor='lightpink'><b>MONDAY</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>Innauguration Speech</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t1</b><br>$f1</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t2</b><br>$f2</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t3</b><br>$f3</td>";
$tab=$tab."</tr>";

$tab=$tab."<tr height='90'>";
$tab=$tab."<td width='50' align='center' bgcolor='lightpink'><b>TUESDAY</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t4</b><br>$f4</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t5</b><br>$f5</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t6</b><br>$f6</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t7</b><br>$f7</td>";
$tab=$tab."</tr>";

$tab=$tab."<tr height='90'>";
$tab=$tab."<td width='50' align='center' bgcolor='lightpink'><b>WEDNESDAY</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t8</b><br>$f8</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t9</b><br>$f9</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t10</b><br>$f10</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t11</b><br>$f11</td>";
$tab=$tab."</tr>";

$tab=$tab."<tr height='90'>";
$tab=$tab."<td width='50' align='center' bgcolor='lightpink'><b>THURSDAY</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t12</b><br>$f12</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t13</b><br>$f13</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t14</b><br>$f14</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t15</b><br>$f15</td>";
$tab=$tab."</tr>";

$tab=$tab."<tr height='90'>";
$tab=$tab."<td width='50' align='center' bgcolor='lightpink'><b>FRIDAY</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t16</b><br>$f16</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t17</b><br>$f17</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>$t18</b><br>$f18</td>";
$tab=$tab."<td width='300' align='center' bgcolor='lightsteelblue'><b>Closing Speech</td>";
$tab=$tab."</tr>";

$tab=$tab."</table>";
echo $tab;

?>

</body>
</html>