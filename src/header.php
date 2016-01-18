<?php
session_start(); // Right at the top of your script
$session_name = session_name("WebsiteID");
echo session_name();
?> 

       <div class="header">
       		<div class="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="category.php">Books</a></li>
            <li><a href="specials.php">Special books</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact</a></li>
<li class='active' style='float:right;'>
  
 <?php if($_SESSION['WebsiteID']==true)
    { 
      echo $_SESSION["username"];
      echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['WebsiteID']==false)
    {
      echo '<a href="index.php"><span>Login/Register</span></a></li>';
    }
?>
            </ul>
        </div>     
            
       </div> 
	  	   
	   


