<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    @role('admin')
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bengkelin Admin</div>
    </a>
    @endrole

    @role('user')
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bengkelin User</div>
    </a>
    @endrole

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    @role('admin')
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Master Data</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"></h6>
                    <a class="collapse-item" href="{{ route('montir.index') }}">Data Montir</a>
                    <a class="collapse-item" href="{{ route('pelanggan.index') }}">Data Pelanggan</a>
                    <a class="collapse-item" href="{{ route('motor.index') }}">Data Motor</a>
                    <a class="collapse-item" href="{{ route('sparepart.index') }}">Data Sparepart</a>
                    <a class="collapse-item" href="{{ route('supplier.index') }}">Data Supplier</a>
                    <a class="collapse-item" href="{{ route('service.index') }}">Data Service</a>
                    <a class="collapse-item" href="{{ route('detailservice.index') }}">Data Detail Service</a>
                    <a class="collapse-item" href="{{ route('index-pembayaran') }}">Data Pembayaran</a>
                </div>
            </div>
        </li>
    @endrole


    @role('user')
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>User Data</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"></h6>
                    <a class="collapse-item" href="{{ route('index-motor') }}">Data Motor User</a>
                    <a class="collapse-item" href="{{ route('index-pelanggan') }}">Data Pelanggan</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('index-service') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Pesan Jasa</span></a>
        </li>
    @endrole

    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
        <!-- Nav Item - Tables -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('index-page') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Landing Page</span></a>
        </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
