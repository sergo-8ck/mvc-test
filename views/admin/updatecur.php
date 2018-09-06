<?php
if($_SESSION['arg'] == false){
}else{
  echo "article was updated" . "<br>";
}
?>
<div class="container">
  <div class="bd-example" data-example-id="">
    <form action="<?php echo URL ?>admin/updatecur/<?php echo $arg1[0]['id'] ?>" method="post">
      <input type="hidden" name="id" value="<?php echo $arg1[0]['id'] ?>">
      <div class="form-group">
        <label for="exampleInputName">Название</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="<?php echo $arg1[0]['name']?>">
      </div>
      <div class="form-group">
        <label for="exampleTextarea">Описание статьи</label>
        <textarea name="text" class="form-control" id="exampleTextarea" rows="3"><?php echo $arg1[0]['content']?></textarea>
      </div>
      <input type="submit" name="ok" class="btn btn-primary">
    </form>
  </div>
</div>