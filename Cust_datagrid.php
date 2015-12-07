<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db="icyspicy";
mysql_connect($host,$user,$pass);
mysql_select_db($db);

$x="SELECT * from bill_db";

$xx = mysql_query("$x")or die("problem!" . mysql_error());
list($table,$date,$items,$quantity,$total) = mysql_fetch_row($xx);

$i = 0;
$n = 0;

$results = mysql_query("$x");
$n= mysql_num_rows ($results);
$r_string = "";
while ($row = mysql_fetch_array ($results)) {
         while (list ($key, $val) = each ($row)) {
            $r_string .= '&' . $key . $i . '=' . stripslashes($val);
         }
         $i++;

}

echo "i=".$i;
echo "&n=".$n;
echo $r_string;

?>
