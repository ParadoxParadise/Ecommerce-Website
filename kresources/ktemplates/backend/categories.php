<?php add_category(); // Gọi hàm PHP để thêm danh mục mới khi biểu mẫu được gửi ?>

<h1 class="page-header">
    Danh Mục Sản Phẩm
</h1>

<div class="col-md-4">
    <h3 class="bg-success"><?php display_message(); // Hiển thị thông báo nếu có ?></h3>

    <!-- Form Thêm Danh Mục -->
    <form action="" method="post">
        <div class="form-group">
            <label for="category-title">Tên Danh Mục</label>
            <input type="text" name="cat_title" class="form-control"> <!-- Trường nhập tên danh mục -->
        </div>

        <div class="form-group">
            <input type="submit" name="add_category" class="btn btn-primary" value="Thêm Danh Mục"> <!-- Nút thêm danh mục -->
        </div>
    </form>
</div>

<div class="col-md-8">
    <!-- Bảng hiển thị các danh mục sản phẩm -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu Đề</th>
            </tr>
        </thead>

        <tbody>
            <?php show_categories_in_admin(); // Hiển thị danh sách các danh mục trong bảng ?>
        </tbody>
    </table>
</div>
