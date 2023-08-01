<?php
session_start();
if(isset($_SESSION['user'])){
$usernam=$_SESSION['user'];
}
else{
  echo "session not found";
}
$servername="localhost";
$username="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['login']))
{
	$pwd1=$_POST['pwd1'];
	$pwd2=$_POST['pwd2'];
	if($pwd1==$pwd2){
		$sql_query="UPDATE multilogin set pwd='$pwd1' where username='$usernam'";
	}
	else
		$sql_query="select * from multilogin";
	if(mysqli_query($conn,$sql_query))
	{
		if($sql_query=="select * from multilogin")
		{
			?>
			<html>
            <head>
            <style>
             caption{
                color:rgb(23, 48, 96);
            }
         body
            {
                background:url("https://st4.depositphotos.com/8211188/26556/i/450/depositphotos_265562564-stock-photo-abstract-technology-and-innovation-background.jpg") no-repeat;
                background-size:100%;
                height:100%;
                width:100%;
            }
            select{
                width:100%;
                height:2em;
                outline:none;
                margin: 8px 0;
                border-bottom: 2px solid rgb(91, 88, 88);
            }
         #idea{
                position: absolute;
                top: 120px;
                left: 20%;
                width: 700px;
                padding: 30px;
                box-shadow: 5px;
                border-radius: 20px;
                background:rgba(255, 190, 242, 0.6);
                
            }
            nav{
                position: fixed;
                background:rgba(243, 187, 231,0.6);
                width: 100%;
                padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: rgb(13, 5, 102);
  font-size: 35px;
  font-weight: 600;
  margin-left: 40px;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: rgb(39, 6, 83);
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: rgba(95, 15, 114,0.6);
  color: rgb(120, 52, 115);
}
     </style>  
            </head>
            <body>
            <nav>
            <div class="menu">
              <div class="logo">
                <a href="#">ASIIM</a>
              </div>
              <ul>
                <li><a href="sih.html">HOME</a></li>
              </ul>
            </div>
          </nav>
          <div id="idea">
			<b> newpassword and confirm password are not same so please check password</b>
			<?php
		}
		else{
			?>
			<b>Password is changed so login again</b>
			<?php
		}
	}
	else
	{
		echo "Error: ".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
</div>
    </body>
        </html>
