<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>

    <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                        <?php if(!empty($error)) { ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php } ?>


<?php if(!empty($identity)) { ?>
    <div class="alert alert-success"><?= $identity ?></div>
<?php } ?>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?= @$form_open ?>
                    <div class="form-group">
                      <input type="text" name="inputNI" id="inputNI" class="form-control form-control-user"  placeholder="Identitas">
                    </div>
                    <div class="form-group">
                      <input type="password" name="inputPassword" id="inputPassword" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                 <?= @$form_close ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

  </div>
    </div>
    <script src="<?= base_url('media/sbadmin2/js/sb-admin-2.min.js') ?>" type="text/javascript"></script>
</body>

