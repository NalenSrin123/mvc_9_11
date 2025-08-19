<?php 
session_start();
    include '../../Model/conection.php';
    date_default_timezone_set('Asia/Phnom_Penh');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $qty=$_POST['qty'];
        $image=date('y_m_d_h_i_s').'_'.$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $path='../../../public/upload/'.$image;
        move_uploaded_file($tmp_name,$path);
        $des=$_POST['des'];
        $btn=$_POST['btn'];
        $email=$_SESSION['login'];
        $selectUserlogin="SELECT `id` FROM `tbuser` WHERE `email`='$email'";
        $exe=$con->query($selectUserlogin);
        $user=$exe->fetch_assoc();
        $user_id=$user['id'];
        if($btn=='Save Product'){
            $stm="INSERT INTO `tbproducts`(`product_name`, `price`, `qty`, `image`, `description`, `user_id`) 
            VALUES ('$name','$price','$qty','$image','$des','$user_id')";
        }else{

        }
        $exe=$con->query($stm);
        if($exe){
            echo '<script>window.location.href="../../../resource/view/backend/product.php"</script>';
        }
    }
?>