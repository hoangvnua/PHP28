<?php
    include_once 'views/banner/header.php';
?>
    <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="cate_name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <!-- <input type="text" class="form-control" id="" placeholder="" name="description"> -->
                <textarea name="desception" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar">
            </div>
            <div class="form-group">
                <label for="">Parent</label>
                <select name="parent_id" class="form-control">
                  <option value="0">Danh mục cha</option>
                  <?php foreach ($categories as $cate) {?>
                    <option value="<?= $cate['id'] ?>"><?= $cate['cate_name'] ?></option>
                  <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description')
</script>
<?php
    include_once 'views/banner/footer.php';
?>
