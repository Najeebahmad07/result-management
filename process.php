<?php
 $connect=mysqli_connect("localhost","root","","rlogin") or die("connection failed");
 if(!empty($_POST['save']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from login where username='$username' and password='$password'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);

if($count>0)
{
$_SESSION['njb'] = $username;
 
header ('Location: display.php');
}
else
{
    header ('Location: 404.html');
}

}
?>