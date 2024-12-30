<?php require_once('..\kresources\config.php'); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu và thiết lập cấu hình ?>
<?php include(TEMPLATE_FRONT.DS.'header.php'); // Bao gồm tệp header.php, thường chứa phần đầu trang và thanh điều hướng ?>

<!-- Nội dung Trang -->
<div class="container">

    <!-- Phần tiêu đề chính với Jumbotron -->
    <header>
        <h1>
            Tất Cả Sản Phẩm <!-- Tiêu đề lớn của trang -->
        </h1>
    </header>

    <!-- Tiêu đề Sản phẩm Mới nhất -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Sản Phẩm Mới Nhất</h3> <!-- Tiêu đề cho phần sản phẩm mới nhất -->
        </div>
    </div>
    <!-- Kết thúc hàng -->

    <!-- Các Tính năng của Trang -->
    <div class="row text-center">
       
       <?php get_products_in_shop_page(); // Gọi hàm để lấy và hiển thị danh sách sản phẩm trên trang cửa hàng ?>
       
    </div>
    <!-- Kết thúc hàng -->
</div>
<!-- Kết thúc container -->

<!-- Chân trang -->
<?php include(TEMPLATE_FRONT.DS.'footer.php'); // Bao gồm tệp footer.php từ TEMPLATE_FRONT.DS, thường chứa phần chân trang HTML ?>
