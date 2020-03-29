
<html>
<head>
	<title>Search Page</title>
</head>
<body>
	<h1> Welcome to Search Page  </h1> <br>
	<center>

<form action="" method="POST">
	<input type="text" name="year" placeholder="year" >
	<input type="text" name="branch" placeholder="branch" >
	<input type="submit" name="submit" placeholder="submit" >
</form>



<?php
$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'userregistration');
if(isset($_POST['submit']))
{ 
$branch=$_POST['branch'];
$year=$_POST['year'];
$query="SELECT * FROM usertable where year='$year' and branch='$branch' ";
$query_run=mysqli_query($conn,$query);
while($row= mysqli_fetch_array($query_run))
{
?>
<form action="" method="post">
<input type="text" name="name" value="<?php echo $row['name'] ?>"/>
<input type="text" name="branch" value="<?php echo $row['branch'] ?>"/>
<input type="text" name="year" value="<?php echo $row['year'] ?>"/>
<input type="text" name="email" value="<?php echo $row['email'] ?>"/>
<input type="text" name="phone" value="<?php echo $row['phone'] ?>"/>
</form>
<?php
}

}
?>
</center>
</body>
</html>