 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url(); ?>/asset/img/logo.png" alt="Unpatti Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tracer Study Unpatti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if(logged_in()): ?>
            <li class="nav-item">
              <a href="/tracerstudy" class="nav-link">
              <i class="nav-icon far fa fa-graduation-cap"></i>
              <p>Tracer Study</p>
            </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
              <i class="nav-icon far fa fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
            </li>
            <li class="nav-item">
              <a href="<?= route_to('logout') ?>" class="nav-link">
              <i class="nav-icon far fa fa-sign-in-alt"></i>
              <p>Logout</p>
            </a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="<?= route_to('login') ?>" class="nav-link">
              <i class="nav-icon far fa fa-sign-in-alt"></i>
              <p>Login</p>
            </a>
          </li>
          <?php endif; ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>