<!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon">
          <img src="{{ url('/') }}/assets/img/logo1.png">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: white;">Ruang Guru</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Data Siswa</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Siswa</h6>
            <a class="collapse-item" href="{{ url('admin/kelas') }}">Kelas</a>
            <a class="collapse-item" href="{{ url('admin/siswa') }}">Siswa</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/') }}/" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Makul</h6>
            <a class="collapse-item" href="{{ url('admin/materi') }}">Matapelajaran</a>
            <a class="collapse-item" href="{{ url('admin/tugas') }}">Tugas</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/user') }}">
          <i class="fas fa-users"></i>
          <span>Data Guru</span>
        </a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/nilai') }}">
          <i class="fas fa-file"></i>
          <span>Nilai Siswa</span>
        </a>
      </li>
      <hr class="sidebar-divider">
    
    </ul>
<!-- Sidebar -->
