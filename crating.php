<!DOCTYPE html>
<html>
<body bgcolor="darkslategray">

<br><br>

<?php
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$cgrade = $_POST['cgrade'];
$cpart = $_POST['cpart'];

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");

$q = "insert into c_grade values ('$cid', '$cname', '$cgrade', '$cpart')";
$s = mysql_query($q);

if($s>0)
echo "<h2 align='center'><font face='calibri' color='gold'>Course Rating Saved";

mysql_close();

?>
</body>
</html>