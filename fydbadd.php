<!DOCTYPE html>
<html>
<body bgcolor="darkslategray">

<br><br>

<?php
$fyname = $_POST['fyname'];
$fyphn = $_POST['fyphn'];
$fyfax = $_POST['fyfax'];
$fyemail = $_POST['fyemail'];
$fyadd = $_POST['fyadd'];


$dc = mysql_connect("localhost", "root", "");
if($dc>0)
mysql_select_db("ofil");

$q = "insert into factory values ('$fyname', '$fyphn', '$fyfax', '$fyemail', '$fyadd')";
$s = mysql_query($q);

if($s>0)
echo "<h2 align='center'><font face='calibri' color='gold'>Factory Details Added Successfully";

mysql_close();

?>
</body>
</html>