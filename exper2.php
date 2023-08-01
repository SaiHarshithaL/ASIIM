<?php
session_start();
$uname=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport"content="with=device-width,initialscale=1.0">
   <link rel="stylesheet" href="admindashstyle.css">
    <title>ASIIM</title>
<style>
  button{
  background-color: pink;
  height:3em;
  width:fit-content;
  border-radius: 25%;
}
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
            <caption class="glow"><h2><bold>IDEA APPROVAL</bold></h2></caption>
           
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
                echo $row1['theme'];
                $_SESSION['theme']=$theme;
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
              <th>THEME</td>
              <th>USERNAME</td>
              <th>DOWNLOAD</td>
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
                $sql_query1="SELECT * FROM lap";    
	            $result1=mysqli_query($conn,$sql_query1);
                $row1=mysqli_fetch_array($result1);
                if(isset($_POST['search']))
                {
                   $sql_query1="SELECT * FROM lap where theme='$theme' and flag=2";
	                $result1=mysqli_query($conn,$sql_query1);
                    while($row1=mysqli_fetch_assoc($result1))
                    {
                        ?>
                                <tr class="display">
                                     <td><?php echo $row1['uids']; ?></td>
                                    <td ><?php echo $row1['theme']; ?></td>
                                    <td ><?php echo $row1['username']; ?></td>
                                    <td>
                                    <a href="download.php?submission=<?php echo $row1['submission'] ?>"target="_blank"><?php echo $row1['submission'] ?></a>        
                                  </td>

                        <?php
                    }
                  }
?>
          </table><br><br>
          <button><center><a href="exper2user.php">for approval</center></button>
        </div>
      </form></div>
</center>  
</section>
</body>
</html> 