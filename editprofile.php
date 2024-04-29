<?php
session_start();
include "dbconnect.php";
$userId = $_SESSION['user']['userID'];

if (isset($_POST["submit"])) {
    $userEmail = $_POST["email"];
    $userFullName = $_POST["fullname"];
    $userAddress = $_POST["address"];
    $userPassword = $_POST["password"];

    
    $sql = "UPDATE `user` SET `email`='$userEmail', `fullname`='$userFullName',`address`='$userAddress', `password`='$userPassword' WHERE userID = $userId";
    $result = mysqli_query($con, $sql);
        if ($result) {
            echo '<script type="text/javascript">';
            echo 'alert("Profile updated Successfully");';
            echo 'document.location.href = "editprofile.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Update failed. Try again.");';
            echo 'document.location.href = "editprofile.php";';
            echo '</script>';
        }
    
}
/*
<?php
session_start();
include("dbconnect.php");

$userId = $_SESSION['user']['userID'];

// Function to check for existing email or username (excluding current user)
function isExistingEmailUsername($con, $userEmail, $userFullName, $userId) {
    $sql = "SELECT email, username FROM user WHERE (email = ? OR username = ?) AND userID != ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $userEmail, $userFullName, $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->num_rows > 0; // Return true if existing, false otherwise
}

if (isset($_POST["submit"])) {
    $userEmail = mysqli_real_escape_string($con, $_POST["email"]);
    $userFullName = mysqli_real_escape_string($con, $_POST["fullname"]);
    $userAddress = mysqli_real_escape_string($con, $_POST["address"]);
    $userPassword = mysqli_real_escape_string($con, $_POST["password"]);

    // Check new email and username for existence (excluding current user)
    if (isExistingEmailUsername($con, $userEmail, $_POST['username'], $userId)) {
        $error = "Email or username already exists.";
    } else {
        // If no existing user with email or username, proceed with update using prepared statement
        $sql = "UPDATE `user` SET `email` = ?, `fullname` = ?, `address` = ?, `password` = ? WHERE userID = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssss", $userEmail, $userFullName, $userAddress, $userPassword, $userId);

        if ($stmt->execute()) {
            $message = "Profile updated successfully!";
        } else {
            $error = "Update failed: " . mysqli_error($con);
        }

        $stmt->close();
    }
}

// Close connection (assuming it's done outside this script)
// mysqli_close($conn);  // Uncomment if connection is closed here

?>
*/
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
                        <a class="nav-link" href="homepage_donor.php">Home</a>
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
                            <a class="nav-link selected" href="editprofile.php">Edit Profile</a>
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
        </div>
    </div>
    </section>
    <!-- Navigator End -->

    <!-- Update Start -->
    <!-- Update Email, Password, FullName, Address -->
        <div class="container">
            <div class="col-md-6">
              <?php
              $sql = "SELECT email, fullname, address FROM user WHERE userID = $userId LIMIT 1";
              $result = mysqli_query($con, $sql);
              $row = mysqli_fetch_assoc($result);
              ?>
                <form action="" method="post">
                    <div class="form-group"> <!-- Email -->
                        <label for="email">Email:</label>
                        <!-- <input type="email" name="updateEmail" class="form-control" value=""> -->
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="form-group"> <!-- Password -->
                        <label for="currentPw">New Password:</label> 
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                    <div class="form-group"> <!-- Full name -->
                        <label for="fullname">Name:</label>
                        <!-- <input type="text" name="updateName" class="form-control" value=""> -->
                        <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $row['fullname'] ?>">
                    </div>
                    <div class="form-group"> <!-- Address -->
                        <label for="address">Address:</label> 
                        <!-- <input type="text" name="updateAddress" class="form-control" value=""> -->
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo $row['address'] ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                    </div>
                    <div>
                        <button type="submit" formaction="homepage_donor.php">Cancel</button>
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
                        <p>Just the footer. Nothing to see here.</p>
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