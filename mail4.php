<?php
session_start();
$x=$_SESSION['notsc'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
require_once 'vendor/autoload.php';
require_once 'class-db.php';
 
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
 
$mail->SMTPAuth = true;
$mail->AuthType = 'XOAUTH2';
 
$email = 'sihfeistycoders@gmail.com'; // the email used to register google app
$clientId = '954590406578-r72gsfih5ofgtch8kjk3jc0jov969f2k.apps.googleusercontent.com';
$clientSecret = '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';
 
$db = new DB();
$refreshToken = $db->get_refersh_token();

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
 
$servername="localhost";
$username="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
	$sql_query="SELECT * FROM dumform WHERE mail='".$x."'";
    $result=mysqli_query($conn,$sql_query);
	$row=mysqli_fetch_array($result);
	if($row)
	{
		if($row['mail']==$x)
		{
			$mail->setFrom($email, 'ASIIM');
			$mail->addAddress($x);
			$mail->isHTML(true);
			$output='Hi!'.$row['firstname'].'The caste certificate provided by you is not genuine so you are not eligible to take part of this program any more';
                            //replace the site url
                            $output.='Any issues contact through mail sihfeistycoders@gmail.com';
			$mail->Body = $output;
	    }	
		if($mail->send()){
			echo "Sutudent have been rejected succesfully";
		}
    }
	else{
    }
?>