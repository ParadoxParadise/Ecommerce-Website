<?php
require_once("..\..\kresources\config.php"); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu

// Kiểm tra nếu có tham số 'delete_slide_id' trong URL
if (isset($_GET['delete_slide_id'])) {

    // Truy vấn để tìm tên tệp ảnh của slide dựa trên `slide_id` từ URL
    $query_find_image = query("SELECT slide_image FROM slides WHERE slide_id = " . escape_string($_GET['delete_slide_id']) . " LIMIT 1 ");
    confirm($query_find_image);

    // Lấy dữ liệu ảnh từ kết quả truy vấn
    $row = fetch_array($query_find_image);
    $target_path = UPLOAD_DIRECTORY . DS . $row['slide_image']; // Đường dẫn đầy đủ tới tệp ảnh cần xóa

    // Xóa tệp ảnh khỏi thư mục tải lên
    unlink($target_path);

    // Xóa thông tin slide từ cơ sở dữ liệu
    $query = query("DELETE FROM slides WHERE slide_id = " . escape_string($_GET['delete_slide_id']) . " ");
    confirm($query);

    // Đặt thông báo rằng slide đã bị xóa
    set_message("Slide Đã Bị Xóa");

    // Chuyển hướng về trang danh sách slide trong trang quản trị
    redirect("index.php?slides");

} else {
    // Nếu không có `delete_slide_id` trong URL, chuyển hướng về trang danh sách slide trong trang quản trị
    redirect("index.php?slides");
}
?>
