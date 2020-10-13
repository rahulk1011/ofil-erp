<!DOCTYPE html>
<html>
<body bgcolor="darkslategray">

<br><br>

<?php
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$dirname = $_POST['dirname'];
$dirphn = $_POST['dirphn'];
$diremail = $_POST['diremail'];

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");

$q = "insert into coursedir values ('$cid', '$cname', '$dirname', '$dirphn', '$diremail')";
$s = mysql_query($q);

if($s>0)
echo "<h2 align='center'><font face='calibri' color='gold'>Course Director Detail Added Successfully";

mysql_close();

?>
</body>
</html>