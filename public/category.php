<?php require_once('..\kresources\config.php'); // Yêu cầu tệp config.php từ thư mục kresources, giúp kết nối và thiết lập cấu hình cần thiết ?>
<?php include(TEMPLATE_FRONT.DS.'header.php'); // Bao gồm tệp header.php từ đường dẫn TEMPLATE_FRONT.DS, thường chứa phần đầu của trang HTML và thanh điều hướng ?>

<!-- Nội dung Trang -->
<div class="container">

    <!-- Tiêu đề Jumbotron -->
    <!-- Đây là phần có thể dùng để thêm tiêu đề hoặc banner cho trang -->

    <!-- Tiêu đề Sản phẩm Mới nhất -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Sản phẩm Mới nhất</h3> <!-- Tiêu đề cho phần sản phẩm mới nhất -->
        </div>
    </div>
    <!-- Kết thúc hàng -->

    <!-- Các Tính năng Trang -->
    <div class="row text-center">
       
       <?php get_products_in_category_page() // Gọi hàm để hiển thị sản phẩm theo danh mục trên trang ?>
       
    </div>
    <!-- Kết thúc hàng -->
</div>
<!-- Kết thúc container -->

<!-- Chân trang -->
<?php include(TEMPLATE_FRONT.DS.'footer.php'); // Bao gồm tệp footer.php từ TEMPLATE_FRONT.DS, thường chứa phần cuối của trang HTML ?>
