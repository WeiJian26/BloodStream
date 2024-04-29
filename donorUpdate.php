<?php
session_start();
include('dbconnect.php');

$userId = $_SESSION['user']['userID'];

if (isset($_POST['submit'])){
    $userEmail = $row["email"];
    $userFullName = $row["fullname"];
    $userAddress = $row["address"];

    $sql = "UPDATE `user` SET `email`='$userEmail', `fullname`='$userFullName',`address`='$userAddress' WHERE userID=$userId";
    $result = mysqli_query($con, $sql);
    
    if($result){
        header("Location: editprofile.php?msg=Profile updated succesfully");
    }
    else {
        echo "Failed: " . mysqli_error($con);
    }
}


/*
    currentPw = Current Password
    newPw = New Password
    confirmNpw = Confirm New Password

<?php 
    if(isset($_POST['submit'])){
        $currentPassword = $_POST['currentPw']; 
        $newPassword = $_POST['newPw'];  
        $confirmPassword = $_POST['confirmNpw']; 
        $sql = "SELECT password FROM user where userID='$userId'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        if(password_verify($currentPassword,$row['password'])){
            if($confirmPassword == ''){
                $error[] = 'Please confirm the password.';
            }
            if($newPassword != $confirmPassword){
                $error[] = 'Passwords do not match.';
            }
        if(!isset($error)){
            $options = array("cost"=>4);
            $newPassword = password_hash($newPassword,PASSWORD_BCRYPT,$options);

            $result = mysqli_query($con,"UPDATE users SET password='$newPassword' WHERE userID='$userId'");
                if($result){
                    header("location:editprofile.php?password_updated=1");
                }
                else{
                    $error[]='Something went wrong';
                }
            }
        } 
    else{
        $error[]='Current password does not match.'; 
    }   
}
    if(isset($error)){ 
        foreach($error as $error){ 
            echo '<p class="errmsg">'.$error.'</p>'; 
        }
    }
?>
*/

/*
    currentPw = Current Password
    newPw = New Password
    confirmNpw = Confirm New Password

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
      header("Location: editPassword.php?error=Current Password is required");
	  exit();
    }else if(empty($newPw)){
      header("Location: editPassword.php?error=New Password is required");
	  exit();
    }else if($newPw !== $confirmNpw){
      header("Location: editPassword.php?error=The confirmation password  does not match");
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
        	header("Location: editPassword.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: editPassword.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: editPassword.php");
	exit();
}
*/
?>