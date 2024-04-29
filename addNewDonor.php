<?php
session_start();
include('dbconnect.php');
 
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phoneNumber= $_POST['phoneNumber'];
$address =  $_POST['address'];
$gender =  $_POST['gender'];
$bloodType = $_POST['bloodType'];
$otherBloodType = $_POST['otherBloodType'];
$dateOfBirth = $_POST['dateOfBirth'];
$city = $_POST['city'];
 
$check_username =" SELECT * FROM user WHERE email ='$email' OR fullname = '$fullname'";
$result_username = mysqli_query($con, $check_username);
$r = mysqli_num_rows($result_username);
 
 
if($r== 1){
    echo '<script type="text/javascript">';
    echo 'alert("User already exists");';
    echo 'document.location.href = "signup_donor.php";';
    echo '</script>';
 
}else{
 
    $addnewuser= " INSERT INTO user (email, password, fullname, address, phoneNumber, userType)
    value ('$email' , '$password' , '$fullname' , '$address' , '$phoneNumber', 'Donor')";
    mysqli_query($con, $addnewuser);
    $userID=$con->insert_id;
 
    // $addNewDonor= "INSERT INTO donor (userID,gender, bloodType,otherBloodType) value
    //                                 ('$userID','$gender','$bloodType','-')";
    // mysqli_query($con, $addNewDonor);
    // $donorID=$con->insert_id;
   
    // $addOtherBloodTypeDonor= "INSERT INTO donor (userID,gender, bloodType,otherBloodType) value
    //                             ('$userID','$gender','-','$otherBloodType')";
    // mysqli_query($con, $addOtherBloodTypeDonor);
    // $donorID=$con->insert_id;
   
    if ($bloodType === 'Other') {
        $addNewDonor = "INSERT INTO donor (userID, gender, dateOfBirth,city, bloodType, otherBloodType)
                        VALUES ('$userID', '$gender', '$dateOfBirth', '$city', '-', '$otherBloodType')";
    } else {
        $addNewDonor = "INSERT INTO donor (userID, gender, dateOfBirth,city, bloodType, otherBloodType)
                        VALUES ('$userID', '$gender', '$dateOfBirth' , '$city' ,'$bloodType', '-')";
    }
    mysqli_query($con, $addNewDonor);
    $donorID=$con->insert_id;
 
 
    echo '<script type="text/javascript">';
    echo 'alert("Registration Successful");';
    echo 'document.location.href = "login.php";';
    echo '</script>';
}
?>