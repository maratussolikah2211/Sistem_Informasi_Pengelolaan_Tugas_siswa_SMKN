@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Tambah Guru')
@section('content')


   <!-- Container Fluid-->
     <div class="container-fluid" id="container-wrapper">
         
          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Guru</h6>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/user/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                         <div class="form-group">
                              <label for="exampleInput">Nama</label>
                              <input type="text" name="name" class="form-control" id="exampleInput" placeholder="Nama Pengguna">
                              @error('name')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Pilih Hak Akses</label>
                              <select class="form-control" name="role" id="exampleFormControlSelect1">
                                   <option value="" selected disabled>-- Pilih Role --</option>
                                   <option value="admin">Admin</option>
                                   <option value="guru">Guru</option>
                              </select>
                              @error('role')
                                   <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                         <div class="form-group">
                              <label for="exampleInput">NIP</label>
                              <input type="number" name="nip" class="form-control" id="exampleInput" placeholder="NIP Pengguna">
                              @error('nip')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                         <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              @error('email')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                         <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              @error('password')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                         <div class="form-group">
                              <label for="exampleFormControlTextarea1">Alamat</label>
                              <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                              @error('alamat')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>
                         <button type="submit" class="btn btn-primary">Simpan</button>
                         <a class="btn btn-success" href="{{ url('admin/user') }}">Kembali</a>
                  </form>
                </div>
              </div>

     </div>
   <!---Container Fluid-->


@endsection