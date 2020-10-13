<!DOCTYPE html>
<html>
<title>Course Calendar
</title>
<body bgcolor="silver">

<h3 align="center"><font color="black" face="calibri">Bill Details</h3>

<?php

$cname = $_POST['cname'];
$fname = $_POST['fname'];
$ftot = $_POST['ftot'];
$cexp = $_POST['cexp'];
$mexp = $_POST['mexp'];
$lexp = $_POST['lexp'];
$tot = $_POST['tot'];

$tab="<table align='center' width='70%' border='1' bordercolor='black' cellspacing='0' cellpadding='3'>";
$tab=$tab."<tr><td width='400' align='center'><b>PARTICULARS</td>";
$tab=$tab."<td align='center'><b>DETAILS</td>";
$tab=$tab."</tr>";
$tab=$tab."<tr><td width='400' align='center'>Course Name</td>";
$tab=$tab."<td align='center'>$cname</td>";
$tab=$tab."</tr>";
$tab=$tab."<tr><td width='400' align='center'>Faculty Name</td>";
$tab=$tab."<td align='center'>$fname</td>";
$tab=$tab."</tr>";
$tab=$tab."<tr><td width='400' align='center'>Faculty Expense</td>";
$tab=$tab."<td align='center'>$ftot</td>";
$tab=$tab."</tr>";
$tab=$tab."<tr><td width='400' align='center'>Course Expense</td>";
$tab=$tab."<td align='center'>$cexp</td>";
$tab=$tab."</tr>";
$tab=$tab."<tr><td width='400' align='center'>Miscellaneous Expense</td>";
$tab=$tab."<td align='center'>$mexp</td>";
$tab=$tab."</tr>";
$tab=$tab."<tr><td width='400' align='center'>Mess/Lodging</td>";
$tab=$tab."<td align='center'>$lexp</td>";
$tab=$tab."</tr>";
$tab=$tab."<tr><td width='400' align='center'><b>TOTAL</td>";
$tab=$tab."<td align='center'><b>$tot</td>";
$tab=$tab."</tr>";
$tab=$tab."</table>";

echo $tab;

?>

</body>
</html>