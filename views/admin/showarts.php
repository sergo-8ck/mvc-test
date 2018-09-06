<div class="container">
  <div class="card mb-3">
    <div class="card-header">Filter</div>
    <div class="card-body">
      <form action="?" method="GET">
        <div class="row">

          <div class="col-sm-3">
            <div class="form-group">
              <label for="name" class="col-form-label">Название</label>
              <input id="name" class="form-control" name="name" value="">
            </div>
          </div>

          <div class="col-sm-2">
            <div class="form-group">
              <label class="col-form-label">&nbsp;</label><br>
              <button type="submit" class="btn btn-primary">Поиск</button>
              <a href="?" class="btn btn-outline-secondary">Clear</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <table class="table table-striped">
    <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Content</th>
      <th>Created</th>
      <th>Updated</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($arg1 == false) {
      echo "there is no data" . "<br>";
    } else {
      foreach ($arg1['notes'] as $d) {
        ?>


        <tr>
          <td><?php echo $d['id'] ?></td>
          <td>
            <a href="<?php echo URL ?>admin/updatecur/<?php echo $d['id'] ?>">
              <?php echo $d['name'] ?>
            </a>
          </td>
          <td><?php echo $d['content'] ?></td>
          <td><?php echo $d['created_at'] ?></td>
          <td><?php echo $d['updated_at'] ?></td>
          <td>
            <a href="<?php echo URL ?>admin/updatecur/<?php echo $d['id'] ?>" class="btn btn-primary">Edit</a>
            <a href="<?php echo URL ?>admin/deletecur/<?php echo $d['id'] ?>/<?php echo $arg1['cur_page'] ?>"
               class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php
      }
    }
    ?>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <?php
        for ($p = 1; $p <= $arg1['total_pages']; $p++) {
          if ($p == $arg1['cur_page']) {
            ?>
            <li class="page-item active"><a href="<?php echo URL ?>admin/showarts/<?php echo $p ?>" class="page-link"><?php echo $p ?></a></li>
            <?php
          } else {
            ?>
        <li class="page-item"><a href="<?php echo URL ?>admin/showarts/<?php echo $p ?>" class="page-link"><?php echo $p ?></a></li>
            <?php
          }
        }
        ?>

      </ul>
    </nav>


    </tbody>
  </table>
</div>