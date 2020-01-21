<?php 
	
	include ('db.php');

	if(isset($_POST['save_task'])){
		
		$title = $_POST['title'];
		$description = $_POST['description'];
		
	}

	$query = "INSERT INTO task (title, description) VALUES ('$title', '$description')";
	$result = mysqli_query($conn, $query);
	if(!$result) {
		die("Query Failed");
	}


	// Almacenamos en variables de seción el mensaje que sera mostrado y el color del mensaje
	$_SESSION['message'] = 'Task Saved Succesfully';
	$_SESSION['message_type'] = 'success';

	header("Location: index.php");
 ?>