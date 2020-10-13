<!DOCTYPE html>
<html>
<body bgcolor="darkslategray">

<br><br>

<?php
$fcname = $_POST['fcname'];
$fcdob = $_POST['fcdob'];
$fcgrade = $_POST['fcgrade'];

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");

$q = "insert into fc_grade values ('$fcname', '$fcdob', '$fcgrade')";
$s = mysql_query($q);

if($s>0)
echo "<h2 align='center'><font face='calibri' color='gold'>Faculty Rating Saved";

mysql_close();

?>
</body>
</html>