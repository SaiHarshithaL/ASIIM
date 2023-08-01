<!DOCTYPE html>
<html>
<head>
        <title>REGISTRATION FORM</title>
       <style>
           select{
            width:fit-content;
            height:fit-content;
                outline:none;
                margin: 8px 0;
                border-bottom: 2px solid rgb(58, 106, 154);
            }
        #a{
            position: absolute;
            top: 100px;
            left: 5%;
            width: 900px;
            height:700px;
            padding: 20px;
            box-shadow: 5px;
            border-radius: 20px;
        }

           input[type=text], [input=date] {
               width: 100%;
               padding: 12px;
               border: 2px solid #8c92ac;
               background-color: antiquewhite;
               border-radius: 4px;
               resize: vertical;
           }
           input[type=submit], input[type=reset] {
               position: relative;
               text-align: center;
               height: 50px;
               width: 130px;
               padding: 10px;
               font-size: 20px;
               color: #000;
               font-family: poppins;
               font-weight: 400;
               border: 3px solid #8c92ac;
               background-color:antiquewhite;
               border-radius: 20px;
               letter-spacing: 2px;
               cursor: pointer;
               transition-duration: 0.4s;
           }
         
               input[type=submit]:hover, input[type=reset]:hover {
                   box-shadow: 0 5px 30px 0 #ffa089 inset,0 5px 30px 0 #ffa089, 0 5px 30px 0 #ffa089 inset,0 5px 30px 0 #ffa089;
                   border: 3px solid #ffa089;
               }
            input[type=email]
            {
                width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            }
            input[type="radio"]:focus {
            outline: max(2px, 0.15em) solid currentColor;
            outline-offset: max(2px, 0.15em);
            }
label {
color: orangered;
font-weight: bold;
display: block;
width: 150px;
float: left;
text-border:black;
}
label:after { content: ": " }
           caption {
               color: white;
           }
           body {
               background-size: 100%;
               height: 95%;
               width: 100%;
             
           }
            nav{
                position: fixed;
                background:rgba(220, 215, 215, 0.984);
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
                background: rgba(214, 223, 82, 0.6);
                color: rgb(109, 5, 74);
                font-size: 15px;
                font-weight: 600;
                }
                p{
                    text-decoration: none;
                color: rgb(13, 5, 102);
                font-size: 15px;
                font-weight: 600;
                }
                #theme{
  width: 80%;
  min-width: 15ch;
  max-width: 30ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;
  font-size: 1.25rem;
  cursor: pointer;
  line-height: 1.1;
  background-color:wheat;
  background-image: linear-gradient(to top, white, orange 15%);
}
           .glow {
               font-size: 50px;
               color: #1f75fe;
               text-align: center;
               animation: glow 1s ease-in-out infinite alternate;
           }

@-webkit-keyframes glow {
           from {
               text-shadow: 0 0 10px #ff9999, 0 0 20px #ff9999, 0 0 30px #ff9999, 0 0 40px #ff9999, 0 0 50px #ff9999, 0 0 60px #ff9999, 0 0 70px #ff9999;
           }

           to {
               text-shadow: 0 0 20px #ee82ee, 0 0 30px #ee82ee, 0 0 40px #ee82ee, 0 0 50px, 0 0 60px #ee82ee, 0 0 70px #ee82ee, 0 0 80px #ee82ee;
           }
}
.mail_id{
                text-transform: lowercase;
            }

     </style>   
    </head>
    <body>  
          <center>
        <div id="a">
            <form action="" method="post"  enctype="multipart/form-data">
                <table>
                    <caption><h3 class="glow">APPOINTING EXPERTS</h3></caption>
                    <tr>
                        <td><label for="username">USERNAME</label></td>
                        <td><input class="mail_id" type="text" name="username" id="username" required>
        </td>
        </tr>
        <tr>
                <td><label for="theme">THEME OF EXPERT</label>
               <td colspan="2"><br>
                   <select id="theme" name="theme" id="theme" required>
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
                        <td><br><center><input type="reset" value="CANCEL"></center></td>
                        <td align="center"><br><input type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
    </body>
<?php
$servername="localhost";
$usernam="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$usernam,$password,$database_name);
$sql_query="select * from multilogin";
$sql_query1="select * from expinfo";
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$theme=$_POST['theme'];
	$sql_query2="SELECT * from multilogin where username='$username' ";
	$sql_query3="SELECT * from expinfo where username='$username' ";
	$sql_query="INSERT INTO multilogin(username,usertype,theme)values('$username','expert','$theme')";
	$sql_query1="INSERT INTO expinfo(username,theme)values('$username','$theme')";
	$r=mysqli_query($conn,$sql_query2);
	$r1=mysqli_query($conn,$sql_query3);
    $row3=mysqli_fetch_array($r);
	$row4=mysqli_fetch_array($r1);
    if($row3==null && $row4==null){
	if(mysqli_query($conn,$sql_query))
	{
		if(mysqli_query($conn,$sql_query1)){
		if($sql_query=="select *from multilogin"){
			if($sql_query1=="select *from expinfo"){
			}
		}
		else{
			echo "<center><h3>EXPERT DETAILS UPDATED</h3></center>";
			?>
			<br>
			<?php
		}
	}
	}
	else
	{
		echo "Error: ".$sql."".mysqli_error($conn);
	}
}
else{
	echo "<center><h3>expert have been approved already</h3></center>";
}
	mysqli_close($conn);
	}
?>
</html>