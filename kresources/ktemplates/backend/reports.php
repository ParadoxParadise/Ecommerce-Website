<h1 class="page-header">
   Báo Cáo <!-- Tiêu đề trang hiển thị các báo cáo -->
</h1>

<h3 class="bg-success"><?php display_message(); ?></h3> <!-- Hiển thị thông báo thành công nếu có -->

<!-- Bảng hiển thị thông tin báo cáo -->
<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th> <!-- Cột mã báo cáo -->
            <th>Mã Sản Phẩm</th> <!-- Cột mã sản phẩm -->
            <th>Mã Đơn Hàng</th> <!-- Cột mã đơn hàng -->
            <th>Giá</th> <!-- Cột giá của sản phẩm -->
            <th>Tiêu Đề Sản Phẩm</th> <!-- Cột tiêu đề của sản phẩm -->
            <th>Số Lượng Sản Phẩm</th> <!-- Cột số lượng sản phẩm -->
        </tr>
    </thead>
    <tbody>
        <?php get_reports(); ?> <!-- Gọi hàm `get_reports()` để hiển thị danh sách báo cáo -->
    </tbody>
</table>
