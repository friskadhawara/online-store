
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/Dashboard_admin')?>">
                <div class="sidebar-brand-icon rotate-n-30">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">QHomeMart</div>
            </a>
              <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/Dashboard_admin')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> 
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/Databarang')?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Barang</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/Invoice')?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoice</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

          


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->