<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .error{
        color: red;
    }
</style>
</head>
<body>
<div class="container">
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="?admin=admin&mod=admin&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
                <p class="error"><?php  if(isset($_SESSION['error']['name'])){ echo $_SESSION['error']['name']; unset($_SESSION['error']['name']); }?></p>
            </div>
            <div class="form-group">
                <label for="">Ảnh 1</label>
                <input type="file" class="form-control" id="exampleFormControlFile1" placeholder="" name="images1">
                <p class="error"><?php  if(isset($_SESSION['error']['images1'])){ echo $_SESSION['error']['images1']; unset($_SESSION['error']['images1']); } ?></p>
                
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" id="" placeholder="" name="price">
                <p class="error"><?php  if(isset($_SESSION['error']['price'])){ echo $_SESSION['error']['price']; unset($_SESSION['error']['price']);}   ?></p>

            </div>
            <div class="form-group">
                <label for="">Giá sale</label>
                <input type="number" class="form-control" id="" placeholder="" name="price_sale">
                <p class="error"><?php  if(isset($_SESSION['error']['price_sale'])){ echo $_SESSION['error']['price_sale']; unset($_SESSION['error']['price_sale']);} ?></p>

            </div>
            <div class="form-group">
                <input type="hidden" class="hiden" value="1" name="status">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>