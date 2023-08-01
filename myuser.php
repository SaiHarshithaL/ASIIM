<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database_name="sih";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$usernam=$_SESSION['email'];
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
else{
	$sql_query="SELECT * FROM dumform where mail='$usernam'";
  $sql_query1="SELECT * FROM dumprototype where username='$usernam'";
  $sql_query2="SELECT * FROM lap where username='$usernam'  and flag!=-1";
    $result=mysqli_query($conn,$sql_query);
    while($row1=mysqli_fetch_assoc($result))
                    {
                        ?>
                    <html>
                      <head>
                      <script type="text/javascript">  
                          function display(){
                            var f1=document.getElementById('file1');
                            f1.style.display = 'block';
                          }
                          function hide(){
                            var f1=document.getElementById('file1');
                            f1.style.display = 'none';
                          }
                          function display1(){
                            var f2=document.getElementById('file2');
                            f2.style.display = 'block';
                          }
                          function hide1(){
                            var f2=document.getElementById('file2');
                            f2.style.display = 'none';
                          }
                          function display2(){
                            var f3=document.getElementById('file3');
                            f3.style.display = 'block';
                          }
                          function hide2(){
                            var f3=document.getElementById('file3');
                            f3.style.display = 'none';
                          }
                      </script>
                      <style>
                        td{
                          font-family:Georgia, 'Times New Roman', Times, serif;
                        }
                      </style>
                      </head>
                    <body >
                    <center><table>
                    <tr>
                          <td style='text-align: right;color:blue;font-size:1.25em;'>NAME:</t>
                          <td style='style=color: white;font-size:1.5em;'><?php echo $row1['firstname'];?></td>
                    </tr>
                    <tr>
                          <td style='text-align: right;color:blue;font-size:1.25em;'>MAIL:</td>
                          <td style='style=color: white;font-size:1.25em;'><?php echo $row1['mail'];?></td>
                    </tr>
                    <tr>
                          <td style='text-align: right;color:blue;font-size:1.25em;'>CERTIFICATENUMBER:</td>
                          <td style='style=color: white;font-size:1.25em;'><?php echo $row1['certificatenumber'];?></td>
                    </tr>
                    <tr>
                        <td style='text-align: right;color:blue;font-size:1.25em;'>CASTE FILE:</td>
                          <td><button id='hello' onclick='display()'>
                              view
                              </button>
                              <button id='hello' onclick='hide()'>
                              hide
                              </button>
                          </td>
                      </tr>
                      <tr >
                      <td colspan='2' id='name111'><center>
                    <iframe id='file1' src="certificates.pdf/<?php echo $row1['castefile']?>" style="display: none;width:900px; height:800px;"></iframe></center>
                    </td>
                        </tr>
                        <?php
                    }
                    }
                    $result1=mysqli_query($conn,$sql_query1);
                    while($row2=mysqli_fetch_assoc($result1))
                    {
                        ?>
                         <tr>
                          <td style='text-align: right;color:blue;font-size:1.25em;'>TITLE:</td>
                          <td style='style=color: white;font-size:1.25em;'><?php echo $row2['title'];?></td>
                    </tr>
                    <tr>
                          <td style='text-align: right;color:blue;font-size:1.25em;'>THEME:</td>
                          <td style='style=color: white;font-size:1.25em;'><?php echo $row2['theme'];?></td>
                    </tr>
                    <tr>
                          <td style='text-align: right;color:blue;font-size:1.25em;'>DESCRIPTION:</td>
                          <td style='style=color: white;font-size:1.25em;'><?php echo $row2['descs'];?></td>
                    </tr>
                    <tr>
                        <td style='text-align: right;color:blue;font-size:1.25em;'>IDEA PROTOTYPE:</td>
                          <td><button id='hello1' onclick='display1()'>
                              view
                              </button>
                              <button id='hello1' onclick='hide1()'>
                              hide
                              </button>
                          </td>
                      </tr>
                      <tr >
                      <td colspan='2'><center>
                    <iframe id='file2' src="files.pdf/<?php echo $row2['submission']?>" style="display: none;width:900px; height:800px;"></iframe></center>
                    </td>
                    </tr>
                    <?php
                    }
                    $result2=mysqli_query($conn,$sql_query2);
                    while($row3=mysqli_fetch_assoc($result2))
                    {
                        ?>
                    <tr>
                        <td style='text-align: right;color:blue;font-size:1.25em;'>VIDEO:</td>
                          <td><button id='hello1' onclick='display2()'>
                              view
                              </button>
                              <button id='hello1' onclick='hide2()'>
                              hide
                              </button>
                          </td>
                      </tr>
                      <tr >
                      <td colspan='2'><center>
                    <iframe id='file3' src="videos.mp4/<?php echo $row3['submission']?>" style="display:none;width:900px; height:450px;"></iframe></td>
                    </tr>
                    
                    </table>
                    </center>
                    </body>
                    </html>
                        <?php
                    }
	mysqli_close($conn);
?>
<html>
  <head>
    <style>
      ::-webkit-scrollbar
{
    width:12px;
}
::-webkit-scrollbar-thumb{
    background:linear-gradient(#000,#3ab09e);
    border-radius:6px;
}
input[type=submit]:hover,input[type=reset]:hover,button:hover
            {
                box-shadow:0 5px 30px 0 violet inset,0 5px 30px 0 violet,
                0 5px 30px 0 violet inset,0 5px 30px 0 violet; 
                border:5px solid violet;
               
            }
button{
  background-color: pink;
  height:2em;
  width:fit-content;
  border-radius: 25%;
}
button a{
  color:blue;
  font-size:medium;
  font-family:cursive;
}
    </style>
  </head>
</html>