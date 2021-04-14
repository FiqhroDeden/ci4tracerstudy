<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Tracer Study</b>Unpatti</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Selama Datang, Silahkan Login dibawah ini</p>

      <form action="<?= route_to('login') ?>" method="post">
      <?= csrf_field() ?>
        <?php if ($config->validFields === ['email']): ?>
            <div class="input-group mb-3">
               <input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>">
            <div class="invalid-feedback"><?= session('errors.login') ?></div>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php else: ?>
            <div class="input-group mb-3">
               <input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
            <div class="invalid-feedback"><?= session('errors.login') ?></div>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <?php endif; ?>
        
        <div class="input-group mb-3">
          <input type="password"  name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          <?php if ($config->allowRemembering): ?>
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
            <?php endif; ?>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <?php if ($config->activeResetter): ?>
      <p class="mb-1">
        <a href="<?= route_to('forgot') ?>">I forgot my password</a>
      </p>
      <?php endif; ?>
      <?php if ($config->allowRegistration) : ?>
      <p class="mb-0">
        <a href="<?= route_to('register') ?>" class="text-center">Register</a>
      </p>
      <?php endif; ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<?= $this->endSection(); ?>