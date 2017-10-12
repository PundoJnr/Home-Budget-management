<?php
if (isset($_POST)['submit']) {
	$conn = mysqli_connect('localhost','root','','Zahli');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT username, password FROM users WHERE username=$username && password = $password";
	$query = mysql_query($conn,$sql);
}
?>