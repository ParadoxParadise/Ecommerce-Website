<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h1 class="page-header">
                Tất Cả Sản Phẩm <!-- Tiêu đề trang hiển thị tất cả sản phẩm -->
            </h1>
            <h3 class="bg-success"><?php display_message(); ?></h3> <!-- Hiển thị thông báo thành công nếu có -->

            <!-- Bảng hiển thị thông tin sản phẩm -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th> <!-- Cột mã sản phẩm -->
                        <th>Tiêu Đề</th> <!-- Cột tiêu đề sản phẩm -->
                        <th>Danh Mục</th> <!-- Cột danh mục sản phẩm -->
                        <th>Giá</th> <!-- Cột giá sản phẩm -->
                        <th>Số Lượng</th> <!-- Cột số lượng sản phẩm -->
                    </tr>
                </thead>
                <tbody>
                    <?php get_products_in_admin(); ?> <!-- Gọi hàm `get_products_in_admin()` để hiển thị danh sách sản phẩm -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
