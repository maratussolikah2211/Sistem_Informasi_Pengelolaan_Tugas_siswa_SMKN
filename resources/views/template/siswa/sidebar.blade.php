<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" >
        <div class="sidebar-brand-icon">
          <img src="{{ url('/') }}/assets/img/logo1.png">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: white;">Ruang Siswa</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
     
      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('siswa/tugas') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Tugas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('siswa/nilai') }}">
          <i class="fas fa-users"></i>
          <span>Nilai</span>
        </a>
      </li>
      </li>
      <hr class="sidebar-divider">
    
    </ul>
<!-- Sidebar -->
