<?php
    session_start();
    include '../../Model/conection.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];
        global $con;
        $checkUser="SELECT `email`,`role` FROM `tbuser` WHERE `email`='$email' AND `password`='$password'";
        $exe=$con->query($checkUser);
        if($exe->num_rows>0){
            $user=$exe->fetch_assoc();
            $_SESSION['login']=$user['email'];
            $_SESSION['role']=$user['role'];
            if($_SESSION['role']==0){
                echo '<script>window.location.href="../../../resource/view/frontend/index.php"</script>';
            }else{
                echo '<script>window.location.href="../../../resource/view/backend/Dashboard.php"</script>';
            }
        }else{
            echo '<script>window.location.href="../../../resource/view/Auth/login.php"</script>';
        }
    }