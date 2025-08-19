<?php 
session_start();
    if(empty($_SESSION['login'])){
        header('location: ../Auth/login.php');
    }else{
      if($_SESSION['role']==0){
        header('location: ../frontend/index.php');
      }
    }
    include '../../../app/Model/conection.php';
    global $con;
        $email=$_SESSION['login'];
        $selectUserlogin="SELECT `username`,`profile` FROM `tbuser` WHERE `email`='$email'";
        $exe=$con->query($selectUserlogin);
        $user=$exe->fetch_assoc();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management Dashboard</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="./Dashboard.php" class="nav-link active">📊 Overview</a>
                    </li>
                    <li class="nav-item">
                        <a href="./product.php" class="nav-link">📦 Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">📋 Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">📈 Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">⚙️ Settings</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Product Management</h1>
                <div class="user-info">
                    <span>Welcome, <?php echo $user['username'] ?></span>
                    <div class="user-avatar"><img width="100%" height="100%" style="border-radius: 50%; object-fit: cover;" src="../../../public/upload/<?php echo $user['profile'] ?>" alt=""></div>
                </div>
            </header>

          


    <!-- Product Form Modal -->
  

    <script>
        function showForm() {
            document.getElementById('productForm').classList.add('show');
        }

        function hideForm() {
            document.getElementById('productForm').classList.remove('show');
        }

        // Close modal when clicking outside
        document.getElementById('productForm').addEventListener('click', function(e) {
            if (e.target === this) {
                hideForm();
            }
        });
    </script>
</body>
</html>