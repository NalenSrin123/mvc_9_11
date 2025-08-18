<?php 
    include '../../Model/conection.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $profile=rand(1,1000).'_'.$_FILES['profile']['name'];
        $tmp_name=$_FILES['profile']['tmp_name'];
        $path='../../../public/upload/'.$profile;
        move_uploaded_file($tmp_name,$path);
        $insert="INSERT INTO `tbuser`(`username`, `email`, `password`, `profile`) 
        VALUES ('$username','$email','$password','$profile')";
        global $con;
        $exe=$con->query($insert);
        if($exe){
            header('location: ../../../resource/view/Auth/login.php');
        }
    }
?>