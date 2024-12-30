<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang của bạn</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome cho biểu tượng -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container">
        <!-- Header của navbar -->
        <div class="navbar-header">
            <!-- Nút chuyển đổi menu khi trên màn hình nhỏ -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i></a> <!-- Biểu tượng ngôi nhà -->
        </div>

        <!-- Các liên kết điều hướng, biểu mẫu và nội dung khác cho việc điều hướng -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="shop.php">Sản phẩm</a></li>
                <li><a href="login.php">Đăng nhập</a></li>
                <li><a href="admin">Admin</a></li>
                <li><a href="checkout.php">Giỏ hàng</a></li>
                <li><a href="contact.php">Liên hệ</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

    <!-- Bootstrap và jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
