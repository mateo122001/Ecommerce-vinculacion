<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo bg-green">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>TO</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>TiendaOnline</b></span>
  </a>
  <!-- Barra de navegación de encabezado: el estilo se puede encontrar en header.less -->
  <nav class="navbar navbar-static-top bg-green">
    <!-- Botón de alternancia de la barra lateral-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Navegación de palanca</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Cuenta de usuario: el estilo se puede encontrar en el menú desplegable. -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $admin['firstname'].' '.$admin['lastname']; ?>
                <small>Miembro desde <?php echo date('M. Y', strtotime($admin['created_on'])); ?></small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Perfil</a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>