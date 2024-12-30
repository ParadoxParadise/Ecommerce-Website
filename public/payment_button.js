paypal
  .Buttons({
    // Tùy chỉnh kiểu dáng của nút PayPal
    style: {
      color: "blue", // Đặt màu của nút thành màu xanh
      shape: "pill", // Đặt hình dạng nút là dạng viên thuốc (pill)
    },

    // Hàm để tạo đơn hàng khi người dùng nhấp vào nút
    createOrder: function (data, actions) {
      return actions.order.create({
        purchase_units: [
          {
            // Đơn vị mua hàng (purchase units)
            amount: {
              value: "0.1", // Giá trị của đơn hàng là 0.1 (đơn vị tiền tệ theo cấu hình PayPal)
            },
          },
        ],
      });
    },

    // Hàm thực hiện khi giao dịch được phê duyệt thành công
    onApprove: function (data, actions) {
      return actions.order.capture().then(function (details) {
        console.log(details); // In thông tin chi tiết giao dịch vào console để kiểm tra
        // Điều hướng đến trang cảm ơn khi thanh toán thành công
        window.location.replace(
          "http://127.0.0.1/Ecommerce/public/thank_you.php?tx=345354&amt=345&cc=CNY&st=Completed"
        );
      });
    },

    // Hàm thực hiện khi giao dịch bị hủy
    onCancel: function (data) {
      // Điều hướng đến trang cảm ơn hoặc trang khác khi người dùng hủy giao dịch
      window.location.replace(
        "http://127.0.0.1/Ecommerce/public/thank_you.php?tx=345354&amt=345&cc=CNY&st=Completed"
      );
    },
  })
  .render("#paypal-payment-button"); // Kết xuất nút PayPal vào phần tử có ID là 'paypal-payment-button'
