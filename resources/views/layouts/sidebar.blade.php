<style>
    .logo{
        width: 50px;
        height: 50px;
        float: left;
        line-height: 20px;
    }
</style>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon">
            <img class="logo" src="{{asset('frontend')}}/img/logobpd.png">
        </div>
        <div class="sidebar-brand-text mx-3">iPOS MBLB</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
  

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('karyawan')}}">Karyawan</a>
                <a class="collapse-item" href="{{route('admin')}}">Admin</a>
                <a class="collapse-item" href="{{route('customer')}}">Customer</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pembeli</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('truk')}}">Truk</a>
              
               
            </div>
        </div>
    </li>

    <!-- Divider -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('company')}}">
            <i class="fas fa-fw fa-building"></i>
            <span>Penjual</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{route('products')}}">
            <i class="fas fa-fw fa-box"></i>
            <span>Produk</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{route('kategori')}}">
            <i class="fas fa-fw fa-filter"></i>
            <span>Kategori Pajak</span></a>
    </li>

    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Laporan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('transaksi')}}">Transaksi</a>
            <a class="collapse-item" href="{{route('pembayaran')}}">Pembayaran</a>
               
            </div>
        </div>
    </li>

  

</ul>