<?php 
    session_start();
    include '../../Model/conection.php';
    date_default_timezone_set('Asia/Phnom_Penh');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $qty=$_POST['qty'];
        if(!empty($_FILES['image']['name'])){
            $image=date('y_m_d_h_i_s').'_'.$_FILES['image']['name'];
            // tmp= temporary
            $tmp_name=$_FILES['image']['tmp_name'];
            $path='../../../public/upload/'.$image;
            move_uploaded_file($tmp_name,$path);
        }else{
            $image=$_POST['hide_image'];
        }
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
            $pro_id=$_POST['hide_id'];
            $update_at=date('y-m-d H:i:s');
            $stm="UPDATE `tbproducts` SET `product_name`='$name',`price`='$price',
            `qty`='$qty',`image`='$image',`description`='$des',
            `user_id`='$user_id',`update_at`='$update_at' WHERE `product_id`='$pro_id'";
        }
        $exe=$con->query($stm);
        if($exe){
            echo '<script>window.location.href="../../../resource/view/backend/product.php"</script>';
        }
    }

    // get product
    function getAllProduct(){
        global $con;
        $select_product="SELECT * FROM `tbproducts`";
        $rs=$con->query($select_product);
        if($rs->num_rows>0){
            while($row=$rs->fetch_assoc()){
                echo '
                    <tr>
                        <td>'.$row['product_id'].'</td>
                        <td>
                            <img src="../../../public/upload/'.$row['image'].'" alt="Laptop" class="product-image">
                        </td>
                        <td>'.$row['product_name'].'</td>
                        <td>$'.$row['price'].'</td>
                        <td>'.$row['qty'].'</td>
                        <td>'.$row['description'].'</td>
                        <td>
                            <div class="actions">
                                <button type="button" class="btn btn-secondary btn-sm" id="btnEdit">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </div>
                        </td>
                    </tr>
                ';
            }
        }else{
            echo '<tr>
            <td colspan="6" style="text-align:center;">Comming soon...!</td>
            </tr>';
        }
    }
?>