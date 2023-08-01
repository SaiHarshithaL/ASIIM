
<?php
session_start();
$r=$_SESSION['rej'];
$a=$_SESSION['app'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
require_once 'vendor/autoload.php';
require_once 'class-db.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$servername="localhost";
$usernames="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$usernames,$password,$database_name);
if(!$conn){
die("connection failed:".mysqli_connect_error());
    }
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
if($a=='approved' && $r==''){
$sql_query="SELECT * FROM cap";
$query = mysqli_query($conn,$sql_query);
$address = array();
$i=0;
while($row = mysqli_fetch_assoc($query)){
  $address[] = $row[ 'username' ];
  $i=$i+1;
}
$mail->setFrom($email, 'ASIIM');
$mail->isHTML(true);
$i=0;
foreach ($address as $gui) {
    $mail->addAddress($gui);
    $mail->Body="<b>hii  u r selected "." login link"."<br> https://web.whatsapp.com";
    $mail->AddCC =($gui);
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent succesfully!';
        $mail->addAddress="";
        $mail->ClearAddresses(); 
        $mail->ClearCCs();
        $mail->ClearBCCs();
    }
    $i+=1;
    $mail->body="";
}
}
 if($r='rejected' && $a='')
 {
    $sql_query="SELECT * FROM car";
$query = mysqli_query($conn,$sql_query);
$address1 = array();
$i=0;
while($row = mysqli_fetch_assoc($query)){
  $address1[] = $row[ 'username' ];
  $i=$i+1;
}
$mail->setFrom($email, 'ASIIM');
$mail->isHTML(true);
$i=0;
foreach ($address1 as $gui) {
    $mail->addAddress($gui);
    $mail->Body="<b>hii  u r selected "." login link"."<br> https://web.whatsapp.com";
    $mail->AddCC =($gui);
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent succesfully!';
        $mail->addAddress="";
        $mail->ClearAddresses(); 
        $mail->ClearCCs();
        $mail->ClearBCCs();
    }
    $i+=1;
    $mail->body="";
 }
}

