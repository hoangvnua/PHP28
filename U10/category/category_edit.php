<?php
  require_once('connection.php');
  // Lấy ra category cần sửa
  $id =(isset($_GET['id'])?$_GET['id']:0) ;
  if($id==0){
    echo "Không hợp lệ!";
  }

  $sql = "SELECT * FROM categories WHERE id = ".$id;

  $category = $conn->query($sql)->fetch_assoc();

  // Lấy ra danh sách category để cho vào option lựa chọn danh mục cha con
   $sql = "SELECT id,name,thumbnail,description FROM categories WHERE parent_id is Null";

   $results = $conn->query($sql);

   $categories = array();

   while($row = $results->fetch_assoc()){
     $categories[] = $row;
   }

  ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>DevMind - Education And Technology Group</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

     <!-- Optional theme -->
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

     <!-- Latest compiled and minified JavaScript -->
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
     <div class="container">
     <h3 align="center">Zent - Education And Technology Group</h3>
     <h3 align="center">Update Category</h3>
     <hr>
         <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
             <div class="form-group">
                 <label for="">Name</label>
                 <input type="hidden" name="id" value="<?= $category['id']?>">
                 <input type="text" class="form-control" value="<?= $category['name']?>" placeholder="" name="name">
             </div>
             <div class="form-group">
                 <label for="">Description</label>
                 <input type="text" class="form-control" value="<?= $category['description']?>" placeholder="" name="description">
             </div>
             <div class="form-group">
                 <label for="">Thumbnail</label>
                 <img src="<?= $category['thumbnail'] ?>" width="100px" height="100px">
                 <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
             </div>
             <div class="form-group">
                 <label for="">Parent</label>
                 <select name="parent_id" class="form-control">
                   <option value="0">Danh mục cha</option>
                   <?php foreach ($categories as $cate) {?>
                     <option <?php if($category['parent_id']==$cate['id']) echo "selected" ?> value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                   <?php } ?>
                 </select>
             </div>
             <button type="submit" class="btn btn-primary">Update</button>
         </form>
     </div>
 </body>
 </html>
