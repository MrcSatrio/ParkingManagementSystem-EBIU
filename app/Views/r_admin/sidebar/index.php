<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>admin/dashboard">
  <div class="sidebar-brand-icon">
    <img src="<?= base_url() ?>assets/img/pipiw.png" style="width: 150px; height: 100px;">
  </div>
</a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Users
    </div>

    <!-- Nav Item Tambah Data Pengguna -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>admin/read">
            <i class="fa fa-users"></i>
            <span>Users List</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>admin/create">
            <i class="fa fa-user-plus"></i>
            <span>Tambah User</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transaksi
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>admin/transaksi_inputkodebooking">
            <i class="bi bi-input-cursor"></i>
            <span>Input Kode Booking</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>admin/transaksi_riwayat">
            <i class="fas fa-clock"></i>
            <span>Riwayat Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
<<<<<<< HEAD
        <a class="nav-link" href="<?= base_url(); ?>admin/listPengumuman">
=======
        <a class="nav-link" href="<?= base_url(); ?>admin/form_upload">
>>>>>>> dbb67e3273eef7bff4a1fc456c3cc1b6c9ba7636
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span></a>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>