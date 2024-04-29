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

    <title>Login</title>


    


</head>


<style>
    #login .container form .email,
    #login .container form .password{
    width: 70%;
    font-size: 20px;
    height: 50px;
    margin: 30px 0px 0px 0px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid lightgray;
    padding-left: 10px;
    border-radius: 5px;
    }

    #login .container form .submit{
    width: 70%;
    font-size: 20px;
    height: 50px;
    margin: 30px 0px 0px 0px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid lightgray;
  
    border-radius: 5px;
    }

    .wrapper form .signup-link {
    text-align: center;
    margin-top: 20px;
    font-size: 17px;    
    text-align: center;
    padding: 15px;
  }

  .wrapper form .signup-link a {
    color: #16a085;
    text-decoration: none;
    
  }

  form .signup-link a:hover {
    text-decoration: underline;
  }

  .login{
    width: 70%;
    font-size: 20px;
    height: 50px;
    margin: 30px 0px 0px 0px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid lightgray;
    padding-left: 10px;
    border-radius: 5px;
    }


    form .submit input {
     color: #fff;
    height: 100%;
    font-weight: 500;
    width: 100%;
    background: #16a085;
    outline: none;
    padding-left: 60px;
    border-radius: 5px;
    border: 1px solid lightgrey;
    font-size: 16px;
    transition: all 0.3s ease;
    }

    form .submit input:hover {
    background: #12876f;
    }


    #login .container form .check {
    margin: 0px 0px 0px 160px;
    width: 2%;
    }

    .signup-link
    {
        text-align: center;
    padding: 15px 1px;
    }

    #login .container form a {
    margin-left: 45%;
    font-size: 18px;
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
            <img src="imgs/pngegg (2).png" class="d-none d-lg-inline-block" style="width: 8%;" onclick= "window.location.href = 'index.php'"/>
            <!-- For Mobile -->
            <img src="imgs/pngegg (2).png" class="d-inline-block d-lg-none" style="width: 20%;" onclick= "window.location.href = 'index.php'"/>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link selected" href="index.php">Home</a>
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
            <!-- <div class="path-main" style="color: darkred; display:inline-block;">Home</div> -->
                <div class="path-main" style="color: darkred; display:inline-block;">Login</div>
                <!-- <div class="path-directio" style="color: grey; display:inline-block;"> / Login</div> -->
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Login Start -->
    <section id="login">
        <div class="container">
                <img src="imgs/pngegg (2).png" alt="Login" width="20%">
                <form action="loginvalid.php" method="post">
                    
                    <input class="email" type="email" name="email" placeholder="Enter your E-mail" >
                    <input class="password" type="password" name="password" placeholder="Enter your Password" >
                    <input class="check" type="checkbox">Remember me
                    <a href="#">Forget Password ?</a><br>
                    <!-- <div class="reg-group">
                        <button style="background-color: darkred;">Login</button>
                        <button style="background-color: rgb(51, 58, 65);">Make new account</button>
                       
                    </div> -->
                    <div class="submit">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>
                <div class="signup-link">Not a member? <a href="signupAs.php">Signup now</a></div>
        </div>
    </section>
    <!-- Login End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="foot-info">
                        <img src="imgs/logo.png" alt="">
                        <p>This is just a footer. Nothing to see here</p>
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
                        <a href="#call-us">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
                <!--
                <div class="col-md-4">
                    <ul class="options">
                        <li>
                            <h5>Available On</h5>
                        </li>
                        <li><img src="imgs/ios1.png" alt=""></li>
                        <li><img src="imgs/google1.png" alt=""></li>
                    </ul>
                </div>
                -->
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
</body>

</html>