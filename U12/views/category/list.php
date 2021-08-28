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
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <h4>Xin chào: <?php if($_SESSION['auth']) { echo $_SESSION['auth']['name'] ;}?></h4>
        <a href="?admin=admin&mod=category&act=create" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <?php foreach ($categories as $cate) {?>
            <tr>
                <td><?= $cate['id']; ?></td>
                <td><?= $cate['cate_name']; ?></td>
                <td>
                    <img src="<?= $cate['avatar']; ?>" width="100px" height="100px">
                </td>
                <td><?= $cate['desception']; ?></td>
                <td>
                    <a href="index.php?admin=admin&mod=category&act=detail&id=<?= $cate['id']?>" class="btn btn-primary">Detail</a>
                    <a href="index.php?admin=admin&mod=category&act=edit&id=<?= $cate['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="index.php?admin=admin&mod=category&act=delete&id=<?= $cate['id']; ?>" class="btn btn-danger">Delete</a>
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
