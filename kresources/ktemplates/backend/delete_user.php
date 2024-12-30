<?php
require_once("..\..\config.php"); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu

// Kiểm tra nếu có tham số 'id' trong URL
if (isset($_GET['id'])) {

    // Truy vấn xóa người dùng có `user_id` bằng giá trị `id` từ URL
    $query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
    confirm($query); // Xác nhận rằng truy vấn đã được thực thi thành công

    // Đặt thông báo rằng người dùng đã bị xóa
    set_message("Người Dùng Đã Bị Xóa");

    // Chuyển hướng về trang danh sách người dùng trong trang quản trị
    redirect("..\..\..\public\admin\index.php?users");

} else {
    // Nếu không có `id` trong URL, chuyển hướng về trang danh sách người dùng trong trang quản trị
    redirect("..\..\..\public\admin\index.php?users");
}
?>
