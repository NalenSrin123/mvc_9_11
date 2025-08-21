<?php 
    include '../../Model/conection.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        global $con;
        $id=$_POST['delete_id'];
        $delete="DELETE FROM `tbproducts` WHERE `product_id`='$id'";
        if($con->query($delete)){
            echo '<script>window.location.href="../../../resource/view/backend/product.php"</script>';
        }
    }