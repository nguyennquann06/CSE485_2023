<?php
    include 'db.php';

    // Kiểm tra xem có tham số 'id' được truyền qua URL hay không
    if (isset($_GET['id'])) {
        // Lấy giá trị của tham số 'id' và gán vào biến $categoryId
        $categoryId = $_GET['id'];

        // Xác thực ID (tùy chọn, ví dụ: kiểm tra xem là số nguyên dương)
        if (!is_numeric($categoryId) || $categoryId <= 0) {
            // Nếu ID không hợp lệ, chuyển hướng về trang danh sách thể loại với thông báo lỗi
            header('Location: category.php?error=invalid_id');
            exit();
        }

        // Chuẩn bị câu lệnh SQL để xóa thể loại
        $sql = "DELETE FROM theloai WHERE ma_tloai = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $categoryId);

        // Thực thi câu lệnh SQL
        if ($stmt->execute()) {
            // Nếu xóa thành công, chuyển hướng về trang danh sách thể loại với thông báo thành công
            header('Location: category.php?success=deleted');
            exit();
        } else {
            // Nếu xóa thất bại, chuyển hướng về trang danh sách thể loại với thông báo lỗi
            header('Location: category.php?error=delete_failed');
            exit();
        }

        // Đóng câu lệnh
        $stmt->close();
    } else {
        // Nếu không tìm thấy tham số 'id', chuyển hướng về trang danh sách thể loại với thông báo lỗi
        header('Location: category.php?error=no_id');
        exit();
    }

    // Đóng kết nối đến cơ sở dữ liệu
    $conn->close();
?>