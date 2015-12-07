<?php 

$db_name = "icyspicy";
$db_username = "root";
$db_password = "root";
$db_host = "localhost";

mysql_connect($db_host, $db_username, $db_password, $db_name);
mysql_select_db($db_name) or die (mysql_error());

$Name="";
$Credits="";
$Mobile_no="";
$systemCall="";
if(isset($_POST['Name']))
{
	$Name = $_POST['Name'];
}
if(isset($_POST['Credits']))
{
	$Credits = $_POST['Credits'];
}
if(isset($_POST['Mobile_No']))
{
	$Mobile_No = $_POST['Mobile_No'];
}

if(isset($_POST['systemCall']))
{
	$systemCall = $_POST['systemCall'];
}

if ( $systemCall == "update") 
{
$sql = "insert into cust_db (`Name`,`Credits`,`Mobile_No`) values ('$Name','$Credits','$Mobile_No') ";
$result=mysql_query($sql);
echo $sql;
print "CU=New Record Inserted successfully";
}
else
{
print "CU=Record could not be Inserted";
}

?>