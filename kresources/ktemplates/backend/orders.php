<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            Tất Cả Đơn Hàng <!-- Tiêu đề trang hiển thị tất cả đơn hàng -->
        </h1>
        <h4 class="bg-success" align="center"><?php display_message(); ?></h4> <!-- Hiển thị thông báo thành công nếu có -->
    </div>

    <div class="row">
        <!-- Bảng hiển thị thông tin đơn hàng -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>I.D</th> <!-- Cột mã đơn hàng -->
                    <th>Số Tiền</th> <!-- Cột số tiền của đơn hàng -->
                    <th>Giao Dịch</th> <!-- Cột mã giao dịch -->
                    <th>Loại Tiền</th> <!-- Cột loại tiền tệ -->
                    <th>Trạng Thái</th> <!-- Cột trạng thái đơn hàng -->
                </tr>
            </thead>
            <tbody>
                <?php display_order(); ?> <!-- Gọi hàm `display_order()` để hiển thị các dòng dữ liệu của từng đơn hàng -->
            </tbody>
        </table>
    </div>
</div>
