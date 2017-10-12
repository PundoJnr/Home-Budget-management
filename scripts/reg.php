
<?php
$conn = mysqli_connect('localhost','root','','Zahli');
if ($conn){
	echo "Successfull connection boy";
}
else{
	echo"Failed to connect to mySQL:" . mysqli_connect();
}
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
$sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
$query=mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<script type="text/javascript"></script></body>
</html>