<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POST ---</h3>
        <a href="?mod=posts&act=create" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Contents</th>
                <th>Thumbnail</th>
                <th>Action</th>
            </thead>
            <?php foreach ($posts as $ps) {?>
            <tr>
                <td><?= $ps['id']; ?></td>
                <td><?= $ps['title']; ?></td>
                <td><?= $ps['short_contents']; ?></td>
                <td>
                    <img src="<?= $ps['thumbail']; ?>" width="100px" height="100px">
                </td>
                <td>
                    <a href="index.php?mod=posts&act=detail&id=<?= $ps['id']?>" class="btn btn-primary">Detail</a>
                    <a href="index.php?mod=posts&act=edit&id=<?= $ps['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="index.php?mod=posts&act=delete&id=<?= $ps['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
          <?php } ?>
            <tr>
                <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
