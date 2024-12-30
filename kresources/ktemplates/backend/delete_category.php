<?php
require_once("..\..\config.php"); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu

// Kiểm tra nếu có tham số 'id' trong URL
if (isset($_GET['id'])) {
    
    // Truy vấn xóa danh mục có `cat_id` bằng giá trị `id` từ URL
    $query = query("DELETE FROM categories WHERE cat_id = " . escape_string($_GET['id']) . " ");
    confirm($query); // Xác nhận rằng truy vấn đã được thực thi thành công

    // Đặt thông báo rằng danh mục đã bị xóa
    set_message("Danh Mục Đã Bị Xóa");

    // Chuyển hướng về trang danh mục trong trang quản trị
    redirect("..\..\..\public\admin\index.php?categories");

} else {
    // Nếu không có `id` trong URL, chuyển hướng về trang danh mục trong trang quản trị
    redirect("..\..\..\public\admin\index.php?categories");
}
?>
