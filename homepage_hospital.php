<?php
session_start();
include('dbconnect.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="imgs/blood-bag.png" />

    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>Blood Bank</title>
    </head>

<style>
    #header {
    background: url( imgs/pexels-artem-podrez-6823601.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 550px;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }
    
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 75px;
        
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        
    }
    
    /* Links inside the dropdown */
    .dropdown-content a {
        color: lightgrey;
        border-right: 1px solid lightgray;
        padding-right: 5px;
        padding-left: 5px;
        margin-top:15px;
        margin-bottom:15px;
        text-decoration: none;
        display: block;
    }
  
    
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
    



</style>
<body>

    <!-- Navbar 1 Start -->
    <!-- <section id="Nav1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <i class="fas fa-phone-volume" style="border-right: 1px solid gray;"> +20 127 245 6884
                                &nbsp; &nbsp; </i>
                        </li>
                        <li class="nav-item">
                            <i class="far fa-envelope" style="padding-left: 15px;"> InfoBloodBank@gmail.com</i>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0 navbar-brand mx-auto">
                    <a href="https://www.instagram.com/ipda3.tech/"><i
                            class="fab fa-instagram github">&nbsp;&nbsp;</i></a>
                    <a href="https://www.facebook.com/ipda3tech/"><i
                            class="fab fa-facebook-f facebook">&nbsp;&nbsp;</i></a>
                    <a href="https://twitter.com/ipda3_tech"><i class="fab fa-twitter twitter">&nbsp;&nbsp;</i></a>
                    <a href="https://api.whatsapp.com/send?phone=+201097571186"><i
                            class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link selected" style="border-right: 1px solid gray;" href="#">EN &nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="padding-left: 15px;" href="#">AR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section> -->
    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            
                <!-- For Desktop -->
                <img src="imgs/pngegg (2).png" class="d-none d-lg-inline-block" style="width: 8%;"  onclick= "window.location.href = 'index.php'"/>
                <!-- For Mobile -->
                <img src="imgs/pngegg (2).png" class="d-inline-block d-lg-none" style="width: 20%;" onclick= "window.location.href = 'index.php'"/>
      
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link selected" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">Update Donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">Inventory </a>
                    </li>
                  
                    <li class="nav-item, dropdown" style=" padding: 8px">
                        
                        <a class="nav-link, dropbtn"  href="About-us.html" onclick="myFunction()" style="color: rgba(0, 0, 0, .5);">Profile <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="#">Edit Profile</a>
                            <a href="logout.php">Logout</a>

                        </div>
                    </li>




                </ul>
            </div>
            <button class="navbar-toggler order-first" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </section>

    <section id="header">
        <div class="container">
            <h1>Welcome <?php echo $_SESSION['user']['fullname']; ?></h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat inventore nemo repudiandae
                ipsum quos.</h4>
            <!-- <button class="btn more" onclick= "window.location.href = 'About-us.html';">More</button> -->
        </div>
    </section>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>