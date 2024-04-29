<?php
session_start();
include('dbconnect.php');
$donorId = $_SESSION['donor']['donorID'];
$hospitalId = $_POST['hospitalID'];

if(isset($_POST["submit"])){
    $appointmentDate = $_POST["appointmenDate"];
    $appointmentTime = $_POST["appointmenTime"];
    $donoCenter = $_POST["donoCenter"];

    $sql = "INSERT INTO appointment (donorID, hospitalID, apmtDate, apmtTime, donoCnt) 
    VALUES ('$donorId', '$hospitalId', '$appointmentDate' , '$appointmentTime' , '$donoCenter')";
    $result = mysqli_query($con, $sql);



    if($result){
        echo '<script type="text/javascript">'; 
        echo 'alert("Appointment scheduled successfully");'; 
        echo 'document.location.href = "donorapmt.php";';
        echo '</script>';
    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Appointment not scheduled. Please try again.");'; 
        echo 'document.location.href = "donorapmt.php";';
        echo '</script>';
    }

}


/*
    $addNewHospital =  "INSERT INTO hospital (userID,state, regNum,opStat) 
    value ('$userID','$state' ,'$regNum' ,'$opStat')";
    mysqli_query($con, $addNewHospital);
    $hospitalID=$con->insert_id;

if (isset($_POST['submit'])) {

    if (isset($_POST['appointmenDate']) && !empty($_POST['appointmenTime']) && !empty($_POST['donoCenter'])) {
        $statement = 'INSERT INTO appoinment (apmtDate, apmtDate, donoCnt) VALUES (:apmtDate,:apmtTime,:donoCnt)';
        $is_done = $statement->execute([
        'apmtDate' => $_POST['appointmenDate'],
        'apmtTime' => $_POST['appointmenTime'],
        'donoCnt' => $_POST['donoCenter'],
    ]);

        if ($is_done) {
            echo "<p class='success'>Your appointment has been taken!</p>";
            header("Refresh:1;url= success.php");
        }
    } else {
        echo "<p class='error'>Fill out the all form data!</p>";
    }
}
*/
?>



