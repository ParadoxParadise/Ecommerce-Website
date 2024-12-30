<!-- Cấu hình -->

<?php require_once("..\kresources\config.php"); // Yêu cầu tệp config.php để thiết lập cấu hình và kết nối cơ sở dữ liệu ?>


<!-- Header -->
<?php include(TEMPLATE_FRONT .  "\header.php"); // Bao gồm tệp header.php, thường chứa phần đầu trang và thanh điều hướng ?>


<!-- Phần Liên hệ -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Liên Hệ Với Chúng Tôi</h2> <!-- Tiêu đề phần liên hệ -->
            <h3 class="section-subheading "><?php display_message(); // Hiển thị thông báo từ hàm display_message(), có thể là thông báo lỗi hoặc thành công ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" method="post" >
                <div class="row">
                   <?php send_message(); // Gọi hàm send_message() để xử lý việc gửi tin nhắn từ biểu mẫu ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Tên của bạn *" id="name" required data-validation-required-message="Vui lòng nhập tên của bạn.">
                            <p class="help-block text-danger"></p> <!-- Thông báo lỗi nếu tên chưa được nhập -->
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email của bạn *" id="email" required data-validation-required-message="Vui lòng nhập địa chỉ email của bạn.">
                            <p class="help-block text-danger"></p> <!-- Thông báo lỗi nếu email chưa được nhập -->
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Chủ đề *" id="subject" required data-validation-required-message="Vui lòng nhập chủ đề.">
                            <p class="help-block text-danger"></p> <!-- Thông báo lỗi nếu chủ đề chưa được nhập -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Tin nhắn của bạn *" id="message" required data-validation-required-message="Vui lòng nhập nội dung tin nhắn."></textarea>
                            <p class="help-block text-danger"></p> <!-- Thông báo lỗi nếu tin nhắn chưa được nhập -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" name="submit" class="btn btn-xl" style="background-color: #007bff; color: #ffffff;">Gửi Tin Nhắn</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT .DS."footer.php"); // Bao gồm tệp footer.php từ TEMPLATE_FRONT.DS, thường chứa phần chân trang HTML ?>
