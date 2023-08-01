<?php
session_start();
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
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$sql_query="SELECT * FROM multilogin WHERE username='".$username."'";
  $result=mysqli_query($conn,$sql_query);
	$row=mysqli_fetch_array($result);
	if($row)
	{
		if($row['username']==$username)
		{
			$mail->setFrom($email, 'ASIIM');
			$mail->addAddress($username);
			$mail->isHTML(true);
      $_SESSION['user']=$username;
			$output='<p>Please click on the following link to reset your password.</p>';
                            //replace the site url
                            $output.='<p><a href="http://localhost/newpassword.html">change password</a>';
			$mail->Body = 'Hi'.$output;
	    }	
    }
	else{
    }
}
?>
 <html>
            <head>
            <style>
             body
            {
                background:url("bg1.webp");
                background-size:100%;
                height:100%;
                width: 100%;
            }
            .input {
                padding: 10px 20px;
                border-radius: 5px;
                border: 1px solid #0085ca;
                outline: none;
                background-color: #fbceb1;
            }
            .input:focus + .label, .input:valid + .label {
                top: 135px;
                font-size: 20px;
                color: #ffa089;
                left: 80px
            }
            .label {
                position: absolute;
                left: 100px;
                top: 168px;
                color: black;
                pointer-events: none;
                display: flex;
                transition: .2s ease;
            }
          .label::before {
          transition: all .2s ease;
          position: absolute;
          height: 50%;
          width: 100%;
          content: '';
          }
          .label::after {
           transition: all .2s ease;
           position: absolute;
           height: 50%;
           width: 100%;
           content: '';
           top: 50%;
         }
         span {
         position: relative;
         z-index: 99;
         }
            section {
                width: 100%;
                height: 100vh;
            }

            ::-webkit-scrollbar {
                width: 12px;
            }

            ::-webkit-scrollbar-thumb {
                background: linear-gradient(#000,#3ab09e);
                border-radius: 6px;
            }
         .input:focus + .label::after {
          background: #000000;
         }

         .input:focus + .label::before {
          background: #000000;
         }
        
            h1 span{
                 display: inline-block;
            }
            h1 span:first-child{
                animation: pop 1s infinite alternate;
            }
            @keyframes pop{
             0%{
                transform: scale(1.5);
             }
             100%{
                transform: scale(1);
             }
            }
            #idea{
                position: absolute;
                top: 150px;
                left: 450px;
                width: 300px;
                
                padding: 30px;
                box-shadow: 5px;
                border-radius: 30px;
               background:rgba(255, 190, 242, 0.6);
            }
            input[type=text],input[type=password] {
            width: 100%;
            size:150em;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid rgb(91, 88, 88);
            }
           
            button a{
  color:blue;
  font-size:medium;
  font-family:cursive;
}
            button{
  background-color: pink;
  height:3em;
  width:fit-content;
  border-radius: 25%;
}
            button:hover {
                box-shadow: 0 5px 30px 0 #88d8c0 inset,0 5px 30px 0 #88d8c0, 0 5px 30px 0 #88d8c0 inset,0 5px 30px 0 #88d8c0;
                /* <!-- background-color: aquamarine; --> */
            }

     </style>  
            </head>
            <body>
            
          <div id="idea">
            <?php
            if ($mail->send()) {
                ?>
            <b> ASIIM </b>
            <center><h3 style="color:Green">Forgot Password</h3></center>
            <h4 style="font-family:poppins">
If provided email is a registered email ID on ASIIM, 
you will receive an email with further instructions on how to reset your password.
 In case you didn't receive this email, you need to create a new account <a href='http://localhost/hello.html'>here</a>
 </h4>
           <center> <button><a href=http://localhost/multilogin.html>Login</button></center>
            <?php
			}
            ?>
    </div>
    </body>
        </html>
        