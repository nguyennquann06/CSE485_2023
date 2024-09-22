<?php
include 'db.php'; // Kết nối đến cơ sở dữ liệu

// Chuẩn bị câu lệnh SQL để lấy danh sách tác giả
$sql = "SELECT * FROM tacgia";
$result = $conn->query($sql);

// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    echo '<table class="table table-striped table-bordered">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Mã tác giả</th>';
    echo '<th scope="col">Tên tác giả</th>';
    echo '<th scope="col">Hình ảnh</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Lặp qua từng tác giả trong kết quả
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["ma_tgia"] . '</td>';
        echo '<td>' . $row["ten_tgia"] . '</td>';
        echo '<td>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "Không tìm thấy tác giả nào.";
}

// Đóng kết nối
$conn->close();
?>