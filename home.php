<?php
  
  session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title> Home Rental System </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
<div class="header">
<h1> Home Rental System </h1>
 <?php
    if(isset($_SESSION['u_id']))
    {
      echo  'logged in!!';

    }
  ?>
 <div class="registration">
   <button id="b1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login 
</button>
 <button id="b2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Signup 
</button>
 <?php
   if(isset($_SESSION['u_id']))
   {
          
      
        echo'<form action="includes/logout.inc.php"  method= "POST">
            <button type="submit" name="submit"> Logout </button>
            </form>';

                ?>
     <script type='text/javascript'>
        $(document).ready(function(){
           document.getElementById("b1").style.display = "none";
           document.getElementById("b2").style.display = "none";
      });

     </script>
    <?php


   }
   ?>
</div>
</div>
 
 <div id="navbar">
<a href="#contact"> Contact Us </a>
<a href="#about"> About Us</a>
<a href="insert.php" target="_blank" > Add Property</a>
<a href="index.php"> Properties </a>
<a href="#"> Home</a>
</div>
 
<div id="id01" class="modal">

  
      <form class="modal-content animate" action="includes/login.inc.php" method="POST" onsubmit="alert('login successful!')">
                  <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    
                  </div>

                  <div class="container">
                    
                    <input type="text" placeholder="Username/e-mail:" name="uid" required>

                    
                    <input type="password" placeholder="Password:" name="pwd" required>
                      
                    
                    
                  </div>

                  <span class="container" style="background-color:#f1f1f1">
                    <button type="submit" name="submit">Login</button>
                    
                   
                  </span>
                </form>
      

</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="includes/signup.inc.php" method="POST" onsubmit="alert('signup successful!')" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
        <input type="text" name="first" placeholder="Firstname:" required>
        <input type="text" name="last"  placeholder="Lastname:" required>
        <input type="text" name="email"  placeholder="E-mail:" required>
        <input type="text" name="uid"  placeholder="Username:" required>
        <input type="password" name="pwd"  placeholder="Password:" required>
    </div>

    <span class="container" style="background-color:#f1f1f1">
      <button type="submit" name="submit">Signup</button>
      
    </span>
  </form>
</div>

<div class="parallax1"></div>

<div style="background-color:#eaeaea;" class="About">
 <div style="height:350px;color:#213159; font-size:22px; text-align:center;">

<h1 id="about" style="text-decoration:underline;"> About us </h1>
 <p><b>A lot of things have changed since we started doing business 30 years ago, but our commitment to quality has never wavered. Our team of professionals remains dedicated to providing the best property management and leasing services in the industry. As a matter of fact, we offer the oldest specialized distinctive home leasing service in Pune.</b></p>
<br>
 <p><b>We have the best resources for locating well-maintained, high quality homes and responsible tenants. Our experienced team has the most accurate and up-to-date information available on leasing opportunities, rent-to-own programs, non-MLS exclusive properties for sale, and vacant property solutions in the market today. We have unmatched experience, a superior international network and the professional instinct you’ll need, when you decide to further explore your next move… in the real estate industry.</b></p>

 </div>
</div>

<div class="parallax2"></div>

<div style="background-color:#eaeaea;" class="Contact">
 <div style="height:600px;color:#213159; font-size:22px; text-align:center;">

<h1 id="contact" style="text-decoration:underline;"> Contact us </h1>
  <div class="row">
   <div class="column" >
    
     <h3 style="text-decoration:underline;"> Home Rental Systems</h3>
     <br>
     <p><b> E-mail:</b>nikitakojabe98@gmail.com </p>
     <br>
     <p><b> Contact:</b> 7588767878 </p>
     <br>
     <p><b> Address:</b> P.I.C.T Girl's Hostel,P.I.C.T College,Dhankawdi,Pune</p> 
     <br>
     <br>
     <br>
    
   </div>
   
   <div class="column" >
    <div class="container">
    <form action="includes/contact.inc.php" method="POST">
    
    <label for="name"></label>
    <input type="text" placeholder="Your name..." name="name" required>
    
    <label for="email"></label>
    <input type="text" placeholder="Your email..." name="email" required>
    
    <label for="mobile"></label>
    <input type="text" placeholder="Your mobile no. ..." name="mobile"   required>
  
   <textarea name="msg" cols="80" rows="5" placeholder="message..." required></textarea>
   <button type="submit" name="submit">Send</button>
   </form>
   <br>
  </div>
  </div>
  </div>
  </div>
  </div>
  
<div class="parallax3"></div>
 
<div class="footer">
 <br>
 <p><b>Copyright © 2019 - Home Rental System | All Rights Reserved |</b></p>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// when user scrolls page execute myFunction
window.onscroll= function() {myFunction()};

//get the navbar
var navbar= document.getElementById("navbar");

// get the offset position of the navbar
var sticky= navbar.offsetTop;

/* add sticky class to the navbar when user reaches the scroll position. remove sticky when reaches the scroll position*/

function myFunction()
{
 if(window.pageYOffset >= sticky)
 {
  navbar.classList.add("sticky")
 }
 else
 {
  navbar.classList.remove("sticky");
 }
}
</script>



