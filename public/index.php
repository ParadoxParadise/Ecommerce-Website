<?php require_once('..\kresources\config.php'); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu và thiết lập cấu hình ?>
<?php include(TEMPLATE_FRONT.DS.'header.php'); // Bao gồm tệp header.php, thường chứa phần đầu trang và thanh điều hướng ?>

<!-- Nội dung Trang -->
<div class="container">

    <div class="row">
        <!-- Danh mục ở đây -->
        <?php include(TEMPLATE_FRONT.DS.'side_nav.php'); // Bao gồm tệp side_nav.php để hiển thị thanh điều hướng danh mục bên trái ?>

        <div class="col-md-9"> <!-- Khu vực nội dung chính với độ rộng 9 cột -->

            <div class="row carousel-holder"> <!-- Khu vực hiển thị carousel -->

                <div class="col-md-12"> <!-- Carousel chiếm toàn bộ chiều rộng -->
                  
                    <!-- Carousel -->
                    <?php include(TEMPLATE_FRONT.DS.'slider.php'); // Bao gồm tệp slider.php để hiển thị hình ảnh carousel (trình chiếu) ?>

                </div> <!-- Kết thúc khu vực carousel -->

            </div> <!-- Kết thúc carousel-holder -->

            <!-- Hiển thị Sản phẩm -->
            <?php include(TEMPLATE_FRONT.DS.'products.php'); // Bao gồm tệp products.php để hiển thị danh sách sản phẩm ?>

        </div> <!-- Kết thúc nội dung chính -->

    </div> <!-- Kết thúc hàng -->

</div>
<!-- Kết thúc container -->

<?php include(TEMPLATE_FRONT.DS.'footer.php'); // Bao gồm tệp footer.php từ TEMPLATE_FRONT.DS, thường chứa phần chân trang HTML ?>
