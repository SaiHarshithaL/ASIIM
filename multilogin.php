<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
if(isset($_SESSION['email']))
{
	if($_SESSION['usertype']=='user')
   			header('location: user.php');
	if($_SESSION['usertype']=='admin')
   			header('location: ad.php');
	if($_SESSION['usertype']=='expert')
   			header('location: expor.php');
}
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$usertype=$_POST['usertype'];
	$sql_query="SELECT * FROM multilogin WHERE username='".$username."' and pwd='".$pwd."' and usertype='".$usertype."' ";
	$result=mysqli_query($conn,$sql_query);
	$row=mysqli_fetch_array($result);
	if($row!=null){
		if($row['username']==$username && $row['pwd']==$pwd && $row['usertype']=='admin' )
		{
			$_SESSION['usertype']='admin';
			$_SESSION['email']=$username;	
			header("location: ad.php");
		}
		else if($row['username']==$username && $row['pwd']==$pwd && $row['usertype']=='user' )
		{
			$_SESSION['email']=$username;
			$_SESSION['usertype']='user';
			header("location: user.php");
			
		}
		else if($row['username']==$username && $row['pwd']==$pwd && $row['usertype']=='expert' )
		{
			$_SESSION['email']=$username;
			$_SESSION['usertype']='expert';
			header("location: expor.php");
		}
	}	

	else{
			echo "<script type='text/javascript'>alert('Invalid Username or password');document.location='multilogin.html'</script>";
	}
}
?>