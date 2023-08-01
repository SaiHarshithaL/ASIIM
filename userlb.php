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
$mymail=$_SESSION['email'];
$sql_query="SELECT * from lap where username='$mymail' and flag!=-1";
$rr1=mysqli_query($conn,$sql_query);
$rr1=mysqli_query($conn,$sql_query);
$rf1=mysqli_fetch_array($rr1);
if($rf1!=null){
  header("Location:responseal.html");
}
else{
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	if(isset($_FILES['video']['name'])){
	$video=$_FILES['video']['name'];
	$ext=explode(".",$video);
	$cn=count($ext);
	if($ext[$cn-1]=='mp4'){
	$tm=$_FILES['video']['tmp_name'];
	move_uploaded_file($tm,"videos.mp4/".$video);
	$sql_query="UPDATE lap set submission='$video', flag=2 where username='$username'";
		}
	else{
	      header('location:responseregf.html');
		  ?>
		  <?php
	}
    $sql_query2="SELECT submission from lap where username='$username'";
	$r=mysqli_query($conn,$sql_query2);
    $row3=mysqli_fetch_array($r);
    $x=$row3["submission"];
    if($x==null){
	if(mysqli_query($conn,$sql_query))
	{
      echo "<script>alert('details have been entered');</script>";
	}
}
else{
    echo "<script>alert('already submitted')</script>";
  }
	mysqli_close($conn);
	}
	
}}
?>
<head>
   <meta name="viewport"content="with=device-width,initialscale=1.0">
   <link rel="stylesheet" href="portal.css">
    <title>video</title>
    
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

@keyframes glow {
from {
text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
}

to {
text-shadow: 0 0 20px #fff, 0 0 30px #395a8cbb, 0 0 40px #256c9b, 0 0 50px #39335b, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
}
}
::-webkit-scrollbar
{
    width:12px;
}
::-webkit-scrollbar-thumb{
    background:linear-gradient(#000,#3ab09e);
    border-radius:6px;
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
                
            }
            .img{ 
    background-image:url("bg1.webp");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  overflow:hidden;
  height:900px;
}

h3{
  color:blue;
}

</style>
</head>
<body>
<!--contentt form-->
<section class='img'>
<div ><br><br><br></div>
    <section>
        <center><h2 class="glow"><bold>IDEA PROTOTYPE SUBMISSSION</bold></h2></center>
    <div id="idea">
      <center><form action="" method="post"  enctype="multipart/form-data">
        <table>
        
            <tr>
              <td><h3 >USERNAME</h3>
                <td colspan="2"><input type="text" name="username" id="username" placeholder="username" required></td>
              </tr>
            <tr>
                <td><label for="submission"><h3 >IDEA SUBMISSSION</h3></label></td>
                <td colspan="2"><input style="background-color:skyblue;box-shadow: 5px 5px 8px pink;" type="file" name="video"  id="video" required>
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