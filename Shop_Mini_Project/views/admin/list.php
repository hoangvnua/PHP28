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
        .name{
            width: 75%;
        }
        .bt{
            width: 15%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- Quản lý shop ---</h3>
        <h4>Xin chào: <?php if($_SESSION['auth']) { echo $_SESSION['auth']['name'] ;}?></h4>
        <a href="?admin=client&mod=home&act=home" target="__blank" class="btn btn-primary">Xem shop</a>
        <table class="table">
            <thead>
                <th>Name</th>
                <th class="bt">Action</th>
            </thead>
            <?php foreach ($cs as $chinh) {?>
            <tr>
                <td class="name"><?= $chinh['name']; ?></td>
                <td class="bt">
                    <a href="index.php?admin=admin&mod=admin&act=listdetail&id=<?= $chinh['id']; ?>" class="btn btn-primary">Chỉnh sửa</a>
                </td>
            </tr>
          <?php } ?>
            <tr>
                <td>
                    <a href="index.php?admin=auth&mod=auth&act=logout" class="btn btn-primary">Logout</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
