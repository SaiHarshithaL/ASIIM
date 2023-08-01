<!DOCTYPE html>
<html>
<head>
   <meta name="viewport"content="with=device-width,initialscale=1.0">
   <link rel="stylesheet" href="portal.css">
    <title>ASIIM</title>
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
            border: 3px solid darkblue;
            border-radius: 4px;
            resize: vertical;
            font-family:Verdana;
            background-color:rgb(255,230,230)

;
            }
  .background-img{ 
    background-image:url("bg1.webp");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  overflow:hidden;
  height:900px;
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
                border:3px solid  #ffa089;
                text-transform:uppercase;
                border-radius:20px;
                letter-spacing:2px;
                cursor: pointer;
                transition-duration:0.4s;
            }
            input[type=submit]:hover,input[type=reset]:hover
            {
                box-shadow:0 5px 30px 0 #ffa07a inset,0 5px 30px 0 #ffa07a,
                0 5px 30px 0 #ffa07a inset,0 5px 30px 0 #ffa07a; 
                border:3px solid #ffa089;
               
            }
   #id{
    background-color: black ;
   }
   .foot{
    text-align:center;
    bottom:0;
   }
   h3{
    color:dark blue;
   }
a{
  color:black;
}
   .headi{
  color:darkblue;
  border:solid 3px darkblue; 
  background-color: antiquewhite;
  padding: 15px;
}
.display{
  color: white;text-shadow: 2px 2px 4px #000000;
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
    background:linear-gradient(#000,#3ab09e
);
    border-radius:6px;
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
color:#dc143c;
text-align: center;
animation: glow 1s ease-in-out infinite alternate;
}

@keyframes glow {
from {
text-shadow: 0 0 10px #76ff7a, 0 0 20px #76ff7a, 0 0 30px #76ff7a, 0 0 40px #76ff7a, 0 0 50px #76ff7a, 0 0 60px #76ff7a, 0 0 70px #76ff7a;
}

to {
text-shadow: 0 0 20px #ffa089, 0 0 30px #ffa089, 0 0 40px #ffa089, 0 0 50px #ffa089, 0 0 60px #ffa089, 0 0 70px #ffa089, 0 0 80px #ffa089;
}
}
.mail_id{
                text-transform: lowercase;
            }
</style>
</head>
<body>
<section class="background-img">
<div ><br><br><br></div>
    <section>
    <center>
        <div class="a">
            <form action="" method="post"  enctype="multipart/form-data">
                <table>
                    <caption ><h2 class="glow">USER-DETAILS</h2></caption>
                    <tr>
                        <td  style="color:green"><label for="mail"><h3>USERNAME</h3></label></td>
                        
                        <td ><input class="mail_id" type="text" name="mail" id="mail"  required>
        </td>
        </tr>
                            <br>
                            <br>
                            <br>    
                    <tr>
                        <td><br><center><input type="reset" value="CANCEL"></center></td>
                        <td align="center"><br><input type="submit" name="submit" value="submit"></td>
                    </tr>
    <?php
            
            $servername="localhost";
            $usernames="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$usernames,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql_query1="SELECT * FROM dumform";    
	            $result1=mysqli_query($conn,$sql_query1);
                $row1=mysqli_fetch_array($result1);
                if(isset($_POST['submit']))
                {
                    $mail=$_POST['mail'];
                   $sql_query1="SELECT * FROM dumform where mail='$mail'";
	                $result1=mysqli_query($conn,$sql_query1);
                    while($row1=mysqli_fetch_assoc($result1))
                    {
                        ?>
                                <tr>
                                  <td><label for="fn" name="fn" id="fn"><h4>FIRSTNAME</h4></label></td>
                                  <td><h4><label name="fn"><?php echo $row1['firstname'];?></label></h4></td>
                    </tr>
                    <tr>
                                 <td><label for="ls" name="ls" id="ls"><h4>LASTNAME</h4></label></td>
                                  <td><h4><label name="ls"><?php echo $row1['lastname'];?></label></h4></td>
                    </tr>
                    <tr>
                                 <td><label for="dob" name="dob" id="dob"><h4>DOB</h4></label></td>
                                  <td><h4><label name="dob"><?php echo $row1['dob'];?></label></h4></td>
                    </tr>
                    <tr>
                                 <td><label for="gender" name="gender" id="gender"><h4>GENDER</h4></label></td>
                                  <td><h4><label name="gender"><?php echo $row1['gender'];?></label></h4></td>
                    </tr>
                    <tr>
                                 <td><label for="cno" name="cno" id="cno"><h4>CERTIFICATE NUMBER</h4></label></td>
                                  <td><h4><label name="cno"><?php echo $row1['certificatenumber'];?></label></h4></td>
                    </tr>
                    <tr>
                                  <td><label for="castefile" name="castefile" id="castefile"><h4>CASTECERTIFICATE DOCUMENT</h4></label></td>
                                    <td>
                                      <a href="files.pdf/<?php echo $row1['castefile']?>" target="_blank">
                                        <h3 style="color:black;">view</h3>
                                      </a>
                                  </td>
                                </tr>
                                <tr>
                                 <td><label for="edu" name="edu" id="edu"><h4>EDUCATION</h4></label></td>
                                  <td><h4><label name="edu"><?php echo $row1['education'];?></label></h4></td>
                    </tr>
                    <tr>
                                 <td><label for="s" name="s" id="s"><h4>STATES</h4></label></td>
                                  <td><h4><label name="s"><?php echo $row1['states'];?></label></h4></td>
                    </tr>
                
                        </table>
                    </center>
                    
                        <?php

                    }
	
                }
   
    ?>
     </div>
</section>
<div><br><br><br></div>
</body>
</html> 