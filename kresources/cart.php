<?php
require_once('config.php'); // Yêu cầu tệp config.php để kết nối cơ sở dữ liệu và thiết lập cấu hình

// Xử lý thêm sản phẩm vào giỏ hàng
if (isset($_GET['add'])) {
    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while ($row = fetch_array($query)) {
        if ($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {
            $_SESSION['product_' . $_GET['add']] += 1;
            redirect("..\public\checkout.php"); // Chuyển hướng người dùng đến trang thanh toán
        } else {
            set_message("Chỉ còn " . $row['product_quantity'] . " " . "{$row['product_title']}" . " trong kho");
            redirect("..\public\checkout.php");
        }
    }
}

// Xử lý giảm số lượng sản phẩm trong giỏ hàng
if (isset($_GET['remove'])) {
    $_SESSION['product_' . $_GET['remove']]--;

    if ($_SESSION['product_' . $_GET['remove']] < 1) {
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect("..\public\checkout.php");
    } else {
        redirect("..\public\checkout.php");
    }
}

// Xóa sản phẩm khỏi giỏ hàng
if (isset($_GET['delete'])) {
    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
    redirect("..\public\checkout.php");
}

// Hàm hiển thị các sản phẩm trong giỏ hàng
function cart() {
    $total = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;
    foreach ($_SESSION as $name => $value) {
        if ($value > 0) {
            if (substr($name, 0, 8) == "product_") {
                $length = strlen($name);
                $id = substr($name, 8, $length);
                $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                confirm($query);
                while ($row = fetch_array($query)) {
                    $sub = $row['product_price'] * $value;
                    $item_quantity += $value;
                    $product_photo = display_images($row['product_image']);
                    $product = <<<DELIMETER
<tr>
  <td>{$row['product_title']}<br>
    <img width='100' src='../kresources/{$product_photo}'>
  </td>
  <td>&#36;{$row['product_price']}</td>
  <td>{$value}</td>
  <td>&#36;{$sub}</td>
  <td>
    <a class='btn btn-warning' href="..\kresources\cart.php?remove={$row['product_id']}"><span class='glyphicon glyphicon-minus'></span></a>
    <a class='btn btn-success' href=" ..\kresources\cart.php?add={$row['product_id']}"><span class='glyphicon glyphicon-plus'></span></a>
    <a class='btn btn-danger' href=" ..\kresources\cart.php?delete={$row['product_id']}"><span class='glyphicon glyphicon-remove'></span></a>
  </td>
</tr>
<input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
<input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
<input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
<input type="hidden" name="quantity_{$quantity}" value="{$value}">
DELIMETER;
                    echo $product;
                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                }
                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;
            }
        }
    }
}

// Hàm hiển thị nút PayPal
function show_paypal() {
    if (isset($_SESSION['item_quantity'])) {
        $paypal_button = <<<DELIMETER
<input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - Cách thanh toán an toàn, dễ dàng hơn">
DELIMETER;
        return $paypal_button;
    }
}

// Hàm xử lý giao dịch khi thanh toán qua PayPal
function process_transaction() {
    if (isset($_GET['tx'])) {
        $amount = $_GET['amt'];
        $currency = $_GET['cc'];
        $transaction = $_GET['tx'];
        $status = $_GET['st'];

        $total = 0;
        $item_quantity = 0;
        foreach ($_SESSION as $name => $value) {
            if ($value > 0) {
                if (substr($name, 0, 8) == "product_") {
                    $length = strlen($name);
                    $id = substr($name, 8, $length);

                    $send_order = query("INSERT INTO orders(order_amount, order_transaction, order_status, order_currency) VALUES ('{$amount}', '{$transaction}', '{$status}', '{$currency}')");
                    $last_id = last_id();
                    confirm($send_order);

                    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                    confirm($query);
                    while ($row = fetch_array($query)) {
                        $sub = $row['product_price'] * $value;
                        $item_quantity += $value;
                        $product_price = $row['product_price'];
                        $product_title = $row['product_title'];
                        $insert_report = query("INSERT INTO reports(product_id, order_id, product_price, product_title, product_quantity) VALUES ('{$id}', '{$last_id}', '{$product_price}', '{$product_title}', '{$value}')");
                        confirm($insert_report);
                    }
                    $total += $sub;
                }
            }
        }
        session_destroy(); // Hủy phiên sau khi giao dịch hoàn tất
    } else {
        redirect("index.php"); // Chuyển hướng về trang chủ nếu không có giao dịch
    }
}
?>
