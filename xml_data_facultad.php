<?php
    Header("Content-type: text/xml"); 
		echo'<'.'?xml version="1.0" encoding="ISO-8859-1" ?'.'>';
	$filter = $_GET['filter'];
    $xml = simplexml_load_file('datos.xml');
	$result = $xml->xpath("/lista/facultad[@id='$filter']/profesorados");
    echo $result[0]->asXML();
?> 