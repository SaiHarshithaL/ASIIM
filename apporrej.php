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
                font-family:Ink Free;
                font-weight:400;
                border:3px solid #ffa089;
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
                border:3px solid #ffa089;
               
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
}
.display{
  color: white;text-shadow: 2px 2px 4px #000000;
border: solid 2px darkblue;
background-color:violet;
}
th,td{
  padding: 15px;
}
a{
  text-decoration: none;
  color:pink;
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
</style>
</head>
<body>
<section class="background-img">
<div ><br><br><br></div>
    <section>
    <div id="idea" style="overflow-x:auto;">
      <center><form method="post" action="" name="expertsview" enctype="multipart/form-data">
        <table>
           <tr>
            <td colspan="2"><br><center><p style="color:orangered">Here you can send mails to all users about their status<br>
            Make sure that all the participant's certificates are verified.</p></center></td>
            </tr> 
            <tr>
                <td><center><input type="submit" value="approve" name="approve"><br><br><br><br><br><br></center></td>
                <td><center><input type="submit" value="reject" name="reject"><br><br><br><br><br><br></center></td>
            </tr>
        </table>
        
      </div>
</center> 
</section>

<?php
$conn=mysqli_connect("localhost","root","","sih");
if(!$conn){
die("connection failed:".mysqli_connect_error());
      }
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
require_once 'vendor/autoload.php';
require_once 'class-db.php';
 
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
 
$mail->SMTPAuth = true;
$mail->AuthType = 'XOAUTH2';
 
$email = 'sihfeistycoders@gmail.com'; // the email used to register google app
$clientId = '954590406578-r72gsfih5ofgtch8kjk3jc0jov969f2k.apps.googleusercontent.com';
$clientSecret = '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';
 
$db = new DB();
$refreshToken = $db->get_refersh_token();
 
//Create a new OAuth2 provider instance
$provider = new Google(
    [
        'clientId' => $clientId,
        'clientSecret' => $clientSecret,
    ]
);
 
//Pass the OAuth provider instance to PHPMailer
$mail->setOAuth(
    new OAuth(
        [
            'provider' => $provider,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'refreshToken' => $refreshToken,
            'userName' => $email,
        ]
    )
);
$sql_query="SELECT * FROM cap";
$sql_query1="SELECT * FROM car";
$sql_query2="SELECT * FROM dumform";
$sql_query3="SELECT * FROM registration_data";
$query = mysqli_query($conn,$sql_query);
$query1 = mysqli_query($conn,$sql_query1);
$query2 = mysqli_query($conn,$sql_query2);
$query3 = mysqli_query($conn,$sql_query3);
$row = mysqli_num_rows($query);//number of rows in cap
$row1 = mysqli_num_rows($query1);//number of rows in car
$row2 = mysqli_num_rows($query2);//number of rows in dumform = car+cap
$row3 = mysqli_num_rows($query3);//number of rows in registration_data it should be zero 
if($row3==0){
  if(isset($_POST['approve']))
  {
$address = array();
while($row = mysqli_fetch_assoc($query)){
  $address[] = $row[ 'username' ];
}
$mail->setFrom($email, 'ASIIM');


$mail->isHTML(true);
$i=0;
foreach ($address as $gui) {
    $mail->addAddress($gui);
    $output='Hi! '.$gui.'We have verified your caste certificate and it is conformed that you really belong to sc category
            so you are eligible to participate in this program'.'
    For more details staytuned with ASIIM.'.'<br> Your login credentials are:<br>username is '.$gui.' Your password to log in is 12345.Dont forget that you have to select user type as '.'<b>user</b>'.
    'To change you password click on <p><a href="http://localhost/sih/newpassword.html">change password</a>';
			$mail->Body = $output;
    $mail->AddCC =($gui);
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '<p ><center>Message sent to  '.$gui.'!</center></p>';
        $mail->addAddress="";
        $mail->ClearAddresses(); 
        $mail->ClearCCs();
        $mail->ClearBCCs();
        $output='';
    }
    $i+=1;
    $mail->body="";
}
}
if(isset($_POST['reject']))
 {
$address1 = array();
while($row = mysqli_fetch_assoc($query1)){
  $address1[] = $row[ 'username' ];
}
$mail->setFrom($email, 'ASIIM');
$mail->isHTML(true);
$i=0;
foreach ($address1 as $gui) {
    $mail->addAddress($gui);
    $output='Hi!'.$gui.'The caste certificate provided by you is not genuine so you are not eligible to take part of this program any more. <br>Any issues contact through mail sihfeistycoders@gmail.com';
			$mail->Body = $output;
    $mail->AddCC =($gui);
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent to  '.$gui.'!';
        $mail->addAddress="";
        $mail->ClearAddresses(); 
        $mail->ClearCCs();
        $mail->ClearBCCs();
        $output='';
    }
    $i+=1;
    $mail->body="";
 }
}
}
else{
    echo "<h1 style='color:black;'><center>First verify all the documents only then you can send mails to all the users</center></h1>";
}
?>
</body>
</html> 