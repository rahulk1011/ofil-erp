<!DOCTYPE html>
<html>
<body bgcolor="darkslategray">

<br><br>

<?php
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$ccat = $_POST['ccat'];

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");

$q = "insert into course values ('$cid', '$cname', '$ccat')";
$s = mysql_query($q);

if($s>0)
echo "<h2 align='center'><font face='calibri' color='gold'>Course Detail Added Successfully";
else
echo "<h3 align='center'><font face='calibri' color='gold'>Course Already Exists";

mysql_close();

?>
</body>
</html>