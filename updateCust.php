<?php 

$db_name = "icyspicy";
$db_username = "root";
$db_password = "root";
$db_host = "localhost";

mysql_connect($db_host, $db_username, $db_password, $db_name);
mysql_select_db($db_name) or die (mysql_error());

$Name="";
$Credits="";
$Mobile_No="";
$Id="";
$systemCall="";
if(isset($_POST['Id']))
{
	$Id = $_POST['Id'];
}
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
$sql = "UPDATE cust_db SET `Credits` = '$Credits' where `id`=$Id";
$result=mysql_query($sql);
echo $sql;
print "CU=New Record Updated successfully";
}
else
{
print "CU=Record could not be Updated";
}

?>