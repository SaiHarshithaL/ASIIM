<?php
$servername="localhost";
$username="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mail=$_POST['mail'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$certificatenumber=$_POST['certificatenumber'];
	$education=$_POST['education'];
	$states=$_POST['states'];
	if(isset($_FILES['castefile']['name'])){
		$castefile=$_FILES['castefile']['name'];
		$ext=explode(".",$castefile);
		$cn=count($ext);
		if($ext[$cn-1]=='pdf'){
		$tm=$_FILES['castefile']['tmp_name'];
		move_uploaded_file($tm,"certificates.pdf/".$castefile);
	$sql_query1="SELECT * from registration_data where mail='$mail' ";
	$sql_query2="SELECT * from registration_data where certificatenumber='$certificatenumber' ";
	$sql_query4="SELECT * from dumform where mail='$mail' ";
	$sql_query5="SELECT * from dumform where certificatenumber='$certificatenumber' ";
	$sql_query="INSERT INTO registration_data(firstname,lastname,mail,dob,gender,certificatenumber,education,states,castefile)values('$firstname','$lastname','$mail','$dob','$gender','$certificatenumber','$education','$states','$castefile')";
	$sql_query3="INSERT INTO dumform(firstname,lastname,mail,dob,gender,certificatenumber,education,states,castefile)values('$firstname','$lastname','$mail','$dob','$gender','$certificatenumber','$education','$states','$castefile')";
	
}
		else{
			header("Location:responseregf.html");
			?>
			<?php
	  }
	
	$r=mysqli_query($conn,$sql_query1);
	$r1=mysqli_query($conn,$sql_query2);
	$r2=mysqli_query($conn,$sql_query4);
	$r3=mysqli_query($conn,$sql_query5);
    $row3=mysqli_fetch_array($r);
	$row4=mysqli_fetch_array($r1);
	$row5=mysqli_fetch_array($r2);
	$row6=mysqli_fetch_array($r3);
    if($row5==null && $row6==null){
		if($row3==null && $row4==null){
	if(mysqli_query($conn,$sql_query))
	{
		if(mysqli_query($conn,$sql_query3)){
		echo "<center><h2>New details entered succesfully</h2></center>";
		}
	}
	else
	{
		echo "<center><h2>Sorry there is an error while registration process. So please register again later</h2></center>";
	}
}
}
else{
	echo "<center><h2>User already exists. One person can submit only one response</h2></center>";
}
	
	mysqli_close($conn);
}
}
?>