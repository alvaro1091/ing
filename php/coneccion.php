<?php
include 'cn.php';
//recibir los datos y almacenar las variables
$nombredecliente   = $_POST["nombredecliente"];
$numeordetelefono = $_POST["numeordetelefono"];
$direccion = $_POST["direccion"];
$porconceptode = $_POST["porconceptode"];
//Consulta para insertar
$insertar = "INSERT INTO frm_contacto(nombredecliente,numeordetelefono,direccion,porconceptode) VALUES ('$nombredecliente','$numeordetelefono','$direccion','$porconceptode')";
//Ejecutar la consulta
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado) {
    echo'Error al registrar los Datos';  
} else {
    echo'Datos de Contacto guardado con eficiencia';
}
    //Cerrar la conexion
mysqli_close($conexion); 