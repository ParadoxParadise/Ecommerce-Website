<div class="row">
    <!-- Hiển thị thông báo nếu có -->
    <h3 class="bg-success"><?php display_message(); ?></h3>

    <!-- Form thêm slide mới -->
    <div class="col-xs-3">
        <form action="" method="post" enctype="multipart/form-data">
            <?php add_slides(); ?> <!-- Gọi hàm thêm slide -->

            <div class="form-group">
                <input type="file" name="file"> <!-- Trường tải lên tệp hình ảnh slide -->
            </div>

            <div class="form-group">
                <label for="title">Tiêu Đề Slide</label>
                <input type="text" name="slide_title" class="form-control"> <!-- Trường nhập tiêu đề cho slide -->
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" name="add_slide" value="Thêm Slide"> <!-- Nút thêm slide -->
            </div>
        </form>
    </div>

    <!-- Khu vực hiển thị slide hiện tại -->
    <div class="col-xs-8">
        <?php get_current_slide_in_admin(); ?> <!-- Gọi hàm hiển thị slide hiện tại trong phần quản trị -->
    </div>
</div>
<!-- Kết thúc ROW -->

<hr>

<h1>Các Slide Đã Có</h1> <!-- Tiêu đề cho danh sách slide -->

<div class="row">
    <?php get_slide_thumbnails(); ?> <!-- Gọi hàm hiển thị hình thu nhỏ của các slide đã có -->
</div>
