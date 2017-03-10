<?php 
	$db_host = "localhost";
	$db_name = "dancor36_1";
	$db_user = "root";
	$db_password = "";
	$id_contacto = "";
	
	$connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
	
	mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
	@mysql_query("SET NAMES'utf8'");

	$id_contacto = $_POST['id'];

	if(isset($id_contacto)){
	
		$sql_query = "SELECT * FROM productos WHERE id=".$id_contacto.";";
		$result = mysql_query($sql_query);
		$rows = array();
	
	while($r = mysql_fetch_assoc($result)) {
		$rows[] = $r;
	}
	
	print json_encode($rows);
	
	}else
		echo "No existe el producto";
		mysql_close($connection);
?>