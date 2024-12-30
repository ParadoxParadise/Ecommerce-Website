<h1 class="page-header">
    Chỉnh Sửa Người Dùng
    <small>Edwin</small> <!-- Hiển thị tên người dùng hoặc một tiêu đề phụ -->
</h1>

<!-- Hộp ảnh người dùng -->
<div class="col-md-6 user_image_box">
    <a href="#" data-toggle="modal" data-target="#photo-library">
        <img class="img-responsive" src="" alt=""> <!-- Ảnh đại diện của người dùng, có thể nhấp để mở modal -->
    </a>
</div>

<!-- Form chỉnh sửa người dùng -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">

        <!-- Trường tải ảnh đại diện mới -->
        <div class="form-group">
            <input type="file" name="file">
        </div>

        <!-- Tên đăng nhập -->
        <div class="form-group">
            <label for="username">Tên Đăng Nhập</label>
            <input type="text" name="username" class="form-control">
        </div>

        <!-- Tên đầu -->
        <div class="form-group">
            <label for="first name">Tên</label>
            <input type="text" name="first_name" class="form-control">
        </div>

        <!-- Họ -->
        <div class="form-group">
            <label for="last name">Họ</label>
            <input type="text" name="last_name" class="form-control">
        </div>

        <!-- Mật khẩu -->
        <div class="form-group">
            <label for="password">Mật Khẩu</label>
            <input type="password" name="password" class="form-control">
        </div>

        <!-- Nút Xóa và Cập Nhật -->
        <div class="form-group">
            <a id="user-id" class="btn btn-danger" href="">Xóa</a> <!-- Nút xóa người dùng, hiện tại không có liên kết cụ thể -->
            <input type="submit" name="update_user" class="btn btn-primary pull-right" value="Cập Nhật">
        </div>
    </div>
</form>
