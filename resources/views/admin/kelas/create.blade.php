@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Tambah Kelas')
@section('content')


   <!-- Container Fluid-->
     <div class="container-fluid" id="container-wrapper">
         
          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kelas</h6>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/kelas/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Pilih Guru</label>
                              <select class="form-control" name="id_guru" id="exampleFormControlSelect1">
                                   <option value="" selected disabled>-- Pilih Nama Pengguna --</option>
                                   @foreach ($user as $data)
                                   <option value="{{ $data->id }}">{{ $data->name }}</option>
                                   @endforeach
                              </select>
                              @error('id_guru')
                                   <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                         
                         <div class="form-group">
                              <label for="exampleInput">Ruang Kelas</label>
                              <input type="text" name="nama_kelas" class="form-control" id="exampleInput" placeholder="Nama Kelas">
                              @error('nama_kelas')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>

                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Pilih Jurusan</label>
                              <select class="form-control" name="jurusan" id="exampleFormControlSelect1">
                                   <option value="" selected disabled>-- Pilih Nama Jurusan --</option>
                                   <option value="AKL">Akuntansi Keuangan Lembaga</option>
                                   <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                                   <option value="ATP">Agribisnis Tanaman Perkebunan</option>
                              </select>
                              @error('jurusan')
                                   <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
          
                         <button type="submit" class="btn btn-primary">Simpan</button>
                         <a class="btn btn-success" href="{{ url('admin/kelas') }}">Kembali</a>
                  </form>
                </div>
              </div>

     </div>
   <!---Container Fluid-->


@endsection