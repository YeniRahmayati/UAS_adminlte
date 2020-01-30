
<?php $this->load->view('templates/header') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Tugas</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Tugas</b>Akhir</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <b>Menu
      </a>

   
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 <?php $this->load->view('templates/sidebar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php $this->load->view($contents) ?>
      <!-- /.row -->
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('templates/footer')?>
  </body>
</html>
