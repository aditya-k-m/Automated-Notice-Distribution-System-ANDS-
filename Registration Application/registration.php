<?php
session_start();
header('location:login.php');
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
echo" username already taken";
}
else{
$row="insert into usertable (name,branch,year,email,phone) values('$name','$branch','$year','$email','$phone')";
mysqli_query($conn, $row);

echo " registered successfully" ;

}


?>
