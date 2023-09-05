@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','User')
@section('content')

dd($user)
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Materi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Pegawai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Siswa</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$siswa}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Kelas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kelas}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <div class="text-center">
            <img src="{{ url('/') }}/img/think.svg" style="max-height: 90px">
            <h4 class="pt-3">Selamat Datang <b>{{ auth()->user()->name }}</b>
            <br> Lihat Data Siswa mu disini!</h4>
          </div>

     </div>
     <!---Container Fluid--> 


@endsection