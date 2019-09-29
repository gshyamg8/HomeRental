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
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
 

</div>
</div>
 <div id="navbar">
<a href="home.php"> Contact Us </a>
<a href="home.php"> About Us</a>
<a href="insert.php" target="_blank"> Add Property</a>
<a href="index.php"> Properties </a>
<a href="home.php"> Home</a>
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
  
  <form class="modal-content animate" action="includes/signup.inc.php" method="POST" onsubmit="alert('signup successful!')">
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
</body>

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

</html>