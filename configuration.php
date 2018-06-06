
<?php
$servername = "testdb";
$username = "root";
$password = "amveryhappy";
$db_name = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

// links

$home_url = "http://web-3tier-test-app1-test-app-dk.pilot.honeyshift.com/index.php";
$insert_url = "http://app-3tier-test-app-test-app-dk.pilot.honeyshift.com/insert.php";



?>
