<?php
$servername="localhost";
$usernam="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$usernam,$password,$database_name);
$sql_query="select * from multilogin";
$sql_query1="select * from expinfo";
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$theme=$_POST['theme'];
	$sql_query2="SELECT * from multilogin where username='$username' ";
	$sql_query3="SELECT * from expinfo where username='$username' ";
	$sql_query="INSERT INTO multilogin(username,usertype)values('$username','expert')";
	$sql_query1="INSERT INTO expinfo(username,theme)values('$username','$theme')";
	$r=mysqli_query($conn,$sql_query2);
	$r1=mysqli_query($conn,$sql_query3);
    $row3=mysqli_fetch_array($r);
	$row4=mysqli_fetch_array($r1);
    if($row3==null && $row4==null){
	if(mysqli_query($conn,$sql_query))
	{
		if(mysqli_query($conn,$sql_query1)){
		if($sql_query=="select *from multilogin"){
			if($sql_query1=="select *from expinfo"){
			}
		}
		else{
			header("Location:expres.html");
			?>
			<br>
			<?php
		}
	}
	}
	else
	{
		echo "Error: ".$sql."".mysqli_error($conn);
	}
}
else{
	header("Location:expal.html");
}
	mysqli_close($conn);
	}
?>
