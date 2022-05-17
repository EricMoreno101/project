<?php
$servername = "localhost";
$username = "root";
$password = "change_this_password";
$dbname = "groupproject";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$fpassword = $_POST['password'];
$phone = $_POST['phone'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO visitors (firstname, lastname, email, password, phone) VALUES
('$firstname', '$lastname', '$email', '$fpassword', '$phone')";

$conn->query($sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();

echo "Account for $email has been created!<br />";
?>
