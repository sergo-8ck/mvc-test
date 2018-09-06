<?php
if (!isset($_SESSION['authUser'])) {
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">Login</div>

          <div class="card-body">
            <form method="POST" action="">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                  <input type="text" name="login" class="form-control" value="" required="" autofocus="">

                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required="">

                </div>
              </div>
              <?php if (!empty($arg1['error'])) : ?>
                <p><?php echo $arg1['error'] ?></p>
              <?php endif; ?>
              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <input type="submit" name="goAuth" class="btn btn-primary" value="Войти">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
} else {

}
?>
