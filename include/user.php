<?php 
function getUser($username, $conn){
	$sql = "SELECT * FROM users WHERE names = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$username]);

	if ($stmt->rowCount() === 1) {
		// code...
		$user = $stmt->fetch();
		return $user;
	}
	else{
		$user = [];
		return $user;
	}
}




?>