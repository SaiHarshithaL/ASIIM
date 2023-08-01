<?php
session_start();
$uname=$_SESSION['email'];
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
input[type=submit]
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
            input[type=submit]:hover,input[type=reset]:hover,button:hover
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
button{
  background-color: pink;
  height:3em;
  width:fit-content;
  border-radius:25%;
}
button a{
  color:blue;
  font-size:medium;
  font-family:cursive;
}
::-webkit-scrollbar
{
    width:12px;
}
::-webkit-scrollbar-thumb{
    background:linear-gradient(#000,pink);
    border-radius:6px;
}
</style>
</head>
<body>
<!--contentt form-->
<section >
<div ><br><br><br></div>
    <section>
    <div id="idea" style="overflow-x:auto;">
      <center><form method="post" action="" name="expertsview" enctype="multipart/form-data">
        <table>
            <caption class="glow"><h2><bold>IDEA APPROVAL<br></bold></h2></caption>
           
            <tr>
              <td><label for="theme"><h2 style="color:cornflowerblue;">THEME OF IDEA</h2></label>
             <td colspan="2"><h2 style="color:orange; text-shadow:2px 2px violet;">
             <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$username,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql_query1="SELECT theme FROM expinfo where username='$uname'";    
	            $result1=mysqli_query($conn,$sql_query1);
              while($row1=mysqli_fetch_assoc($result1))
              {
                $theme=$row1['theme'];
                echo $theme;
                $_SESSION['theme']=$theme;
                $_SESSION['username']=$uname;
              }
              ?>
              </h2>
                </td>
          </tr>
           <br>
           <br>
        </table>
        <br>
           <br>
        <center>
        <input type="submit" type="submit" value="search" name="search">
</center>
        
      <div>
        <div>
          <table border="1" style="border-collapse:collapse; border-spacing:30px">
            <tr class="headi">
              <th>USERID</th>
              <th>USERNAME</td>
              <th>TITLE</td>
              <th>THEME</td>
              <th>DESCRIPTION</td>
              <th>SUBMISSION</td>
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
                $sql_query1="SELECT * FROM prototype";    
	            $result1=mysqli_query($conn,$sql_query1);
                $row1=mysqli_fetch_array($result1);
                if(isset($_POST['search']))
                {
                   $sql_query1="SELECT * FROM prototype where theme='$theme'";
                   $sql_query2="SELECT * FROM expinfo where theme='$theme'";
	                $result1=mysqli_query($conn,$sql_query1);
                  $result2=mysqli_query($conn,$sql_query2);
                    while($row1=mysqli_fetch_assoc($result1))
                    {
                        ?>
                                <tr class="display">
                                     <td><?php echo $row1['uids']; ?></td>
                                    <td ><?php echo $row1['username']; ?></td>
                                    <td><?php echo $row1['title']; ?></td>
                                    <td><?php echo $row1['theme']; ?></td>
                                    <td><?php echo $row1['descs']; ?></td>
                                    <td>
                                    <a href="downloads.php?submission=<?php echo $row1['submission'] ?>"target="_blank">download file</a>        
                                  </td>
                                </tr>
                        <?php

                    }
                  }
   
?>
          </table>
          <br><br> <button><center><a href="expert_userview.php">for approval</center></button>
        </div>
      </form></div>
</center>  
</section>

</body>
</html> 