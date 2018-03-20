<html>
<head>
<script src="js/jquery-3.2.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
<style>
body { 
  background: url(image4.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
navbar{
 height:80px;
font-size:22pt;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Admin Dashbord</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
         <li><a href="#">About</a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">UserData</a></li>
            <li><a href="#response">Response</a></li>
          </ul>
        </li>
        </ul>
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php
$conn=mysqli_connect('localhost','root','','avinash');
$sql = "SELECT FirstName from admin;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
{ 
print "<td>" . $row['FirstName'] . "</td>"; 
} 
}
?>
</a></li>
        <li><a href="login_signup.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">
<div class="row"><div class="col-sm-8">
<div class="jumbotron" ><h3>Modify Code!!</h3>
  <p>Avinash listen change or copy paste here edit by replacing old code here it will be fine <span class="text text-danger">"got it"</span></p></div>

</div><div class="col-sm-4"></div></div>

  
</div>
</body>
</html>
<?php
echo "<h2>Admin data</h2>";
$conn=mysqli_connect('localhost','root','','avinash');
echo "<table border='1'>
<tr>
<th>F_NAME</th>
<th>L_NAME</th>
<th>Password</th>
<th>UserId</th>
<th>UserType</th>
</tr>";
$sql = "SELECT FirstName,LastName,Password,UserId,UserType from admin;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
{
        
print "<tr>"; 
print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName']. "</td>";
print "<td>" . $row['Password']. "</td>";
print "<td>" . $row['UserId']. "</td>";
print "<td>" . $row['UserType']. "</td>";
print "</tr>"; 

}
print "</table>"; 
}
?>
<?php
echo "<h2>Responses</h2>";
$conn=mysqli_connect('localhost','root','','avinash');
echo "<table border='1'>
<tr>
<th>Email</th>
<th>NAME</th>
<th>Message</th>
</tr>";
$sql = "SELECT email,name,message from response;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
{
        
print "<tr>"; 
print "<td>" . $row['email'] . "</td>"; 
print "<td>" . $row['name']. "</td>";
print "<td>" . $row['message']. "</td>";
print "</tr>"; 

}
print "</table>"; 
}
?>
<?php
echo "<h2>Clients Data</h2>";
$conn=mysqli_connect('localhost','root','','avinash');
echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>UserId</th>
<th>Password</th>
<th>Address</th>
<th>Gender</th>
<th>Mobile</th>
<th>State</th>
<th>City</th>
<th>UserType</th>
</tr>";
$sql = "SELECT FirstName,LastName,UserId,Password,Address,Gender,Mobile,State,City,UserType from login_signup;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
{
        
print "<tr>"; 
print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName']. "</td>";
print "<td>" . $row['UserId']. "</td>";
print "<td>" . $row['Password']. "</td>";
print "<td>" . $row['Address']. "</td>";
print "<td>" . $row['Gender']. "</td>";
print "<td>" . $row['Mobile']. "</td>";
print "<td>" . $row['State']. "</td>";
print "<td>" . $row['City']. "</td>";
print "<td>" . $row['UserType']. "</td>";
print "</tr>"; 

}
print "</table>"; 
}
?>