<?php require_once('..\kresources\config.php'); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu và thiết lập cấu hình ?>
<?php include(TEMPLATE_FRONT.DS.'header.php'); // Bao gồm tệp header.php, thường chứa phần đầu trang và thanh điều hướng ?>

<!-- Nội dung Trang -->
<div class="container">

    <!-- Thanh Điều Hướng Bên Trái -->
    <?php include(TEMPLATE_FRONT.DS.'side_nav.php'); // Bao gồm tệp side_nav.php để hiển thị các danh mục sản phẩm bên trái ?>

<?php
$query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . " "); // Lấy thông tin sản phẩm theo ID từ URL
confirm($query); // Kiểm tra xem truy vấn có thành công không
while ($row = fetch_array($query)): // Lặp qua các sản phẩm trả về từ truy vấn
?>

<div class="col-md-9"> <!-- Khu vực chính với độ rộng 9 cột -->

    <!-- Hàng cho Hình Ảnh và Mô Tả Ngắn -->
    <div class="row">
        <div class="col-md-7">
           <img class="img-responsive" src="..\kresources\<?php echo display_images($row['product_image']); ?>" alt=""> <!-- Hiển thị hình ảnh sản phẩm -->
        </div>

        <div class="col-md-5">
            <div class="thumbnail">
                <div class="caption-full">
                    <h4><a href="#"><?php echo $row['product_title'] ?></a></h4> <!-- Hiển thị tên sản phẩm -->
                    <hr>
                    <h4 class="">&#36;<?php echo $row['product_price'] ?></h4> <!-- Hiển thị giá sản phẩm -->
                    <div class="ratings">
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars <!-- Đánh giá mẫu cho sản phẩm -->
                        </p>
                    </div>
                    <p><?php echo $row['short_desc'] ?></p> <!-- Hiển thị mô tả ngắn của sản phẩm -->
                    <form action="">
                        <div class="form-group">
                            <a href="..\kresources\cart.php?add=<?php echo $row['product_id']; ?>" class="btn btn-primary">Thêm vào Giỏ Hàng</a> <!-- Nút thêm sản phẩm vào giỏ hàng -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- Kết thúc Hàng cho Hình Ảnh và Mô Tả Ngắn -->

    <hr>

    <!-- Hàng cho Bảng Điều Khiển Tab -->
    <div class="row">
        <div role="tabpanel">
            <!-- Tab Điều Khiển -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
            </ul>

            <!-- Nội dung Tab -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <p><?php echo $row['product_description'] ?></p> <!-- Hiển thị mô tả chi tiết của sản phẩm -->
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="col-md-6">
                        <h3>2 Đánh giá từ</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">10 ngày trước</span>
                                <p>Sản phẩm này có chất lượng tuyệt vời. Tôi chắc chắn sẽ mua lại!</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">12 ngày trước</span>
                                <p>Tôi đã đặt hàng một sản phẩm khác!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Thêm Đánh Giá</h3>
                        <form action="" class="form-inline">
                            <div class="form-group">
                                <label for="">Tên</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <h3>Đánh Giá của Bạn</h3>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <div class="form-group">
                                <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="GỬI">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Kết thúc Hàng cho Bảng Điều Khiển Tab -->
</div><!-- Kết thúc col-md-9 -->
<?php endwhile; ?>

</div>
<!-- Kết thúc container -->

<?php include(TEMPLATE_FRONT.DS.'footer.php'); // Bao gồm tệp footer.php chứa phần chân trang HTML ?>
