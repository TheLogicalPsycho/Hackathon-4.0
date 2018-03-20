<?php
$con=mysqli_connect('localhost','root','','avinash');
if(isset($_POST['submit']))
{
	$a=$_POST['username'];
	$b=$_POST['password'];
	$d=$_POST['s1'];
$sql="SELECT password FROM `login_signup` WHERE UserId='".$a."'";
$sql2="SELECT password FROM `admin` WHERE UserId='".$a."'";
$c=mysqli_query($con,$sql);
$u=mysqli_query($con,$sql2);
$r=mysqli_fetch_array($c);
$l=mysqli_fetch_array($u);
if($b==$r[0]&&$d=='u1')
{
	session_start();
	$_SESSION['UserId']=$a;
	header("location:user.php");
}
else if($b==$l[0]&&$d=='u2')
{
	session_start();
	$_SESSION['UserId']=$a;
	header("location:admin.php");
}
else
{
	$message = "wrong UserID or Password";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>