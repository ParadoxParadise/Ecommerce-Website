<?php
require_once("..\..\config.php"); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu

// Kiểm tra nếu có tham số 'id' trong URL
if (isset($_GET['id'])) {
    
    // Truy vấn xóa đơn hàng có `order_id` bằng giá trị `id` từ URL
    $query = query("DELETE FROM orders WHERE order_id = " . escape_string($_GET['id']) . "");
    confirm($query); // Xác nhận rằng truy vấn đã được thực thi thành công

    // Đặt thông báo rằng đơn hàng đã bị xóa
    set_message("Đơn Hàng Đã Bị Xóa");

    // Chuyển hướng về trang danh sách đơn hàng trong trang quản trị
    redirect("..\..\..\public\admin\index.php?orders");

} else {
    // Nếu không có `id` trong URL, chuyển hướng về trang danh sách đơn hàng trong trang quản trị
    redirect("..\..\..\public\admin\index.php?orders");
}
?>
