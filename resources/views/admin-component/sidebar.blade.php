<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/images/logoWhite.png') }}" class="w-75">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminDashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Konten
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
           aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Section</h6>
                <a class="collapse-item" href="{{ route('adminHomeCarousel') }}">Banner</a>
                <a class="collapse-item" href="{{ route('adminHomeAbout') }}">Tentang Kami</a>
                <a class="collapse-item" href="{{ route('adminHomeAchievement') }}">Penghargaan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-music"></i>
            <span>Tentang Kami</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Halaman</h6>
                <a class="collapse-item" href="{{ route('adminAboutAbout') }}">Paragita UI</a>
                <a class="collapse-item" href="{{ route('adminAboutCoach') }}">Pelatih</a>
            </div>
        </div>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
           aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-trophy"></i>
            <span>Penghargaan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kategori</h6>
                <a class="collapse-item" href="{{ route('adminAchievementYear') }}">Tahun</a>
                <a class="collapse-item" href="{{ route('adminAchievementAchievement') }}">Penghargaan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminGallery') }}">
            <i class="fas fa-fw fa-image"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
