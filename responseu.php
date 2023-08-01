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
                height: 440px;
                padding: 30px;
                box-shadow: 5px;
                border-radius: 20px;
                background:rgba(255, 190, 242, 0.6);
                
            }
            input[type=submit]
            {
                height: 50px;
                width: 130px;
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius:20px;
                background-color: rgba(84, 156, 182, 0.6);
            }
            input[type=submit]:hover,input[type=reset]:hover
            {
                background-color: rgb(237, 146, 27);
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
      <center><form action="userstore.php" method="post"  enctype="multipart/form-data">
        <table>
            <caption><h2><bold>IDEA PROTOTYPE SUBMISSSION</bold></h2></caption>
            <tr>
              <td><label for="title">USERNAME</label>
                <td colspan="2"><input type="text" name="username" id="username" placeholder="username" required></td>
              </tr>
            <tr>
                <td><label for="title">TITLE OF IDEA</label>
                <td colspan="2"><input type="text" name="title" id="title" placeholder="title" required></td>
            </tr>
            <tr>
                <td><label for="theme">THEME OF IDEA</label>
               <td colspan="2"><br>
                   <select id="theme" name="theme" id="theme" required>
                    <option value="1">select your theme</option>
                <option value="AG">Agriculture,FoodTech & Rural Development</option>
                <option value="BC">Blockchain & Cybersecurity</option>
                <option value="CG">Clean & Green Technology</option>
                <option value="FS">Fitness & Sports</option>
                <option value="HC">Heritage & Culture</option>
                <option value="MBH">MedTech/BioTech/HealthTech</option>
                <option value="M">Miscellaneous</option>
                <option value="RS">Rnewable/Sustainable Energy</option>
                <option value="RD">Robotics and Drones</option>
                <option value="SA">Smart Automation</option>
                <option value="SV">Smart Vehicles</option>
                <option value="TT">Travel & Tourism</option>
                <option value="TS">Transportation & Logistics</option>
                <option value="DS">Disaster Management</option>
                <option value="SE">Smart Education</option>
              </select></td>
            </tr>
            <tr>
                <td><label for="descs">IDEA DESCRIPTION</label></td>
                <td colspan="2"><textarea id="descs" name="descs" rows="10" cols="50" required></textarea><td>
            </tr>
            <tr>
                <td><label for="submission">IDEA SUBMISSSION</label></td>
                <td colspan="2"><input type="file" name="submission"  id="submission" required>
            </tr>

            <tr>
                <td colsapn="3"></td>
                <td><br><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form></div>
</center>  
    </body>
</html>