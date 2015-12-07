<?php 

$db_name = "icyspicy";
$db_username = "root";
$db_password = "root";
$db_host = "localhost";

mysql_connect($db_host, $db_username, $db_password, $db_name);
mysql_select_db($db_name) or die (mysql_error());

$table="";
$date="";
$items="";
$quantity="";
$total="";
$systemCall="";
if(isset($_POST['table']))
{
	$table = $_POST['table'];
}
if(isset($_POST['date']))
{
	$date = $_POST['date'];
}
if(isset($_POST['items']))
{
	$items = $_POST['items'];
}
if(isset($_POST['quantity']))
{
	$quantity = $_POST['quantity'];
}
if(isset($_POST['total']))
{
	$total = $_POST['total'];
}

if(isset($_POST['systemCall']))
{
	$systemCall = $_POST['systemCall'];
}

if ( $systemCall == "update") 
{
$sql = "insert into bill_db (`table`,`date`,`items`,`quantity`,`total`) values ('$table','$date','$items','$quantity','$total') ";
$result=mysql_query($sql);
echo $sql;
echo"=updated successfully";
}
else
{
echo"=not updated";
}

?>