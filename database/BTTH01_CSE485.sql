use BTTH01_CSE485

a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trư tình (2 đ)
SELECT DISTINCT ma_bviet, ten_bhat
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE baiviet.ma_tloai=2;

b. Liệt kê các bài viết của tác giả “Nhacvietplus” (2 đ)
SELECT DISTINCT ma_bviet, ten_bhat
FROM baiviet 
INNER JOIN tacgia on baiviet.ma_tgia =tacgia.ma_tgia
WHERE baiviet.ma_tgia = 1;

c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. (2 đ)
SELECT theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;

d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên
thể loại, ngày viết. (2 đ)
SELECT 
    baiviet.ma_bviet AS 'Mã bài viết',
    baiviet.tieude AS 'Tên bài viết',
    baiviet.ten_bhat AS 'Tên bài hát',
    tacgia.ten_tgia AS 'Tên tác giả',
    theloai.ten_tloai AS 'Tên thể loại',
    baiviet.ngayviet AS 'Ngày viết'
FROM baiviet
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

e. Tìm thể loại có số bài viết nhiều nhất (2 đ)
SELECT top 1 theloai.ten_tloai, COUNT(*) AS so_bai_viet
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY theloai.ten_tloai
ORDER BY so_bai_viet DESC

f. Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)
SELECT TOP 2 tg.ten_tgia, COUNT(*) AS so_bai_viet
FROM baiviet bv
INNER JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
GROUP BY tg.ten_tgia
ORDER BY so_bai_viet DESC;


g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thưong”, “anh”,
“em” (2 đ)
SELECT tieude, ten_bhat 
FROM baiviet bv
WHERE bv.ten_bhat LIKE '%yêu%' 
   OR bv.ten_bhat LIKE '%thương%' 
   OR bv.ten_bhat LIKE '%anh%' 
   OR bv.ten_bhat LIKE '%em%';


i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên
thể loại và tên tác giả (2 đ)
CREATE VIEW vw_Music AS
SELECT 
    bv.tieude AS TenBaiViet,
    tl.ten_tloai AS TenTheLoai,
    tg.ten_tgia AS TenTacGia
FROM 
    baiviet bv
INNER JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
INNER JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia;
SELECT * FROM vw_Music;


j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. (2 đ
CREATE PROCEDURE sp_DSBaiViet
    @TenTheLoai nvarchar(50)
AS
BEGIN
    -- Khai báo biến để kiểm tra số lượng bản ghi trả về
    DECLARE @RowCount int;

    -- Truy vấn lấy danh sách bài viết theo thể loại
    SELECT bv.tieude AS TenBaiViet
    FROM baiviet bv
    INNER JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
    WHERE tl.ten_tloai = @TenTheLoai;

    -- Kiểm tra số lượng bản ghi trả về
    SET @RowCount = @@ROWCOUNT;

    -- Nếu không tìm thấy bản ghi nào, hiển thị thông báo lỗi
    IF @RowCount = 0
    BEGIN
        RAISERROR('Thể loại không tồn tại', 16, 1);
    END
END
EXEC sp_DSBaiViet 'Nhạc Trữ Tình';


Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo. (2 đ)
ALTER TABLE theloai 
ADD SLBaiViet INT DEFAULT 0;
select * from theloai
