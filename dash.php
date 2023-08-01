<html>
    <head>
        <title>D A S H B O A R D   -->   S I H</title>
        <link rel="stylesheet" href="admindashstyle.css">
    </head>
    <style>
        
        table {
  border-spacing: 30px;
}
::-webkit-scrollbar
{
    width:12px;

}
::-webkit-scrollbar-thumb{
    background:linear-gradient(#000,#3ab09e);
    border-radius:6px;
}
.headi{
  color:darkblue;
  border:solid 3px darkblue; 
  background-color: antiquewhite;
  padding: 15px;
}
.display{
  color: white;
  text-shadow: 2px 2px 4px #000000;
border: solid 2px darkblue;
background-color:	#32CD32;
}
</style>
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
                                $sql="SELECT * from dumform";
                            if($result = mysqli_query($conn, $sql)) {
                                $rowcount = mysqli_num_rows( $result );
                                echo $rowcount;
                             }
                                mysqli_close($conn);
                            ?>
                            </h1>
                            <h5>Users</h5>
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
                                 $sql="SELECT * from cap";
                             if($result = mysqli_query($conn, $sql)) {
                                 $rowcount = mysqli_num_rows( $result );
                                 echo $rowcount;
                              }
                                 mysqli_close($conn);        
                    ?>
                            </h1>
                            <h5>CERTIFICATES APPROVED</h5>
                        </div>
                        <div class="iconcase">
                            <img src="candidatese.png" alt="">
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
                                 $sql="SELECT * from car";
                             if($result = mysqli_query($conn, $sql)) {
                                 $rowcount = mysqli_num_rows( $result );
                                 echo $rowcount;
                              }
                                 mysqli_close($conn);        
                    ?>
                            </h1>
                            <h5>CERTIFICATES REJECTED</h5>
                        </div>
                        <div class="iconcase">
                            <img src="candidater.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>&nbsp;&nbsp;
                            <?php
                             $servername="localhost";
                             $username="root";
                             $password="";
                             $database_name="sih";
                             $conn=mysqli_connect($servername,$username,$password,$database_name);
                             if(!$conn){
                                 die("connection failed:".mysqli_connect_error());
                             }
                                 $sql="SELECT * from expinfo";
                             if($result = mysqli_query($conn, $sql)) {
                                 $rowcount = mysqli_num_rows( $result );
                                 echo $rowcount;
                              }
                                 mysqli_close($conn);        
                    ?>
                            </h1>
                            <h5>EXPERTS COUNT</h5>
                        </div>
                        <div class="iconcase">
                            <img src="certificate.png" alt="">
                        </div>
                    </div>
                </div>
                 
                <center>
                <div class="content-2" id="glass">
        <table class="details" border="1" style="width:60% ; border-spacing: 20px;">
                              <caption><center>RECENTLY APPROVED</center></caption>
        <tr>
            <th style="background-color :#FF8C00">USERNAME</th>
            <th style="background-color :#FF8C00">STATUS</th> 
            <th style="background-color :#FF8C00">DETAILS</th>
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
                $sql_query5="SELECT * from cap";
                $r5=mysqli_query($conn,$sql_query5);
                $row5=mysqli_fetch_array($r5);
                if($row5!=null){
                $sql_query2="SELECT username FROM cap ORDER BY uids DESC LIMIT 1";  
	            $r=mysqli_query($conn,$sql_query2);
                $row3=mysqli_fetch_array($r);
                $x=$row3["username"];
                $sql_query3="SELECT castefile from dumform where mail='$x'";
	            $r1=mysqli_query($conn,$sql_query3);
                $row4=mysqli_fetch_array($r1);
                $y=$row4["castefile"];
              
                      ?>
                                <tr class="display">
                                     <td><?php echo $row3['username']; ?></td>
                                    <td ><?php echo 'approved'; ?></td>
                                    <td>
                                    <a href="certificates.pdf/<?php echo $row4['castefile']?>" target="_blank" style='style=color: white;text-shadow: 2px 2px 4px #ffcc66;'>
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
<table class="details" border="1" style="width:60% ; border-spacing: 20px;">
                              <caption><center>RECENTLY REJECTED</center></caption>
                              <tr>
            <th style="background-color :#FF8C00">USERNAME</th>
            <th style="background-color :#FF8C00">STATUS</th> 
            <th style="background-color :#FF8C00">DETAILS</th>
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
                $sql_query5="SELECT * from car";
                $r5=mysqli_query($conn,$sql_query5);
                $row5=mysqli_fetch_array($r5);
                if($row5!=null){
                $sql_query2="SELECT username FROM car ORDER BY uids DESC LIMIT 1";  
	            $r=mysqli_query($conn,$sql_query2);
                $row3=mysqli_fetch_array($r);
                $x=$row3["username"];
                $sql_query3="SELECT castefile from dumform where mail='$x'";
	            $r1=mysqli_query($conn,$sql_query3);
                $row4=mysqli_fetch_array($r1);
                
                
                      ?>
                                <tr class="display">
                                     <td><?php echo $row3['username']; ?></td>
                                    <td ><?php echo 'rejected'; ?></td>
                                    <td>
                                    <a href="certificates.pdf/<?php echo $row4['castefile']?>" target="_blank" style='style=color: white;text-shadow: 2px 2px 4px #ffcc66;'>
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
        </table>
            </center>

                </div>
        </div>



       
        </body>
    </html>