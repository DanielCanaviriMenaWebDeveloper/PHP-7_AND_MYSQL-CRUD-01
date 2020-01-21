<?php 
	
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'php_mysql_crud');
	mysqli_set_charset($conn, 'utf8');
 
/* Verifica si existe conexión
 if (isset($conn)) {
 	echo 'DB is connected';	
 }
*/

?>