<?php require_once('..\kresources\config.php'); // Yêu cầu tệp config.php để thiết lập cấu hình và kết nối cơ sở dữ liệu ?>
<?php require_once('..\kresources\cart.php'); // Yêu cầu tệp cart.php để sử dụng các chức năng giỏ hàng ?>

<!-- Lưu ý: Đoạn mã này có thể gây lỗi trong hệ thống, nếu xảy ra lỗi, hãy kiểm tra khu vực này để khắc phục -->

<?php include(TEMPLATE_FRONT.DS.'header.php'); // Bao gồm tệp header.php, thường chứa phần đầu trang và thanh điều hướng ?>
<?php process_transaction(); // Gọi hàm process_transaction() để xử lý giao dịch sau khi thanh toán thành công ?>

<!-- Nội dung Trang -->
<div class="container">
    <h1 class="text-center">Cảm Ơn Bạn</h1> <!-- Tiêu đề cảm ơn người dùng sau khi hoàn tất giao dịch -->
</div>
<!-- Kết thúc container -->

<?php include(TEMPLATE_FRONT.DS.'footer.php'); // Bao gồm tệp footer.php chứa phần chân trang HTML ?>
