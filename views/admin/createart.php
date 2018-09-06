<div class="container">
  <div class="bd-example" data-example-id="">
    <form action="<?php echo URL ?>admin/createart" method="post">
      <div class="form-group">
        <label for="name">Название</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="name">
      </div>
      <div class="form-group">
        <label for="exampleTextarea">Описание статьи</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="text"></textarea>
      </div>
      <input type="submit" name="ok" class="btn btn-primary">
    </form>
  </div>
</div>