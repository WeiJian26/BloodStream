<?php
//UPDATE PASSWORD
session_start();
include('dbconnect.php');

$userId = $_SESSION['user']['userID'];

if (isset($_POST['currentPw']) && isset($_POST['newPw'])
    && isset($_POST['confirmNpw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$currentPw = validate($_POST['currentPw']);
	$newPw = validate($_POST['newPw']);
	$confirmNpw = validate($_POST['confirmNpw']);
    
    if(empty($currentPw)){
      header("Location: updatePassword.php?error=Current Password is required");
	  exit();
    }else if(empty($newPw)){
      header("Location: updatePassword.php?error=New Password is required");
	  exit();
    }else if($newPw !== $confirmNpw){
      header("Location: updatePassword.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$currentPw = md5($currentPw);
    	$newPw = md5($newPw);
        $userId = $_SESSION['user']['userID'];

        $sql = "SELECT password
                FROM user WHERE 
                userID='$userId' AND password='$currentPw'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE user
        	          SET password='$newPw'
        	          WHERE userID='$userId'";
        	mysqli_query($con, $sql_2);
        	header("Location: updatePassword.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: updatePassword.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: updatePassword.php");
	exit();
}
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
                        <a class="nav-link selected" href="homepage_donor.php">Home</a>
                    </li>

                    <!-- Make appointment -->
                    <li class="nav-item">
                        <a class="nav-link" href="donorapmt.php">Make Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">Reward</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">History</a>
                    </li>
                       <!-- <a href="javascript:;"><?php echo $_SESSION['user']['name']; ?></a> -->
                    <li class="nav-item, dropdown" style=" padding: 8px">
                        
                        <a class="nav-link, dropbtn"  href="About-us.html" onclick="myFunction()" style="color: rgba(0, 0, 0, .5);">Profile <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content" id="myDropdown">
                            <!-- Edit profile -->
                            <a href="editprofile.php">Edit Profile</a>
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
    <!-- Navbar 2 End -->

    <!-- Navigator Start -->
    <section id="navigator">
    <div class="container">
        <div class="path">
            <a href = "homepage_donor.php"> <div class="path-main" style="color: grey; display:inline-block;">Home </div></a>
            <div class="path-direction" style="color: darkred; display:inline-block;"> /  Edit Profile</div>
            <div class="path-direction" style="color: darkred; display:inline-block;"> /  Edit Password</div>
            
        </div>
    </div>
    </section>
    <!-- Navigator End -->

    <!-- Update Start -->
    <!-- Update Password -->
        <div class="container">
            <div class="col-md-6">

                <form action="" method="post">
                    <div class="form-group"> <!-- Current Password -->
                        <label for="currentPw">Current Password:</label> 
                        <input type="password" name="currentPw" class="form-control" value="">
                    </div>
                    <div class="form-group"> <!-- New Password -->
                        <label for="newPw">New Password:</label> 
                        <input type="password" name="newPw" class="form-control" value="">
                    </div>
                    <div class="form-group"> <!-- Confirm New Password -->
                        <label for="confirmNpw">Confirm New Password:</label> 
                        <input type="password" name="confirmNpw" class="form-control" value="">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                    </div>
                    <div>
                        <button type="submit" formaction="editprofile.php">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    <!-- Update End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="foot-info">
                        <img src="imgs/logo.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ut sit natus earum ea cum
                            doloremque fugit. Sit non ex suscipit fugiat molestias, ipsa rerum tempore voluptates
                            adipisci rem cum?</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="menu">
                        <a href="homepage_donor.php">
                            <li>Home</li>
                        </a>
                        <a href="About-us.html">
                            <li>About Us</li>
                        </a>
                        <a href="#articles">
                            <li>Articles</li>
                        </a>
                        <a href="requests.html">
                            <li>Donations</li>
                        </a>
                        <a href="who-we-are.html">
                            <li>Who We Are?</li>
                        </a>
                        <a href="contact-us.html">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="options">
                        <li>
                            <h5>Available On</h5>
                        </li>
                        <li><img src="imgs/ios1.png" alt=""></li>
                        <li><img src="imgs/google1.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

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
</body>

</html>