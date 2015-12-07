<?php 
$db_name = "icyspicy";
$db_username = "root";
$db_password = "root";
$db_host = "localhost";
mysql_connect($db_host, $db_username, $db_password, $db_name);
mysql_select_db($db_name) or die (mysql_error());
$sql = "SELECT * FROM bill_db ";
$query = mysql_query($sql);
$login_counter = mysql_num_rows($query);

if ($login_counter > 0)
{	
	$xml=new DOMDocument("1.0");
	$root = $xml->createElement("data");
	$xml->appendChild($root);
	
	while ($data = mysql_fetch_assoc($query)) 
	{
	$fields = $xml->createElement("fields");
		$table=$xml->createElement("table");
		$tableText=$xml->createTextNode($data['table']);
		$table->appendChild($tableText);
		
		$date=$xml->createElement("date");
		$dateText=$xml->createTextNode($data['date']);
		$date->appendChild($dateText);
		
		$items=$xml->createElement("items");
		$itemsText=$xml->createTextNode($data['items']);
		$items->appendChild($itemsText);
		
		$quantity=$xml->createElement("quantity");
		$quantityText=$xml->createTextNode($data['quantity']);
		$quantity->appendChild($quantityText);
		
		$total=$xml->createElement("total");
		$totalText=$xml->createTextNode($data['total']);
		$total->appendChild($totalText);
		
		$fields->appendChild($table);
		$fields->appendChild($date);
		$fields->appendChild($items);
		$fields->appendChild($quantity);
		$fields->appendChild($total);
		
		
		$root->appendChild($fields);

		$xml->formatOutput = true;
		
		
		
	}
	echo "<xmp>". $xml->saveXML() ."</xmp>";

		$xml->save("billrecords.xml") or die("Error");
	
}
else
{
	print "systemResult=Bill records could not be fetched";
}
?>