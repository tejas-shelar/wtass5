<!doctype html>
 <html>
 <head>
 <title>p e r c e p t</title>
 <link rel="stylesheet" type="text/css" href="dancestyle1.css">
<script src="jquery-3.5.1.min.js"></script>
 </head>
 <body >
 <div class="main">
 <div class="header">
 <div class="logo">
 <img src="dance.png">
 </div>
 <div class="title">
 p e r c e p t
 </div>
 </div>
 </div>
 <div class="nav">
 <ul>
 <li><input type="button" value="HOME" id="btn1" class="active"></li>
 <li><input type="button" value="REGISTRATION" id="btn2" ></li>
 <li><input type="button" value="SHOW REGISTRATION" id="btn3"></li>
 </ul>
 </div>
 <div id="content" >
 <br><br><br><br><br><br><br><br><br><br><br>
 <center><h1>Sunburn Music Concert</h1><br><br>
 <h2>Live Love dance<h2><br>
 <div class="display1">Venue :Pune,Maharshtra</div><br>
 <div class="display2">20th September 2020</div>
 <div class="display3">10:00 AM to 4:00 PM </div><br>
 <div class="display4">Presenting you:</div>
 <div class="display5">DJ Shadow Dubai </div>
 <div class="display6">Martin Garrix </div>
 <div class="display7">The Chainsmokers </div>
</center>
 </div>
 
 <div id="content2" style="display: none;">
 <br><br>
 <center><h2 style="color:orange">Registration Form</h2></center>
 <form id="form" name="myform" action="Insert.php" method="POST" onsubmit="return validateForm()">
 <label for="Name">Name:</label><br>
 <input type="text" id="name" name="Name" size="50"><br>
 <span id="nam1"></span><br>
 
 <label for="Email">Email:</label><br>
 <input type="text" id="email" name="Email" size="50"><br>
 <span id="emal"></span><br>
 
 <label for="Mobile_no">Mobile no:</label><br>
 <input type="text" id="mnum" name="Mobile_no" size="50"><br>
 <span id="mno"></span><br>
 
 <label for="Age">Age:</label><br>
 <input type="text" id="age" name="Age" size="50"><br>
 <span id="age1"></span><br>
 
 <label for="Gender">Gender : </label>
 <input type="radio" id="male" name="Gender" value="Male">
 <label for="Gender">Male</label>
 <input type="radio" id="female" name="Gender" value="Female">
 <label for="Gender">Female</label><br>
 <span id="gen1"></span><br>
 
 <label for="Performance">Entry : </label>
 <input type="radio" id="solo" name="Performance" value="Solo">
 <label for="Performance">Solo</label>
 <input type="radio" id="group" name="Performance" value="Group">
 <label for="Performance">Couple</label><br>
 <span id="dan1"></span><br>
 
 <label for="No_of_members">No of Members:</label><br>
 <input type="text" id="nom" name="No_of_members" size="50" placeholder="Only if you are coming in groups"><br>
 <span id="nom1"></span><br>
 
 <label for="Type">Entry Fees:</label><br>
 <select id="dtype" name="Type" >
 <option value ="" disabled selected hidden>Select type</option>
 <option value="Ballet">Rs 3000 regular fee</option>
 <option value="Bharatnatyam">Rs 5000 (food included)</option>
  <option value="Kathak">Rs 7000 (food and drinks included) </option>
 <option value="Breakdance">Rs 10000 (premium all services included)</option>
 </select><br>
 <span id="dtype1"></span><br>
 
 <label for="Comment">Comment:</label><br>
 <textarea name="Comment"  cols="47" placeholder="If any queries"></textarea><br>
 <span id="comment1"></span><br>
 
 <input type="checkbox"  name="agree" value="agree">
 <label for="agree"> I agree all the conditions</label><br>
 <span id="agree1"></span><br><br><br>
 <input type="submit" value="Register" id="btna">
 </form><br><br>
 </div>
 <div id="content3" style="display: none;">
 <center>
 <table border="4" id="show">
 <tr>
 <th>Name</th>
 <th>Email</th>
 <th>Mobile no</th>
 <th>Age</th>
 <th>Gender</th>
 <th>Entry</th>
 <th>No of members</th>
 <th>Entry Fess</th>
 <th>comment</th>
 <th>Time stamp</th>
 </tr>
 <?php include "readAll.php" ?>
 </table>
 </center>
 </div>
 <div class="footer">
	<p>Copyrights Tejas Shelar</p>
</div>
<script src="jp.js"></script>
 </body>
 </html>
