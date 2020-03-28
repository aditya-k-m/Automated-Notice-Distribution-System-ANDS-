<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'userregistration');
$name=$_POST['user'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($conn, $s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$name;
	header('location:home.php');

}
else
{
	header('location:login.php');
}


?>