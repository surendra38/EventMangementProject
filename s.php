<?php
require 'db.php';
if(isset($_POST['submit']))
{
$collage=$_POST['collage'];
$organiser=$_POST['organiser'];
$ename=$_POST['ename'];
$sdate=$_POST['sdate'];
$ctime=$_POST['ctiming'];
$ldate=$_POST['ldate'];

// echo"$collage,$organiser,$ename,$sdate,$ctime,$ldate";

	$sql="INSERT INTO eventpost(collage,organiser,event,sdate,ctime,ldate) 
	         VALUES('$collage','$organiser','$ename','$sdate','$ctime','$ldate')";
	
	if (mysqli_query($conn, $sql)) 
{
echo '<script language="javascript">';
echo 'alert("registerd suceesfully")';
echo '</script>';

} 
else
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);


}

mysqli_close($conn);
}
?>