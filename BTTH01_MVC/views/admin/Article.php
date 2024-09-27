<?php
include '.././configs/db.php'; // Kết nối đến cơ sở dữ liệu


// Chuẩn bị câu lệnh SQL để lấy danh sách bài viết
$sql = "SELECT * FROM baiviet";
$result = $conn->query($sql);

// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    echo '<table class="table table-striped table-bordered">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Mã bài viết</th>';
    echo '<th scope="col">Tiêu đề</th>';
    echo '<th scope="col">Tóm tắt</th>';
    echo '<th scope="col">Thể loại</th>';
    echo '<th scope="col">Tác giả</th>';
    echo '<th scope="col">Ngày viết</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Lặp qua từng bài viết trong kết quả
    while ($row = $result->fetch_assoc()) {
        // Hiển thị thông tin bài viết
        echo '<tr>';
        echo '<td>' . $row["ma_bviet"] . '</td>'; // Hiển thị mã bài viết
        echo '<td>' . $row["tieude"] . '</td>'; // Tiêu đề
        echo '<td>' . $row["tomtat"] . '</td>'; // Tóm tắt

        // Lấy tên thể loại
        $sql_theloai = "SELECT ten_tloai FROM theloai WHERE ma_tloai = " . $row["ma_tloai"];
        $result_theloai = $conn->query($sql_theloai);
        $ten_theloai = $result_theloai->fetch_assoc()["ten_tloai"];

        echo '<td>' . $ten_theloai . '</td>'; // Thể loại

        $sql_tacgia = "SELECT ten_tgia FROM tacgia WHERE ma_tgia = " . $row["ma_tgia"];
        $result_tacgia = $conn->query($sql_tacgia);
        $ten_tacgia = $result_tacgia->fetch_assoc()["ten_tgia"];

        echo '<td>' . $ten_tacgia . '</td>'; // Tác giả
        echo '<td>' . $row["ngayviet"] . '</td>'; // Ngày tạo
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'Không tìm thấy bài viết nào.';
}

// Đóng kết nối
$conn->close();
