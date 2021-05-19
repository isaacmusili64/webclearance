<?php
include("config.php");

$username=$password="";
//the login function
function login(){
//calling the variables in function
   global $con, $username, $password;
//to prevent mysql injection
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $password = $_POST['password'];
//to encrypt the password
   $password2 = md5($password);
   $password2 = mysqli_real_escape_string($con, $password2);
   $sql = "select * from multi_login where username='$username' limit 1";
   $result = mysqli_query($con, $sql);
   $user = mysqli_fetch_assoc($result);
if(mysqli_num_rows($results)==1){
//compare the two passwords
 if($user['password']==$password2){
//check if user is admin
     if($user['user_type']=="admin"){
       header("location:../admin/home.php");
       exit;
//check if user is faculty
     }elseif($user['user_type']=="faculty"){
       header("location:../faculty/home.php");
       exit;
//check if user is student
    }elseif($user['user_type']=="student"){
       header("location:../students/home.php");
       }
 }else{
   echo("wrong password");
}
}else{
   echo("user not found");
}
 }
?>
