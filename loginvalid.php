<?php
session_start();
include('dbconnect.php');
function sanitizeInput($input) {
    $input = trim($input);
    $input = strip_tags($input);
    return $input;
}

$email = sanitizeInput($_POST['email']);
$password = $_POST['password']; // You should hash the password in a real-world scenario

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
 
$result = $con->query($sql);

 

if ($result->num_rows == 1) {
    // User found, authentication successful
    $user = $result->fetch_assoc();

    $userType = $user['userType'];
    
    // Redirect based on user type
    if ($userType == 'Admin') {
        header('location: index.php');
    } elseif ($userType == 'Donor') {
        header('location: homepage_donor.php');
    } elseif ($userType == 'Hospital') {
        header('location: homepage_hospital.php');
    } else {
        // Invalid user type
        echo "Invalid user type.";

    }
    
    // Store user data in session, if needed
    $_SESSION['user'] = $user;

} else {

    // Authentication failed

    // echo "Authentication failed. Please check your email and password.";
    echo '<script type="text/javascript">'; 
    echo 'alert("Authentication failed. Please check your email and password.");'; 
    echo 'document.location.href = "login.php";';
    echo '</script>';

}

 

// Close the database connection

$con->close();

?>