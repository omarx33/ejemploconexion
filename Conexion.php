<?php

class Conexion{


function get_conexion()
{



try {

#Ñ Ó
$conexion = new PDO(
  "sqlsrv:Server=cerberodigital.com;database=testsql",//driver servidor base de datos
  "sa",//usuario
  "Sqlsrv2020",//contraseña

array(
  PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8')
);
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//testear la conexion
$conexion = ($conexion) ? "ok" : "error" ;
echo $conexion;

//return $conexion;


} catch (Exception $e) {

 echo $e->getMessage();

}




}






}



 ?>
