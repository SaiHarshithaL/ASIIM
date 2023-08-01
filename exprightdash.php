<?php
session_start();
$uname=$_SESSION['email'];
?>
<html>
    <head>
        <title>D A S H B O A R D   -->   S I H</title>
        <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
        <link rel="stylesheet" href="admindashstyle.css">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>   
        <style>
            table{
                width:100% ; border-spacing: 7px;
            }
            td,th,caption{
                font-family:Comic Sans MS;;
            }
            td{
                text-align:center;
            }
            th{
                color:crimson;
            }
            table,td,th{
                border-collapse: collapse;
                border:2px solid cornflowerblue;
                border-radius:5%
            }
            caption{
                color:darksalmon;
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
         <div class="container"> 
            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <h1>&nbsp;&nbsp;<?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $database_name="sih";
                            $conn=mysqli_connect($servername,$username,$password,$database_name);
                            if(!$conn){
                                die("connection failed:".mysqli_connect_error());
                            }
                            $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                                $sql="SELECT * from lap where exmail='$uname'";
                            if($result1 = mysqli_query($conn, $sql)) {
                                $rowcount = mysqli_num_rows($result1);
                                echo $rowcount.'   ';?><iconify-icon inline icon="bi:person-check-fill" style="color: rgb(0,0,255);" width="32" height="32"></iconify-icon><?php
                             }
                             
                                mysqli_close($conn);
                            ?>
                
                            <h5>Level-1 Approved</h5>
                        </div>
                        <div class="iconcase">
                            <img src="users.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>&nbsp;&nbsp;<?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $database_name="sih";
                            $conn=mysqli_connect($servername,$username,$password,$database_name);
                            if(!$conn){
                                die("connection failed:".mysqli_connect_error());
                            }
                            $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                                $sql="SELECT * from lar where exmail='$uname'";
                            if($result1 = mysqli_query($conn, $sql)) {
                                $rowcount = mysqli_num_rows($result1);
                                echo $rowcount.'   ';?><iconify-icon inline icon="bi:person-x-fill" style="color:crimson" width="32" height="32"></iconify-icon><?php
                            }
                                mysqli_close($conn);
                            ?>
                            </h1>
                            <h5>Level-1 REJECTED</h5>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>&nbsp;&nbsp;<?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $database_name="sih";
                            $conn=mysqli_connect($servername,$username,$password,$database_name);
                            if(!$conn){
                                die("connection failed:".mysqli_connect_error());
                            }
                            $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                                $sql="SELECT * from lap where exmail='$uname' and flag=1";
                            if($result1 = mysqli_query($conn, $sql)) {
                                $rowcount = mysqli_num_rows($result1);
                                 echo $rowcount.'   ';?><iconify-icon inline icon="bi:person-check-fill" style="color: rgb(0,0,255);" width="32" height="32"></iconify-icon><?php
                               
                             }
                                mysqli_close($conn);
                            ?>
                            </h1>
                            <h5>Level-2 Approved</h5>
                        </div>
                        <div class="iconcase">
                            <img src="users.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>&nbsp;&nbsp;<?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $database_name="sih";
                            $conn=mysqli_connect($servername,$username,$password,$database_name);
                            if(!$conn){
                                die("connection failed:".mysqli_connect_error());
                            }
                            $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                                $sql="SELECT * from lap where exmail='$uname' and flag=0";
                            if($result1 = mysqli_query($conn, $sql)) {
                                $rowcount = mysqli_num_rows($result1);
                                echo $rowcount.'   ';?><iconify-icon inline icon="bi:person-x-fill" style="color:crimson" width="32" height="32"></iconify-icon><?php
                             }
                                mysqli_close($conn);
                            ?>
                            </h1>
                            <h5>Level-2 REJECTED</h5>
                        </div>
                        <div class="iconcase">
                            <img src="users.png" alt="">
                        </div>
                    </div>
                  <div>  <br><br><br><br><br><br> </div>
        <table class="details" >
                              <caption>RECENTLY APPROVED CANDIDATE IN LEVEL-1</caption>
        <tr>
            <th >USERNAME</th>
            <th >STATUS</th> 
            <th >DETAILS</th>
        </tr>
        <?php
            $servername="localhost";
            $usernam="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$usernam,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                $sql_query5="SELECT * from lap where exmail='$uname'";
                $r5=mysqli_query($conn,$sql_query5);
                $row5=mysqli_fetch_array($r5);
                if($row5!=null){
                $sql_query2="SELECT username FROM lap where theme='$theme' and exmail='$uname' ORDER BY uids DESC LIMIT 1";  
	            $r=mysqli_query($conn,$sql_query2);
                $row3=mysqli_fetch_array($r);
                $x=$row3["username"];
                $sql_query3="SELECT submission from dumprototype where username='$x'";
	            $r1=mysqli_query($conn,$sql_query3);
                $row4=mysqli_fetch_array($r1);
                
                
                      ?>
                                <tr class="display">
                                     <td><?php echo $row3['username']; ?></td>
                                    <td ><?php echo 'accepted'; ?></td>
                                    <td>
                                    <a href="files.pdf/<?php echo $row4['submission']?>" target="_blank" style='style=color: white;text-shadow: 2px 2px 4px #ffcc66;'>
                                        view
                                      </a>     
                                  </td>
                                </tr>
                        <?php
                }
                else{
                    ?>
                    <tr class="display">
                                     <td><?php echo "none" ?></td>
                                    <td ><?php echo "none"; ?></td>
                                    <td>
                                    <?php echo "none"; ?>
                                  </td>
                                </tr>
                                <?php
                }
                   
?>
        </table>

        <table class="details"  >
                              <caption><br>RECENTLY REJECTED CANDIDATE IN LEVEL-1<br></caption>
        <tr>
            <th >USERNAME</th>
            <th >STATUS</th> 
            <th >DETAILS</th>
        </tr>
        <?php
            $servername="localhost";
            $usernam="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$usernam,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                $sql_query5="SELECT * from lar where exmail='$uname'";
                $r5=mysqli_query($conn,$sql_query5);
                $row5=mysqli_fetch_array($r5);
                if($row5!=null){
                $sql_query2="SELECT username FROM lar where theme='$theme' and exmail='$uname' ORDER BY uids DESC LIMIT 1";  
	            $r=mysqli_query($conn,$sql_query2);
                $row3=mysqli_fetch_array($r);
                $x=$row3["username"];
                $sql_query3="SELECT submission from dumprototype where username='$x'";
	            $r1=mysqli_query($conn,$sql_query3);
                $row4=mysqli_fetch_array($r1);
                
                
                      ?>
                                <tr class="display">
                                     <td><?php echo $row3['username']; ?></td>
                                    <td ><?php echo 'rejected'; ?></td>
                                    <td>
                                    <a href="files.pdf/<?php echo $row4['submission']?>" target="_blank" style='style=color: white;text-shadow: 2px 2px 4px #ffcc66;'>
                                        view
                                      </a>     
                                  </td>
                                </tr>
                        <?php
                }
                else{
                    ?>
                    <tr class="display">
                                     <td><?php echo "none" ?></td>
                                    <td ><?php echo "none"; ?></td>
                                    <td>
                                    <?php echo "none"; ?>
                                  </td>
                                </tr>
                                <?php
                }
                   
?>
        </table>
        
        <table class="details" >
                              <caption ><br>RECENTLY APPROVED CANDIDATE IN LEVEL-2<br></caption>
        <tr>
            <th >USERNAME</th>
            <th >STATUS</th> 
            <th >DETAILS</th>
        </tr>
        <?php
            $servername="localhost";
            $usernam="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$usernam,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                $sql_query5="SELECT * from lap where exmail='$uname' and flag=1";
                $r5=mysqli_query($conn,$sql_query5);
                $row5=mysqli_fetch_array($r5);
                if($row5!=null){
                $sql_query2="SELECT username FROM lap where theme='$theme' and exmail='$uname' and flag=1  ORDER BY uids DESC LIMIT 1";  
	            $r=mysqli_query($conn,$sql_query2);
                $row3=mysqli_fetch_array($r);
                $x=$row3["username"];
                $sql_query3="SELECT submission from lap where username='$x'";
	            $r1=mysqli_query($conn,$sql_query3);
                $row4=mysqli_fetch_array($r1);
                
                
                      ?>
                                <tr class="display" >
                                     <td><?php echo $row3['username']; ?></td>
                                    <td ><?php echo 'approved'; ?></td>
                                    <td>
                                    <a href="videos./<?php echo $row4['submission']?>" target="_blank" style='style=color: white;text-shadow: 2px 2px 4px #ffcc66;'>
                                        view
                                      </a>     
                                  </td>
                                </tr>
                        <?php
                }
                else{
                    ?>
                    <tr class="display">
                                     <td><?php echo "none" ?></td>
                                    <td ><?php echo "none"; ?></td>
                                    <td>
                                    <?php echo "none"; ?>
                                  </td>
                                </tr>
                                <?php
                }
                   
?>
        </table>
        <table class="details" >
                              <caption><br>RECENTLY REJECTED CANDIDATE IN LEVEL-2<br></caption>
        <tr>
            <th >USERNAME</th>
            <th >STATUS</th> 
            <th >DETAILS</th>
        </tr>
        <?php
            $servername="localhost";
            $usernam="root";
            $password="";
            $database_name="sih";
            $conn=mysqli_connect($servername,$usernam,$password,$database_name);
            if(!$conn){
          die("connection failed:".mysqli_connect_error());
                }
                $sql1="SELECT theme from expinfo where username='$uname'";
                            $result = mysqli_query($conn, $sql1);
                            $s=mysqli_fetch_array($result);
                            $theme=$s['theme'];
                $sql_query5="SELECT * from lap where exmail='$uname' and flag=0";
                $r5=mysqli_query($conn,$sql_query5);
                $row5=mysqli_fetch_array($r5);
                if($row5!=null){
                $sql_query2="SELECT username FROM lap where theme='$theme' and exmail='$uname' and flag=0 ORDER BY uids DESC LIMIT 1";  
	            $r=mysqli_query($conn,$sql_query2);
                $row3=mysqli_fetch_array($r);
                $x=$row3["username"];
                $sql_query3="SELECT submission from lap where username='$x'";
	            $r1=mysqli_query($conn,$sql_query3);
                $row4=mysqli_fetch_array($r1);
                
                
                      ?>
                                <tr class="display">
                                     <td><?php echo $row3['username']; ?></td>
                                    <td ><?php echo 'rejected'; ?></td>
                                    <td>
                                    <a href="videos./<?php echo $row4['submission']?>" target="_blank" style='style=color: white;text-shadow: 2px 2px 4px #ffcc66;'>
                                        view
                                      </a>     
                                  </td>
                                </tr>
                        <?php
                }
                else{
                    ?>
                    <tr class="display">
                                     <td><?php echo "none" ?></td>
                                    <td ><?php echo "none"; ?></td>
                                    <td>
                                    <?php echo "none"; ?>
                                  </td>
                                </tr>
                                <?php
                }
                   
?>
        </table>
        <br><br>
        </div>
                    
                </div>
                </div>
        </div>
        </body>
    </html>