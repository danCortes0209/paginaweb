<?php 
	$db_host = "localhost";
	$db_name = "dancor36_1";
	$db_user = "root";
	$db_pass = "";

	$connection = mysql_connect($db_host, $db_user, $db_pass) or die ("Connection Error: ".mysql_error());

	mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
		@mysql_query("SET NAMES'utf8'");

	$sql_query = "SELECT * FROM productos;";
	$result = mysql_query($sql_query);
	$rows = array();
	
	while($r = mysql_fetch_assoc($result)) {
  		$rows[] = $r;
	}

	print json_encode($rows);

?>