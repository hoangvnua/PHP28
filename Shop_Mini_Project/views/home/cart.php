<?php $tong =0 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop manager</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style>
        .id{
            width: 10%;
        }
        
        .bt{
            width: 15%;
            text-align: center;
        }
        .right{
            width: 100%;
            float: right;
        }
        .right p{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- Giỏ Hàng ---</h3>
        <a href="index.php?admin=client&mod=home&act=home" class="btn btn-primary">Back</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Images</th>
                <th>Name</th>
                <th>Số Lượng</th>
                <th>Thành tiền</th>
                <th class="bt">Action</th>
            </thead>
            <?php foreach ($cart as $chinh) {?>
            <tr>
                <td class="id"><?= $chinh['id']; ?></td>
                <td><img src="<?= $chinh['images']; ?>" alt="" width="150px"></td>
                <td class="name"><?= $chinh['name']; ?></td>
                <td>
                    <a href="index.php?admin=client&mod=home&act=increment&id=<?= $chinh['id']; ?>" class="btn btn-primary">+</a>
                    <?= $chinh['soluong']; ?>
                    <a href="index.php?admin=client&mod=home&act=decrement&id=<?= $chinh['id']; ?>" class="btn btn-primary">-</a>
                </td>
                <td><?= $gia =$chinh['price']* $chinh['soluong'] ?></td>
                <td class="bt">
                    <a href="index.php?admin=client&mod=home&act=delete&id=<?= $chinh['id']; ?>" class="btn btn-primary">Xóa</a>
                </td>
            </tr>
            <?php $tong+=$gia?>
          <?php } ?>
            <tr>
                <td class="right">
                    <p>Tổng: <?= number_format( $tong)?> VND</p>
                    
                </td>
                <td>
                    <a href="index.php?admin=auth&mod=auth&act=logout" class="btn btn-primary">Thanh toán</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
