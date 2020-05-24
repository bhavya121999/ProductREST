<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	

	// Database connection
	$conn = new mysqli('localhost','root','ThisIsPassword@123','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(id, name, price) values(?, ?, ?");
		$stmt->bind_param("sssssi", $id, $name, $price, );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull";
		$stmt->close();
		$conn->close();
	}
?>
