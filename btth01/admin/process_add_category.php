<?php
    include 'db.php';

    // Lấy dữ liệu từ form
    $categoryName = filter_input(INPUT_POST, 'txtCatName', FILTER_SANITIZE_STRING);

    // Kiểm tra dữ liệu nhập vào
    if (empty($categoryName)) {
        echo '<div class="alert alert-danger">Vui lòng nhập tên thể loại.</div>';
        exit();
    }

    // Kiểm tra trùng lặp
    $sql = "SELECT * FROM theloai WHERE ten_tloai = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $categoryName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger">Thể loại này đã tồn tại.</div>';
        exit();
    }

    // Lấy giá trị lớn nhất hiện tại của ma_tloai
    $sql = "SELECT MAX(ma_tloai) AS max_id FROM theloai";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $new_id = $row['max_id'] + 1;

    // Thêm mới thể loại với ma_tloai mới
    $sql = "INSERT INTO theloai (ma_tloai, ten_tloai) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('is', $new_id, $categoryName);

    // Kiểm tra kết quả của câu lệnh INSERT
    if ($stmt->execute()) {
        echo '<div class="alert alert-success">Thêm thể loại thành công!</div>';
        header('Location: category.php');
        exit();
    } else {
        echo '<div class="alert alert-danger">Có lỗi xảy ra khi thêm thể loại: ' . $stmt->error . '</div>';
    }

    $stmt->close();
    $conn->close();
?>