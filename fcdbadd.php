<!DOCTYPE html>
<html>
<body bgcolor="darkslategray">

<br><br>

<?php
$fcdob = $_POST['fcdob'];
$fcname = $_POST['fcname'];
$fcorg = $_POST['fcorg'];
$fcws = $_POST['fcws'];
$fchadd = $_POST['fchadd'];
$fcoadd = $_POST['fcoadd'];

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");

$q = "insert into faculty values ('$fcdob', '$fcname', '$fcorg', '$fcws', '$fchadd', '$fcoadd')";
$s = mysql_query($q);

if($s>0)
echo "<h2 align='center'><font face='calibri' color='gold'>Faculty Detail Added Successfully";

mysql_close();

?>
</body>
</html>