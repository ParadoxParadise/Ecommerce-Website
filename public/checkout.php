<?php require_once('..\kresources\config.php'); // Yêu cầu tệp config.php từ thư mục kresources để kết nối cơ sở dữ liệu và thiết lập cấu hình cần thiết ?>
<?php include(TEMPLATE_FRONT.DS.'header.php'); // Bao gồm tệp header.php từ TEMPLATE_FRONT.DS, thường chứa phần đầu trang và thanh điều hướng ?>

<!-- Nội dung Trang -->
<div class="container">

    <!-- Hiển thị thông báo nếu có lỗi hoặc thành công -->
    <div class="row">
        <h4 class="text-center bg-danger"><?php display_message(); // Hiển thị thông báo từ hàm display_message() ?></h4>
        <h1>Thanh toán</h1> <!-- Tiêu đề cho trang thanh toán -->

        <!-- Form thanh toán qua PayPal -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_cart"> <!-- Đặt chế độ giỏ hàng cho PayPal -->
            <input type="hidden" name="business" value="tendai2@business.com"> <!-- Email tài khoản nhận thanh toán PayPal -->
            <input type="hidden" name="currency_code" value="&#36">
            <input type="hidden" name="upload" value="1"> <!-- Thiết lập upload giỏ hàng cho PayPal -->

            <!-- Bảng hiển thị sản phẩm trong giỏ hàng -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng phụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php cart(); // Gọi hàm cart() để hiển thị các sản phẩm trong giỏ hàng ?>
                </tbody>
            </table>

            <!-- Vị trí nút thanh toán PayPal -->
            <div id="paypal-payment-button"></div>
            <script src="https://www.paypal.com/sdk/js?client-id=AWxwoQjx9AGZIjNMQNynlagNl6-WT5AKQhb6ZwJXEF830-k9cusmnkC-50pH_H_RccKLyQLE0rA7nMGi&disable-funding=credit,card"></script>

            <?php echo show_paypal(); // Hiển thị nút PayPal từ hàm show_paypal() ?>
        </form>

        <!-- Tổng số tiền của giỏ hàng -->
        <div class="col-xs-4 pull-right ">
            <h2>Tổng giỏ hàng</h2>

            <table class="table table-bordered" cellspacing="0">
                <tr class="cart-subtotal">
                    <th>Số lượng sản phẩm:</th>
                    <td><span class="amount"><?php 
                    // Hiển thị tổng số lượng sản phẩm trong giỏ hàng
                    echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
                </tr>
                <tr class="shipping">
                    <th>Phí vận chuyển</th>
                    <td>Miễn phí</td> <!-- Phí vận chuyển miễn phí -->
                </tr>
                <tr class="order-total">
                    <th>Tổng số tiền đơn hàng</th>
                    <td><strong><span class="amount">&#36;<?php 
                    // Hiển thị tổng tiền của đơn hàng
                    echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?>
                    <script src="payment_button.js"></script>
                    </span></strong></td>
                </tr>
            </table>
        </div><!-- Kết thúc phần tổng giỏ hàng -->
    </div><!-- Kết thúc nội dung chính -->

</div><!-- Kết thúc container -->

<?php include(TEMPLATE_FRONT.DS.'footer.php'); // Bao gồm tệp footer.php từ TEMPLATE_FRONT.DS, thường chứa phần chân trang HTML ?>
