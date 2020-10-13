<!DOCTYPE html>
<html>
<html>
<body bgcolor="darkslategray">

<br><br>

<?php

$fcdob = $_POST['fcdob'];

$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");

$q = "delete from faculty where fcdob = '$fcdob'";
$s = mysql_query($q);

if($s>0)
echo "<h2 align='center'><font face='calibri' color='gold'>Delete Successful";

mysql_close();
?>

</body>
</html>