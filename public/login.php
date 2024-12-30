<?php require_once('..\kresources\config.php'); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu và thiết lập cấu hình ?>
<?php include(TEMPLATE_FRONT.DS.'header.php'); // Bao gồm tệp header.php, thường chứa phần đầu trang và thanh điều hướng ?>

<!-- Nội dung Trang -->
<div class="container">

    <header>
        <h1 class="text-center">Đăng Nhập</h1> <!-- Tiêu đề cho trang đăng nhập -->
        <h2 class="text-center bg-warning"><?php display_message(); // Hiển thị thông báo từ hàm display_message(), có thể là thông báo lỗi hoặc thành công ?></h2>

        <!-- Khu vực đăng nhập -->
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
               <?php login_user(); // Gọi hàm login_user() để xử lý đăng nhập khi người dùng gửi biểu mẫu ?>

               <!-- Trường nhập tên người dùng -->
                <div class="form-group">
                    <label for=""> Tên đăng nhập
                        <input type="text" name="username" class="form-control">
                    </label>
                </div>

                <!-- Trường nhập mật khẩu -->
                <div class="form-group">
                    <label for="password">Mật khẩu
                        <input type="password" name="password" class="form-control">
                    </label> 
                </div>

                <!-- Nút gửi biểu mẫu đăng nhập -->
                <div class="form-group" text-align:center>
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>  
    </header>

</div> <!-- Kết thúc container -->

<?php include(TEMPLATE_FRONT.DS.'footer.php'); // Bao gồm tệp footer.php chứa phần chân trang HTML ?>
