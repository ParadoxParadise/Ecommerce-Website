<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Thêm Sản Phẩm
            <?php add_product(); // Gọi hàm PHP để thêm sản phẩm khi biểu mẫu được gửi ?>
        </h1>
    </div>

    <!-- Form Thêm Sản Phẩm -->
    <form action="" method="post" enctype="multipart/form-data">

        <div class="col-md-8">

            <!-- Tiêu đề Sản Phẩm -->
            <div class="form-group">
                <label for="product-title">Tên Sản Phẩm</label>
                <input type="text" name="product_title" class="form-control">
            </div>

            <!-- Mô tả Sản Phẩm -->
            <div class="form-group">
                <label for="product-title">Mô tả Sản Phẩm</label>
                <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <!-- Giá Sản Phẩm -->
            <div class="form-group row">
                <div class="col-xs-3">
                    <label for="product-price">Giá Sản Phẩm</label>
                    <input type="number" name="product_price" class="form-control" size="60">
                </div>
            </div>

            <!-- Mô tả Ngắn Gọn -->
            <div class="form-group">
                <label for="product-title">Mô tả Ngắn Gọn</label>
                <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>
            
        </div> <!-- Kết thúc Main Content -->

        <!-- SIDEBAR -->

        <aside id="admin_sidebar" class="col-md-4">

            <!-- Nút Lưu Nháp và Xuất Bản -->
            <div class="form-group">
                <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Lưu Nháp">
                <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Xuất Bản">
            </div>

            <!-- Danh Mục Sản Phẩm -->
            <div class="form-group">
                <label for="product-title">Danh Mục Sản Phẩm</label>
                <select name="product_category_id" id="" class="form-control">
                    <option value="">Chọn Danh Mục</option>
                    <?php show_categories_add_product(); // Gọi hàm để hiển thị danh sách các danh mục sản phẩm ?>
                </select>
            </div>

            <!-- Số Lượng Sản Phẩm -->
            <div class="form-group">
                <label for="product-title">Số Lượng Sản Phẩm</label>
                <input type="number" name="product_quantity" class="form-control">
            </div>

            <!-- Ảnh Sản Phẩm -->
            <div class="form-group">
                <label for="product-title">Ảnh Sản Phẩm</label>
                <input type="file" name="file">
            </div>

        </aside> <!-- Kết thúc SIDEBAR -->

    </form> <!-- Kết thúc Form Thêm Sản Phẩm -->
</div>
