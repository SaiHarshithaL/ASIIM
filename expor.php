<?php
         session_start();
         if(!isset($_SESSION['email']))
    {
        header('location: multilogin.html');
    
    }
    ?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport"content="with=device-width,initialscale=1.0">
   <link rel="stylesheet" href="admindashstyle.css">
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
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
<style>
    .header {
    position:fixed;
	width: 100%;
	height: 70px;
	background-color: #cccccc;
	text-align : center;
	top: 0;
	  }
    ::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background: white; 
}
::-webkit-scrollbar-thumb {
  background: bisque; 
}
::-webkit-scrollbar-thumb:hover {
  background: salmon; 
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
                border:5px solid darkblue;
                text-transform:uppercase;
                border-radius:20px;
                letter-spacing:2px;
                cursor: pointer;
                transition-duration:0.4s;
            }
            input[type=submit]:hover,input[type=reset]:hover
            {
                box-shadow:0 5px 30px 0 violet inset,0 5px 30px 0 violet,
                0 5px 30px 0 violet inset,0 5px 30px 0 violet; 
                border:5px solid violet;
            }
   #id{
    background-color: black ;
   }
   .foot{
    position:absolute;
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
  color:#fff;
}

footer {
  text-align: center;
  padding: 3px;
  color: black;
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

    <!-- navigation-->
  <section>
    
 <div class="Nav"> 
    <nav class="navbar">
    <div class="navbar-container container">
        <input type="checkbox" name="" id="">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <ul class="menu-items">
            <li><a href="sih.html">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <h1 class="logo">ASIIM</h1>
    </div>
</nav>
</div>
</section>
<section class="img">
    <iframe src="expleftdash.html" width="20%" height="800px" align="left" scrolling="yes">
      </iframe>
      <iframe name="main_page" width="80%" height="800px" align="right" src="exprightdash.php" scrolling="yes">
           
        </iframe>
   </section> 
   
</body>
</html> 