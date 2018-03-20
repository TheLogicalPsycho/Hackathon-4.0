<?php
try{
$con=mysqli_connect('localhost','root','','avinash');
if(isset($_POST['submit']))
{
$a=$_REQUEST['email'];
$b=$_REQUEST['name'];
$c=$_REQUEST['message'];
$sql="Insert into response values('$a','$b','$c')";
mysqli_query($con,$sql);
}
}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>