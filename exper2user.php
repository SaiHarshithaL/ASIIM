<?php
session_start();
$theme=$_SESSION['theme'];
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport"content="with=device-width,initialscale=1.0">
   <link rel="stylesheet" href="admindashstyle.css">
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
            ::-webkit-scrollbar
{
    width:12px;
}
::-webkit-scrollbar-thumb{
    background:linear-gradient(#000,pink);
    border-radius:6px;
}
    footer {
        position:absolute;
        position: fixed;
        width:100%;
        height:7%;
        bottom:0;
        padding: 3px;
        background-color: rgba(233, 242, 245,0.6);
        color: black;
}
#idea{
                position: absolute;
                left:20%;
                width: 900px;
                height: 100%;
                padding: 30px;
                box-shadow: 5px;
                border-radius: 20px;
                
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
  background-color:wheat;
  box-shadow: 5px 5px 8px pink;
            }
        input[type=text]:hover{
          border:0;
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
            .b
            {
                box-shadow:0 5px 30px 0 violet inset,0 5px 30px 0 violet,
                0 5px 30px 0 violet inset,0 5px 30px 0 violet; 
                border:5px solid violet;
                border-radius: 12px;
                padding: 15px 32px;
  text-align: center;
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
}
.display{
  color: white;
}

a{
  text-decoration: none;
  color:#fff;
}
   .glow {
font-size: 40px;
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
th,td{
  padding: 15px;
}
.Nav::-webkit-scrollbar {
  display: none;
}
/* Hide scrollbar for IE, Edge and Firefox */
.Nav{
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
button a{
  color:blue;
  font-size:medium;
  font-family:cursive;
}
#hello{
  overflow-y:scroll;
}
h3{
  color:blue;
}
</style>
</head>
<body>

    <!-- navigation-->





<!--contentt form-->
<section class="background-img">
<div ><br><br><br></div>
<div id="idea" style="overflow-x:auto;">
    <section>
      <center><form action="" method="post"  enctype="multipart/form-data">
        <table>
            <caption><h1 class="glow"><bold>IDEA PROTOTYPE APPROVAL</bold></h1></caption>
            <tr>
              <td><label for="title"><h2 style="color:crimson; text-shadow:2px 2px violet;">USIDS</h2></label>
                <td colspan="2"><input type="text" name="uids" id="uids" placeholder="uids" required></td>
              </tr>
              <tr>
                <td>
                <td><br><input type="submit" value="submit" name="submit" onsubmit='b()'></td> 
</td>
</tr>
        </table>
        <center>
          <div id='hello'>
        <table>
            <br>
            <?php
            $servername="localhost";
            $usernames="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$usernames,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql_query1="SELECT * FROM lap";    
	            $result1=mysqli_query($conn,$sql_query1);
                $row1=mysqli_fetch_array($result1);
                if(isset($_POST['submit']))
                {
                    $uids=$_POST['uids'];
                   $sql_query1="SELECT * FROM lap where uids='$uids'";
	                $result1=mysqli_query($conn,$sql_query1);

                    while($row1=mysqli_fetch_assoc($result1))
                    {
                        ?>
                                <tr style="text-align:center">
                                  <td><h3 >USERID</h3></td>
                                  <td><h3 ><?php echo $row1['uids'];?></h3></td>
                    </tr>
                    <tr style="text-align:center">
                                 <td><h3 >USERNAME</h3></td>
                                  <td><h3 ><?php echo $row1['username'];?></h3></td>
                    </tr>
                    <tr style="text-align:center">
                                 <td><h3 >TITLE</h3></td>
                                  <td><h3 ><?php echo $row1['title'];?></h3></td>
                    </tr>
                    <tr style="text-align:center">
                                 <td><h3 >THEME</h3></td>
                                  <td><h3 ><?php echo $row1['theme'];?></h3></td>
                    </tr>
                    <tr style="text-align:center">
                                 <td><h3 >DESCRIPTION</h3></td>
                                  <td><h3 ><?php echo $row1['descs'];?></h3></td>
                    </tr>
                    <tr style="text-align:center">
                                  <td><h3 >VIDEO</h3></td>
                                    <td>
                                      <a href="videos.mp4/<?php echo $row1['submission']?>" target="_blank">
                                        view
                                      </a>
                                  </td>
                                </tr>
                                <tr style="text-align:center">
                                  <td colspan="2">
                                  <iframe src="videos.mp4/<?php echo $row1['submission']?>" style="width:900px; height:450px;" allowfullscreen="" controls="" autoplay="" frameborder="0" scrolling="no"></iframe>
                    </td>
                    </tr>
                    <tr>
                                <td><center><input type="submit" value="approve" name="approve"><br><br><Br><Br><br><br><Br><Br></center></td>
                                <td><center><input type="submit" value="reject" name="reject"><br><br><Br><Br><br><br><Br><Br></center></td>
                    </tr> 
                        <?php

                    }
	
                }
   
?>
          </table>
          </div>
              </center>
          <?php
          
              $servername="localhost";
              $username="root";
              $password="";
              $database_name="sih";
              $conn=mysqli_connect($servername,$username,$password,$database_name);
              if(!$conn){
	            die("connection failed:".mysqli_connect_error());
                    }
              if(isset($_POST['approve']))
              {
	            $uids=$_POST['uids'];
	            $username1="SELECT * FROM dumprototype where uids=$uids and theme='$theme'";
              $r=mysqli_query($conn,$username1);
              $row3=mysqli_fetch_array($r);
              if($row3==null){
                echo "<p class='glow'>YOU DONT HAVE ACCESS TO MODIFY THE GIVEN DETAILS</p>";
            ?>
            <br><br>
                <center><button class="b"><a href="experstview.php">BACK</a></button></center>
                <?php
              }
	            $x=$row3["username"];
              $_SESSION['usertoap']=$x;
              $_SESSION['usertore']='';
              $sql_query2="UPDATE lap set flag=1 where username='$x'";
	            function checkprimary($conn,$sql_query2) {
               
                  if(mysqli_query($conn,$sql_query2)){
                    echo "he is approved";
                  }
                return true;
              }
              try {
                checkprimary($conn,$sql_query2);
                echo "";
                
              }
              catch(Exception $e) {
                echo 'Message: ALREADY APPROVED';
              }
	            mysqli_close($conn);
              }     
?>
 <?php
          
          $servername="localhost";
          $username="root";
          $password="";
          $database_name="sih";
          $conn=mysqli_connect($servername,$username,$password,$database_name);
          if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
          if(isset($_POST['reject']))
          {
            $uids=$_POST['uids'];
            $username1="SELECT * FROM dumprototype where uids=$uids and theme='$theme'";
          $r=mysqli_query($conn,$username1);
          $row3=mysqli_fetch_array($r);
          if($row3==null){
            echo "<p class='glow'>YOU DONT HAVE ACCESS TO MODIFY THE GIVEN DETAILS</p>";
            ?>
            <br><br>
                <center><button class="b"><a href="experstview.php">BACK</a></button></center>
                <?php
                
            exit;
          }
          $x=$row3["username"];
          $_SESSION['usertore']=$x;
          $_SESSION['usertoap']='';
          $sql_query2="UPDATE lap set flag=0 where username='$x'";
          function checkprimary($conn,$sql_query1,$sql_query2) {
              if(mysqli_query($conn,$sql_query2)){
                echo "Candidate is rejected";
            }
            return true;
          }
          try {
            checkprimary($conn,$sql_query1,$sql_query2);
            echo "";
            
          }
          catch(Exception $e) {
            echo 'Message: ALREADY Rejected';
          }
          mysqli_close($conn);
          }     
?>
    </form></div>
</center> 
        </div>
            </section>
            <br>
        </HTML>