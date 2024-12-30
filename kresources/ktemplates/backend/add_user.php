<?php add_user(); // Gọi hàm PHP để thêm người dùng khi biểu mẫu được gửi ?>
<h1 class="page-header">
    Thêm Người Dùng
    <small>Trang</small>
</h1>

<div class="col-md-6 user_image_box">
    <span id="user_admin" class="fa fa-user fa-4x"></span> <!-- Icon người dùng lớn để hiển thị ảnh đại diện -->
</div>

<!-- Form Thêm Người Dùng -->
<form action="" method="post" enctype="multipart/form-data">

    <div class="col-md-6">

        <!-- Chọn ảnh đại diện cho người dùng -->
        <div class="form-group">
            <input type="file" name="file">
        </div>

        <!-- Tên đăng nhập -->
        <div class="form-group">
            <label for="username">Tên Đăng Nhập</label>
            <input type="text" name="username" class="form-control">
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>

        <!-- Mật khẩu -->
        <div class="form-group">
            <label for="password">Mật Khẩu</label>
            <input type="password" name="password" class="form-control">
        </div>

        <!-- Nút Xóa và nút Thêm người dùng -->
        <div class="form-group">
            <a id="user-id" class="btn btn-danger" href="">Xóa</a> <!-- Nút xóa, hiện tại không có liên kết -->
            <input type="submit" name="add_user" class="btn btn-primary pull-right" value="Thêm Người Dùng">
        </div>

    </div>

</form>
