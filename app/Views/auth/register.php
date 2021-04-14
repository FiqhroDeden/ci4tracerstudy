<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Tracer Study</b>Unpatti</a>
    </div>
    <div class="card-body">
    <?= view('Myth\Auth\Views\_message_block') ?>
      <p class="login-box-msg">Silahkan Mengisi Form Register Dibawah ini</p>
      
      <form action="<?= route_to('register') ?>" method="post">
      <?= csrf_field() ?>
        <div class="input-group mb-3">
        <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="<?= route_to('login') ?>" class="text-center">Sudah Punya Akun?</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<?= $this->endSection(); ?>