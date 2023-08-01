 <!DOCTYPE html>
<html>
<head>
   <meta name="viewport"content="with=device-width,initialscale=1.0">
   <link rel="stylesheet" href="scview.css">
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
input[type=text]{
            width: 100%;
            padding: 12px;
            border: 3px solid  #009f6b;
            border-radius: 4px;
            resize: vertical;
            background-color:rgb(255,230,230)

;
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
                font-family:Lucida Handwriting;
                font-weight:400;
                border:3px solid darkblue;
                text-transform:uppercase;
                border-radius:20px;
                letter-spacing:2px;
                cursor: pointer;
                transition-duration:0.4s;
            }
            input[type=submit]:hover,input[type=reset]:hover
            {
                box-shadow:0 5px 30px 0 #ffa089 inset,0 5px 30px 0 #ffa089,
                0 5px 30px 0 #ffa089 inset,0 5px 30px 0 #ffa089; 
                border:3px solid darkblue;
               
            }
   .background-img{ 
    background-image: url("bg1.webp");
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover; 
  overflow:hidden;
  height: 100%;
}
   .foot{
    text-align:center;
    bottom:0;
   }
   h2{
    color:#3b444b;
   }

   .headi{
  color:darkblue;
  border:solid 3px darkblue; 
  background-color: antiquewhite;
  padding: 15px;
}
.display{
  color: white;
  text-shadow: 2px 2px 4px #000000;
border: solid 2px darkblue;
background-color:violet;
}
section{
    width:100%;
    height:100vh;
}
::-webkit-scrollbar
{
    width:12px;
}
::-webkit-scrollbar-thumb{
    background:linear-gradient(#000,#3ab09e);
    border-radius:6px;
}
/* body {
  display: flex;
  flex-direction: column;
  min-height: 10vh;
} */

/* #footer {
  background-color: #efefef;
  flex: 0 0 50px;/*or just height:50px;
  margin-top: auto;
} */
a{
  text-decoration: none;
  color:blue;
}
   .glow {
font-size: 25px;
color:  #4A646C;

text-align: center;

animation: glow 1s ease-in-out infinite alternate;
}

@keyframes glow {
from {
text-shadow: 0 0 10px #fbceb1, 0 0 20px #fbceb1, 0 0 30px #fbceb1, 0 0 40px #fbceb1, 0 0 50px #fbceb1, 0 0 60px #fbceb1, 0 0 70px #fbceb1;
}

to {
text-shadow: 0 0 20px #ace1af, 0 0 30px #ace1af, 0 0 40px #ace1af, 0 0 50px #ace1af, 0 0 60px #ace1af, 0 0 70px #ace1af, 0 0 80px #ace1af;
}
}
th,td{
  color:blue;
  font-weight: bold;
  padding: 15px;
}
#idea{
  top:130px;
  height:100%;
}
</style>
</head>
<body >
<!--contentt form-->
<section class="background-img" >
<div ><br><br></div>
    <section>
    <div id="idea" style="overflow-x:auto;">
      <center><form action="" method="post"  enctype="multipart/form-data">
        <table>
        <caption><h2><bold>CANDIDATES APPROVAL</bold></h2></caption>
        <tr>
              <td style='text-align: right;color:#ffcc66;text-shadow: 2px 2px 5px white'>USERIDS</td>
                <td ><input type="text" name="uids" id="uids" placeholder="uids" required></td>
              </tr>

              <tr >
                <td colspan='2'><center><input type="submit" value="submit" name="submit"></center></td>

              </tr>


            <br>
            <?php
            $conn=mysqli_connect("localhost","root","","sih");
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql_query1="SELECT * FROM registration_data";    
	            $result1=mysqli_query($conn,$sql_query1);
                $row1=mysqli_fetch_array($result1);
                if(isset($_POST['submit']))
                {
                    $uids=$_POST['uids'];
                   $sql_query1="SELECT * FROM registration_data where uids='$uids'";
	                 $result1=mysqli_query($conn,$sql_query1);

                    while($row1=mysqli_fetch_assoc($result1))
                    {
                        ?>
                        
                                <tr>
                                  <td style='text-align: right;color:salmon;font-weight:bold'>USERID</td>
                                  <td ><?php echo $row1['uids'];?></td>
                    </tr>
                    <tr>
                    <td style='text-align: right;color:salmon;font-weight:bold'>USERNAME</td>
                                  <td><?php echo $row1['mail'];?></td>
                    </tr>
                    <tr>
                    <td style='text-align: right;color:salmon;font-weight:bold'>CERTIFICATENUMBER</td>
                                  <td><?php echo $row1['certificatenumber'];?></td>
                    </tr>
                     <tr>
                     <td style='text-align: right;color:salmon;font-weight:bold'>CASTE FILE</td>
                                    <td>
                                      <a href="certificates.pdf/<?php echo $row1['castefile']?>" target="_blank">
                                       <h3> view</h3>
                                      </a>
                                  </td>
                      </tr>
                      <tr >
                      <td colspan='2'>
                    <iframe src="certificates.pdf/<?php echo $row1['castefile']?>" style="width:900px; height:800px;"></iframe>
                    </td>
                    </tr>
                    <tr>
                                <td><center><input type="submit" value="approve" name="approve"></center></td>
                                <td><center><input type="submit" value="reject" name="reject"></center></td>
                    </tr> 
                    
                     
                    
                        <?php

                    }
	
                }
   
?>
          </table>
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
	            $username1="SELECT * FROM registration_data where uids=$uids";
              $r=mysqli_query($conn,$username1);
              $row4=mysqli_fetch_array($r);
              if($row4==null){
                echo "";
                exit;
              }
              $y=$row4['mail'];
              $uu=$row4['uids'];
               $sql_query3="INSERT INTO cap(uids,username)values('$uu','$y')";
	            $sql_query1="INSERT INTO multilogin(username)values('$y')";
              $sql_query2="DELETE FROM registration_data where uids=$uids";
	            function checkprimary1($conn,$sql_query1,$sql_query2,$sql_query3) {
                if(mysqli_query($conn,$sql_query1)) {
                  if(mysqli_query($conn,$sql_query2)){
                    if(mysqli_query($conn,$sql_query3)){
                      echo "<p style='color:black'>User have been approved</p>";
                  }
                }
                }
                return true;
              }
              try {
                checkprimary1($conn,$sql_query1,$sql_query2,$sql_query3);
                echo "";
                
              }
              catch(Exception $e) {
                echo 'Message: ALREADY REJECTED';
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
	            $username1="SELECT * FROM registration_data where uids=$uids";
              $r=mysqli_query($conn,$username1);
              $row4=mysqli_fetch_array($r);
              if($row4==null){
                echo "";
                exit;
              }
              $y=$row4['mail'];
              $uu=$row4['uids'];
               $sql_query3="INSERT INTO car(uids,username)values('$uu','$y')";
              $sql_query2="DELETE FROM registration_data where uids=$uids";
	            function checkprimary($conn,$sql_query3,$sql_query2) {
                if(mysqli_query($conn,$sql_query3)) {
                  if(mysqli_query($conn,$sql_query2)){
                    echo "<p style='color:black'>User have been rejected</p>";
                  }
                }
                return true;
              }
              try {
                checkprimary($conn,$sql_query3,$sql_query2);
                echo "";
                
              }
              catch(Exception $e) {
                echo 'Message: ALREADY REJECTED';
              }
	            mysqli_close($conn);
              }     
?>
    </form></div>
</center>
            </section>
            <div id="footer">FOOTER</div>
            </body>
            </html>