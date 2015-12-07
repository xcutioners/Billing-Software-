<?
$host = "localhost";
$user = "root";
$pass = "root";
$db="icyspicy";
mysql_connect($host,$user,$pass);
mysql_select_db($db);

$r="SELECT
`cust_db`.`Name`,
`cust_db`.`Credits`,
`cust_db`.`Mobile_No`
FROM
`cust_db`";


$rr = mysql_query("$r")or die("problem!" . mysql_error());
list($Name,$Credits,$Mobile_No) = mysql_fetch_row($rr);


echo "Name=".$Name;
echo "&Credits=".$Credits;
echo "&Mobile_No=".$Mobile_No;


?>
