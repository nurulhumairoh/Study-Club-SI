
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

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
       <a class="nav-link" href="{{route('dasboard')}}"> 
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Bikin controller untuk mahasiswa resource (php artisan make:controller mahasiswacontroller --resource) -->
    <!-- setelah itu bikin route resourcenya (route:resource('mahasiswa',mahasiswacontroller:class);) -->
    <!-- use App\Http\Controllers\Mahasiswacontroller; -->
    <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Mahasiswa</span>
       </a>
       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             <h6 class="collapse-header">Custom Mahasiswa:</h6>
             <a class="collapse-item" href="{{route('mahasiswa.index')}}">Tabel Mahasiswa</a>
             <a class="collapse-item" href="{{route('mahasiswa.create')}}">Tambah Mahasiswa</a>
          
          </div>
       </div>
    </li>

 </ul>