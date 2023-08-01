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
  
  .background-img{ 
    background-image:url("bg1.webp");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  overflow:hidden;
  height:900px;
}
section{
    width:100%;
    
}
::-webkit-scrollbar
{
    width:12px;

}
::-webkit-scrollbar-thumb{
    background:linear-gradient(#000,#3ab09e);
    border-radius:6px;
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
                border:5px solid Bistre ;
                text-transform:uppercase;
                border-radius:20px;
                letter-spacing:2px;
                cursor: pointer;
                transition-duration:0.4s;
            }
            input[type=submit]:hover,input[type=reset]:hover
            {
                box-shadow:0 5px 30px 0 rgb(138,185,241) inset,0 5px 30px 0 rgb(138,185,241),
                0 5px 30px 0 rgb(138,185,241),0 5px 30px 0 rgb(138,185,241); 
                border:5px solid Bistre;
               
            }
   #id{
    background-color: black ;
   }
   .foot{
    text-align:center;
    bottom:0;
   }
   h2{
    color:#1cac78;
   }

   .headi{
  color:darkblue;
  border:solid 3px #007f66 ;  
  font-family:Segoe Print;
  background-color: antiquewhite;
  padding: 15px;
}
.display{
  color: white;text-shadow: 2px 2px 4px #000000;
border: solid 2px red;
background-color:rgb(255,160,137);
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
color: #ffa700;
text-align: center;
animation: glow 1s ease-in-out infinite alternate;
}

@keyframes glow {
from {
text-shadow: 0 0 10px #ffa089, 0 0 20px #ffa089, 0 0 30px #ffa089, 0 0 40px #ffa089, 0 0 50px #ffa089, 0 0 60px #ffa089, 0 0 70px #ffa089;
}

to {
text-shadow: 0 0 20px #fbceb1, 0 0 30px  #fbceb1, 0 0 40px #fbceb1 , 0 0 50px  #fbceb1, 0 0 60px  #fbceb1,, 0 0 70px #fbceb1, 0 0 80px #fbceb1;
}
}
</style>
</head>
<body>
<section class="background-img">
    <section>
    <div id="idea" style="overflow-x:auto;">
      <center><form method="post" action="" name="expertsview" enctype="multipart/form-data">
        <table>
            <caption class='glow'><h2><bold><br><br>CERTIFICATE VERIFICATION</bold></h2></caption>
           
           <tr>
            <td><br><center><input type="submit" type="submit" value="DETAILS" name="submit"></center></td>
            </tr> 
        </table>
        
      <div>
        <div>
          <table border="1" style="border-collapse:collapse;" class="tab"> 
            <tr class='headi'>
              <th>USERID</th>
              <th>CERTIFICATE NUMBER</th>
              <th>CERTIFICATE FILE</th>
            </tr>
            <br>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$username,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql_query1="SELECT * FROM registration_data";    
	            $result1=mysqli_query($conn,$sql_query1);
                $row1=mysqli_fetch_array($result1);
                if(isset($_POST['submit']))
                {
                   $sql_query1="SELECT * FROM registration_data";    
	                $result1=mysqli_query($conn,$sql_query1);
                    while($row1=mysqli_fetch_assoc($result1))
                    {
                        ?>
                        <tr class='display'>
                                     <td><?php echo $row1['uids']; ?></td>
                                    <td><?php echo $row1['certificatenumber']; ?></td>
                                    <td>
                                    <a href="down.php?submission=<?php echo $row1['castefile'] ?>"target="_blank">download file</a>        
                                  </td>
                                </tr>
                        <?php
                    }	
                }
?>
          </table>
        </div>
        <button>
      <a href="scview.php">APPROVAL</a>
        </button>
      </form></div>

</center> 
</section>
<div><br><br><br></div>
</body>
</html> 