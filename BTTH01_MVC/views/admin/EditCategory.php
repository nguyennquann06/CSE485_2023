<div class="row">
    <div class="col-sm">
        <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
        <form action=".././models/process_add_category.php" method="post">
            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                <input type="text" class="form-control" name="txtCatId" readonly value="1">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                <input type="text" class="form-control" name="txtCatName" value="Nhạc trữ tình">
            </div>

            <div class="form-group  float-end ">
                <input type="submit" value="Lưu lại" class="btn btn-success">
                <a href=".././controllers/CategoryController.php" class="btn btn-warning ">Quay lại</a>
            </div>
        </form>
    </div>
</div>