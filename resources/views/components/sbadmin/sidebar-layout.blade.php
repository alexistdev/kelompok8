<div>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
    @if(Auth::user()->role_id == '3')
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{($tagSubMenu == 'dashboard')?"active":""}}">
            <a class="nav-link" href="{{route('user.dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu User
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item {{($tagSubMenu == 'belanja')?"active":""}}">
            <a class="nav-link" href="{{route('user.belanja')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Belanja</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item {{($tagSubMenu == 'transaksi')?"active":""}}">
            <a class="nav-link" href="{{route('user.transaksi')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Transaksi</span></a>
        </li>
        @elseif(Auth::user()->role_id == '2')
        <!-- Nav Item - Dashboard -->
            <li class="nav-item {{($tagSubMenu == 'dashboard')?"active":""}}">
                <a class="nav-link" href="{{route('toko.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Toko
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item {{($tagSubMenu == 'belanja')?"active":""}}">
                <a class="nav-link" href="{{route('toko.produk')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Produk</span></a>
            </li>


        @else
     @endif

    </ul>
</div>
