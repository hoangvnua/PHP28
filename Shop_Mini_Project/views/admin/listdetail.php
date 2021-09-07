<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style>
        .id {
            width: 10%;
        }

        .name {
            width: 60%;
        }

        .bt {
            width: 30%;
            text-align: center;
        }

        .full {

            text-align: center;
        }

        .full td a {
            width: 30%;
        }

        .right{
            float: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center">--- <?= $name['name'] ?> ---</h3>
        <h4>Xin chào: <?php if ($_SESSION['auth']) {
                            echo $_SESSION['auth']['name'];
                        } ?></h4>
        
        <tr class="right">
            <td>
                <a href="?admin=admin&mod=admin&act=list" class="btn btn-primary">Back</a>
            </td>
            <td>
                <a href="index.php?admin=auth&mod=auth&act=logout" class="btn btn-primary right">Logout</a>
            </td>
        </tr>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th class="bt">Action</th>
            </thead>
            <?php foreach ($menu as $mn) { ?>
                <tr>
                    <td class="id"><?= $mn['id']; ?></td>
                    <td class="name"><?= $mn['name']; ?></td>
                    <td class="bt">
                        <a href="index.php?admin=admin&mod=admin&act=edit&id=<?= $mn['id']; ?>" class="btn btn-success">Edit</a>
                        <a href="index.php?admin=admin&mod=admin&act=delete&id=<?= $mn['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            <?php if ($_GET['id'] == 4) { ?>
                <tr class="full">
                    <td colspan="3">
                        <a href="?admin=admin&mod=admin&act=create" class="btn btn-primary">Thêm mới</a>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</body>

</html>