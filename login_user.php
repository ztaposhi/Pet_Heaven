<?php 
 require 'db.php';


 
 $email = get_safe_value($con,$_POST['email']);
 $password = get_safe_value($con,$_POST['password']);

 $res = mysqli_query($con,"select * from users where email='$email'");
 $check_user = mysqli_num_rows($res);
 if ($check_user>0) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['USER_LOGIN']='yes';
   

    
    echo "valid";
 	
 }else{
 	echo "wrong";

 }
?>