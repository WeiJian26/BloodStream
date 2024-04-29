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

    <title>Sign Up</title>


    <style>

        input[type="date"]:before {
            content: attr(placeholder) !important;
            color: #aaa;
         
        }
        input[type="date"]:focus:before,
        input[type="date"]:valid:before {
            content: "";
        }



 
    </style>


</head>

<body>

    <!-- Navbar 1 Start -->

    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- For Desktop -->
            <img src="imgs/pngegg (2).png" class="d-none d-lg-inline-block" style="width: 8%;" onclick= "window.location.href = 'index.php'" />
            <!-- For Mobile -->
            <img src="imgs/pngegg (2).png" class="d-inline-block d-lg-none" style="width: 20%;" onclick= "window.location.href = 'index.php'"/>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="requests.html">Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="who-we-are.html">Who We Are ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">EN /CN</a>
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
                <a href = "login.php"> <div class="path-main" style="color: grey; display:inline-block;">Login </div></a>
                <a href = "signupAs.php"> <div class="path-main" style="color: grey; display:inline-block;"> / Sign up</div></a>
                <div class="path-direction" style="color: darkred; display:inline-block;"> /  Donor</div> 
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Sign Up Start -->
    <section id="sign-up">
        <div class="container">
                <img src="imgs/pngegg (2).png" alt="Login" width="20%">
                <form action="addNewDonor.php" method="POST">
                    <input type="fullname" name="fullname" placeholder="Enter your Full Name" required>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <input type="password"  name="password" placeholder="Enter your password" required>
                    <input type="Phone" name="phoneNumber" placeholder="Phone Number" required="">
                    <input type="address" name="address" placeholder="Enter your address" required> 
                    <input type="city" name="city" placeholder="Enter your city" required> 
                    <input type="date" id="dateOfBirth" name="dateOfBirth" placeholder="Select Date of Birth">

                    <select name="gender" id="gender" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>  
                    </select>


                    <script>
                        function toggleOtherInput() {
                            var select = document.getElementById("bloodType");
                            var otherInput = document.getElementById("otherBloodType");

                            if (select.value === "Other") {
                                otherInput.style.display = "block";
                            } else {
                                otherInput.style.display = "none";
                            }
                        }
                    </script>
                    <select name="bloodType" id="bloodType" onchange="toggleOtherInput()" required="">
                        <option value="" disabled selected>Select Blood Type</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="Other">Other Blood Type</option>
                    </select> 
                    <input type="text" id="otherBloodType" name="otherBloodType" placeholder="Enter Other Blood Type" style="display: none;">

                    <!-- <input type="date" name="donate-day"> -->
                    <!-- <div class="reg-group">
                        <input class="check" type="checkbox" required="" style="height: auto; display:inline; margin: 0 auto;">Agree on terms and conditions<br>
                        <button class="submit" type="submit" style="background-color: rgb(51, 58, 65);">Submit</button> 
                    </div> -->
                    <div class="submit">
                        <input type="submit" name="submit" value="Sign Up">
                    </div>

                </form>
        </div>
    </section>
    <!-- Sign Up End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="foot-info">
                        <img src="imgs/logo.png" alt="">
                        <p>This is just a footer. Nothing to see here.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="menu">
                        <a href="index.php">
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
        const dateInput = document.getElementById('dateInput');
        dateInput.addEventListener('focus', function() {
            dateInput.setAttribute('placeholder', 'Select your Birth date');
        });
        dateInput.addEventListener('blur', function() {
            dateInput.removeAttribute('placeholder');
        });
    </script>


</body>

</html>