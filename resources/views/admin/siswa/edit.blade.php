@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Edit Data Siswa')
@section('content')



   <!-- Container Fluid-->
   <div class="container-fluid" id="container-wrapper">
         
         <div class="row">
           <div class="col-lg-6">
             <!-- Form Basic -->
             <div class="card mb-4">
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Tambah Siswa</h6>
               </div>
               <div class="card-body">
                 <form action="{{ url('admin/siswa/update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                   @csrf
                        <div class="form-group">
                             <label for="exampleInput">Nama</label>
                             <input type="text" name="name" class="form-control" required id="exampleInput" placeholder="Nama Pengguna" value="{{ $siswa->name }}">
                        </div>
                        <div class="form-group">
                              <label for="exampleFormControlSelect1">Pilih Kelas</label>
                              <select class="form-control" name="id_kelas" id="exampleFormControlSelect1">
                                   <option value="{{ $siswa->id_kelas }}">{{ $siswa->kelas->nama_kelas }}{{ $siswa->kelas->jurusan }}</option>
                                   @foreach ($kelas as $k)
                                   <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                   @endforeach
                              </select>
                              @error('id_kelas')
                                   <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                              @enderror
                         </div>

                        <div class="form-group">
                             <label for="exampleInput">NIS</label>
                             <input type="number" name="nis" class="form-control" required id="exampleInput" placeholder="NIS Pengguna" value="{{ $siswa->nis }}">     
                        </div>
                        <div class="form-group">
                             <label for="exampleInputEmail1">Email</label>
                             <input type="email" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $siswa->email }}">  
                        </div>
                        <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
               </div>
             </div>

    </div>
  <!---Container Fluid-->




@endsection