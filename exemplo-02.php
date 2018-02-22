<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * from tb_usuarios order by deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {

	array_push($headers, ucfirst($key));

}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {

	$data = array();

	foreach ($row as $key => $value) {

		array_push($data, $value);

	}//End Foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");

}// End Foreach de linha

fclose($file);

?>