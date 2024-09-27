<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <a href=".././controllers/AddCategoryController.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php
                include '.././configs/db.php'; // Kết nối CSDL

                // Truy vấn lấy danh sách thể loại
                $sql = "SELECT ma_tloai, ten_tloai FROM theloai";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Hiển thị thể loại
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['ma_tloai'] . "</td>";
                        echo "<td>" . $row['ten_tloai'] . "</td>";
                        echo "<td><a href='.././controllers/EditCategory.php?id=" . $row["ma_tloai"] . "'><i class='fa fa-edit'></i></a></td>";
                        echo "<td><a href='.././models/delete_category.php?id=" . $row["ma_tloai"] . "'><i class='fa fa-trash'></i></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Không có thể loại nào.";
                }
                ?>
            </table>
        </div>
    </div>
</main>