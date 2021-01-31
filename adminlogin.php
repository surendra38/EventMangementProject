<?php
 include 'db.php';
 session_start();

if(isset($_POST['submit']))
{
	$uname=($_POST['uname']);
	$pass=($_POST['pass']);
	
	
	
	
	$sql="SELECT * FROM admin WHERE username='$uname' AND password='$pass'";
	//die("failed to query database".mysqli_error($conn));
	
	$result = mysqli_query($conn,$sql);

	$found_num_rows=mysqli_num_rows($result);
	echo $found_num_rows;
	       
			  if($found_num_rows==1)
			   {
				  $_SESSION['login user']=$uname;
				  header("location:welcome.php");
				  
			   }
			   else
			   {
				  header("location:admin.php ?invalid=user name or password are incoorect");
			   }
}
			   ?>

			  

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
	