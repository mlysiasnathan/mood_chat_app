<?php
$server_name = "localhost";

$user_name = "root";

$password = "";

$db_name = "mood";

try {
	$conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {
	echo "connection to Database failed :".$e->getMessage();
}

// function getUser($username, $conn){
// 	$sql = "SELECT * FROM users WHERE names=? ORDER BY last_seen DESC LIMIT 1";
// 	$stmt = $conn->prepare($sql);
// 	$stmt->execute([$username]);

// 	if ($stmt->rowCount() === 1) {
// 		// code...
// 		$user = $stmt->fetch();
// 		foreach ($user as $userdata) {
// 			return $userdata['last_seen'];
// 		}
// 	}
// 	else{
// 		$user = [];
// 		return $user;
// 	}
// }

?>