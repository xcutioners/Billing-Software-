<?php



// create connection
$connection = mysql_connect("localhost", "root", "root") or die ("Couldn't connect to the server.");

// select database
$db = mysql_select_db("icyspicy", $connection) or die ("Couldn't select database.");

// create SQL
$sql = "SELECT * from bill_db";

// execute SQL query and get result
$sql_result = mysql_query($sql, $connection) or die ("Couldn't execute query.");

// get number of rows in $result.
$num = mysql_numrows($sql_result);

$phpConfirm = "";

$counter = 0;

while ($row = mysql_fetch_array($sql_result)) {

$domain = $row["table"]."|".$row["date"]."|".$row["items"] ."|".$row["quantity"]."|".$row["total"];
if ($counter == 0) {
$phpConfirm .= $domain;
} else {
// Use a item limiter "|" to seperate the records
$phpConfirm .= "|" . $domain;
}

$counter++;
}
echo "phpConfirm=" . $phpConfirm . "&totalItem=" . $num;
// free resources and close connection
mysql_free_result($sql_result);
mysql_close($connection);

?>