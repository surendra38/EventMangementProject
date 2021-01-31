<html>
<body>
<bgcolor="blue">
</body>
</html>

<?php
include 'db.php';

if(isset($_POST['submit'])){
$email=$_POST['email'];
$name=$_POST['uname'];

$event=$_POST['ename'];
$st=$_POST['status'];

echo"$email,$name,$event,$st";

$sql="INSERT INTO result(email,name,event,status)VALUES('$email','$name','$event','$st')";
		
	
if (mysqli_query($conn,$sql)){

	echo '<script language="javascript">';
	echo 'alert("registerd suceesfully")';
	echo '</script>';
 	header("location:result.php ? result=result added suceesfully");

}
elseif(mysqli_error($conn))
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo '<script language="javascript">';
	echo 'alert("Enter another registration number")';
	echo '</script>';
}
mysqli_close($conn);
}

?>