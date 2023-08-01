<html>
<?php
         session_start();
         if(!isset($_SESSION['email']))
    {
        header('location: multilogin.html');
    
    }
    ?>
    <?php
$servername="localhost";
$username="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$sql_query="select *from prototype";
$sql_query1="select *from dumprototype";
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$title=$_POST['title'];
	$theme=$_POST['theme'];
	$descs=$_POST['descs'];
	if(isset($_FILES['submission']['name'])){
	$submission=$_FILES['submission']['name'];
	$ext=explode(".",$submission);
	$cn=count($ext);
	if($ext[$cn-1]=='pdf'){
	$tm=$_FILES['submission']['tmp_name'];
	move_uploaded_file($tm,"files.pdf/".$submission);
	$sql_query2="SELECT * from prototype where username='$username' ";
	$sql_query3="SELECT * from dumprototype where username='$username' ";
	$sql_query="INSERT INTO prototype(username,title,theme,descs,submission)values('$username','$title','$theme','$descs','$submission')";
	$sql_query1="INSERT INTO dumprototype(username,title,theme,descs,submission)values('$username','$title','$theme','$descs','$submission')";
		}
	else{
	      header("Location:responsef.html");
		  ?>
		  <?php
	}
	$r=mysqli_query($conn,$sql_query2);
	$r1=mysqli_query($conn,$sql_query3);
    $row3=mysqli_fetch_array($r);
	$row4=mysqli_fetch_array($r1);
    if($row3==null && $row4==null){
	if(mysqli_query($conn,$sql_query))
	{
		if(mysqli_query($conn,$sql_query1)){
      header("Location:responseu.html");
		if($sql_query=="select *from prototype"){
			if($sql_query1=="select *from dumprototype"){
        header("Location:responseu.html");
			}
		}
	}
	}
  else{
    echo "User had already submited his prototype";
  }
}
else{
	header("Location:responseal.html");
}
	mysqli_close($conn);
	}
	
}
?>
<head>
   <meta name="viewport"content="with=device-width,initialscale=1.0">
   <link rel="stylesheet" href="portal.css">
    <title>ASSIM</title>
    
<link rel="preconnect"href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@100;200;300;400;600;700&display=swap"
rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
   
       

<style>
    #theme{
  width: 80%;
  min-width: 15ch;
  max-width: 30ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;
  font-size: 1.25rem;
  color:darkblue;
  cursor: pointer;
  line-height: 1.1;
  background-color:wheat;
  box-shadow: 5px 5px 8px pink;
}
    footer {
        position:absolute;
        position: fixed;
        width:100%;
        height:7%;
        bottom:0;
        padding: 3px;
        background-color: rgba(233, 242, 245, 0.6);
        color: black;
}
input[type=submit],input[type=reset]
            {
                position:relative;
                text-align:center;
                height: 50px;
                width: 130px;
                padding:10px;
                font-size:20px;
                color:#000;
                font-family:poppins;
                font-weight:400;
                border:5px solid darkblue;
                text-transform:uppercase;
                border-radius:20px;
                letter-spacing:2px;
                cursor: pointer;
                transition-duration:0.4s;
            }
            input[type=submit]:hover,input[type=reset]:hover
            {
                box-shadow:0 5px 30px 0 violet inset,0 5px 30px 0 violet,
                0 5px 30px 0 violet inset,0 5px 30px 0 violet; 
                border:5px solid violet;
               
            }
   #id{
    background-color: black ;
   }
   .foot{
    text-align:center;
    bottom:0;
   }
   h2{
    color:blanchedalmond;
   }

   .headi{
  color:darkblue;
  border:solid 3px darkblue; 
  background-color: antiquewhite;
  padding: 15px;
  box-shadow: 5px 5px 8px pink;
}
.display{
  color: white;
  text-shadow: 2px 2px 4px #000000;
border: solid 2px darkblue;
background-color:violet;
box-shadow: 5px 5px 8px wheat;
}
th,td{
  padding: 15px;
}
a{
  text-decoration: none;
  color:#fff;
}
   .glow {
font-size: 25px;
color: #fff;
text-align: center;
animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
from {
text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
}

to {
text-shadow: 0 0 20px #fff, 0 0 30px #395a8cbb, 0 0 40px #256c9b, 0 0 50px #39335b, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
}
}
input[type=text]{
  width: 80%;
  min-width: 15ch;
  max-width: 30ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;
  font-size: 1.25rem;
  color:darkblue;
  cursor: pointer;
  line-height: 1.1;
  background-color:rgba(233, 242, 245, 0.6);
  box-shadow: 5px 5px 8px pink;
            }
        input[type=text]:hover{
          border:0;
        }
        #idea{
                position: absolute;
                top: 120px;
                left: 20%;
                width: fit-content;
                height: fit-content;
                padding: 30px;
                box-shadow: 5px;
                border-radius: 20px;
                background:rgba(122, 75, 181,0.3);
                
            }
</style>
</head>
<body>

    <!-- navigation-->
  <section>
 <div class="Nav"> 
    <nav class="navbar">
    <div class="navbar-container container">
        <input type="checkbox" name="" id="">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <ul class="menu-items">
            <li><a href="sih.html">Home</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
        <h1 class="logo">ASIIM</h1>
    </div>
</nav>
</div>
<!-- NAVBAR CLOSE-->
</section>



<!--contentt form-->
<section class="background-img">
<div ><br><br><br></div>
    <section>
        <center><h2 class="glow"><bold>IDEA PROTOTYPE SUBMISSSION</bold></h2></center>
    <div id="idea">
      <center><form action="" method="post"  enctype="multipart/form-data">
        <table>
        
            <tr>
              <td><h3 style="color: wheat;text-shadow: 2px 2px 4px violet;">USERNAME</h3>
                <td colspan="2"><input type="text" name="username" id="username" placeholder="username" required></td>
              </tr>
            <tr>
                <td><h3 style="color: wheat;text-shadow: 2px 2px 4px violet;">TITLE OF IDEA</h3>
                <td colspan="2"><input type="text" name="title" id="title" placeholder="title" required></td>
            </tr>
            <tr>
                <td><label for="theme"><h3 style="color: wheat;text-shadow: 2px 2px 4px violet;">THEME OF IDEA</h3></label>
               <td colspan="2"><br>
                   <select id="theme" name="theme" id="theme" required>
                    <option value="1">select your theme</option>
                    <option value="1">select your theme</option>
                <option value="AI & ROBOTICS">AI & ROBOTICS</option>
                <option value="BLOCKCHAIN & CYBERSECURITY">BLOCKCHAIN & CYBERSECURITY</option>
                <option value="INDIAN HERITAGE & CULTURE">INDIAN HERITAGE & CULTURE</option>
                <option value="AGRICULTURE & MEDICAL">AGRICULTURE & MEDICAL</option>
                <option value="MISCELLANEOUS">MISCELLANEOUS</option>
                <option value="DATASCIENCE & AUTOMATION">DATASCIENCE & AUTOMATION</option>
              </select></td>
            </tr>
            <tr>
                <td><h3 style="color: wheat;text-shadow: 2px 2px 4px violet;">IDEA DESCRIPTION</h3></td>
                <td colspan="2"><textarea style="background-color:white;box-shadow: 5px 5px 8px pink;" id="descs" name="descs" rows="10" cols="50" required></textarea><td>
            </tr>
            <tr>
                <td><label for="submission"><h3 style="color: wheat;text-shadow: 2px 2px 4px violet;">IDEA SUBMISSSION</h3></label></td>
                <td colspan="2"><input style="background-color:skyblue;box-shadow: 5px 5px 8px pink;" type="file" name="submission"  id="submission" required>
            </tr>

            <tr>
                <td colsapn="3"></td>
                <td><br><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form></div>
</center>    
</section>

<footer>
<div class='foot'>
  <p>© FEISTYCODERS Inc.. 2022 All rights reserved.</p><br>
</div>
</footer>







</body>
</html> 