<div class="col-lg-12">
    <h1 class="page-header">
        Người Dùng <!-- Tiêu đề của trang hiển thị danh sách người dùng -->
    </h1>

    <p class="bg-success">
        <?php display_message(); ?> <!-- Hiển thị thông báo nếu có, ví dụ: người dùng được thêm hoặc xóa thành công -->
    </p>

    <!-- Nút thêm người dùng mới -->
    <a href="index.php?add_user" class="btn btn-primary">Thêm Người Dùng</a>

    <div class="col-md-12">
        <!-- Bảng hiển thị thông tin người dùng -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th> <!-- Cột mã người dùng -->
                    <th>Tên Đăng Nhập</th> <!-- Cột tên đăng nhập của người dùng -->
                    <th>Email</th> <!-- Cột email của người dùng -->
                </tr>
            </thead>
            <tbody>
                <?php display_users(); ?> <!-- Gọi hàm `display_users()` để hiển thị danh sách người dùng từ cơ sở dữ liệu -->
            </tbody>
        </table> <!-- Kết thúc bảng hiển thị người dùng -->
    </div>
</div>
