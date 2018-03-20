<?php
$con=mysqli_connect('localhost','root','','avinash');
if(isset($_POST['submit']))
{
$a=$_REQUEST['firstname'];
$b=$_REQUEST['lastname'];
$c=$_REQUEST['inputemail'];
$d=$_REQUEST['inputpass'];
$k=$_REQUEST['add'];
$e=$_REQUEST['gender'];
$g=$_REQUEST['phnum'];
$h=$_REQUEST['state'];
$i=$_REQUEST['city'];
$sql="Insert into login_signup values('$a','$b','$c','$d','$k','$e','$g','$h','$i')";
mysqli_query($con,$sql);
}
?>
<html>
<body>
<h3> Signup Successful !!! </h3>
<p> Click here to Login </p>
<a href="login_signup.php"> Go Back </a>
</body>
</html>