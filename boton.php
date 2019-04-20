<?php
//conectar con el servidor
$conectar=@mysql_connect('localhost','root');
if (!$conecctar) {
	echo"No se Conecta con nuestra base de datos"
}
else{
	$base=mysql_select_db("cliente")
	if (!$base) {
		echo"NO se encuantra la base de datos"
	}
}
$nombredelcliente=$_Post['nombredelcliente'];
$numerodeltelefono=$_Post['numerodeltelefono'];
$direccion=$_Post['direccion'];
$porconceptode=$_Post['porconceptode'];

//para insertar los datos

?>