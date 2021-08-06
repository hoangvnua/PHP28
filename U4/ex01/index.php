<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nhập thông tin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="add_sinh_vien.php" method="POST" role="form">
            <legend>Nhập thông tin sinh viên</legend>
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" class="form-control" id="" name="name">
            </div>

            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="radio" id="" name="gioi_tinh" value="Nam"> Nam
                <input type="radio" id="" name="gioi_tinh" value="Nữ"> Nữ
            </div>

            <div class="form-group">
                <label for="">Sinh nhật</label>
                <input type="text" class="form-control" id="" name="sinh_nhat">
            </div>

            <div class="form-group">
                <label for="">Quê quán</label>
                <input type="text" class="form-control" id="" name="que_quan">
            </div>

            <div class="form-group">
                <label for="">Ngoại ngữ</label>
                <input type="checkbox" id="" name="ngoai_ngu[]" value="Tiếng Anh"> Tiếng Anh
                <input type="checkbox" id="" name="ngoai_ngu[]" value="Tiếng Nhật"> Tiếng Nhật
                <input type="checkbox" id="" name="ngoai_ngu[]" value="Tiếng Pháp"> Tiếng Pháp
            </div>

            <div class="form-group">
                <label for="">Thông tin thêm</label>
                <textarea name="thong_tin_them" class="form-control" rows="8"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="btn_login">Gửi</button>
        </form>
    </div>
</body>
</html>
