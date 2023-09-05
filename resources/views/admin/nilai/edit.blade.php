@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','From Nilai Siswa')
@section('content')





   <!-- Container Fluid-->
     <div class="container-fluid" id="container-wrapper">         
          <div class="row">
           <div class="col-lg-6">
             <!-- Form Basic -->
             <div class="card mb-4">
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Tambah Nilai Siswa</h6>
               </div>
               <div class="card-body">
                 <form action="{{ url('admin/nilai/update', $nilai->id) }}" method="post" enctype="multipart/form-data">
                   @csrf
                  
                         <input type="hidden" name="id_siswa" value="{{ $nilai->id_siswa }}">
                         <input type="hidden" name="id_tugas" value="{{ $nilai->id_tugas }}">

                        <div class="form-group">
                             <label for="exampleInput">Nilai</label>
                             <input type="number" name="nilai" class="form-control" id="exampleInput" placeholder="Masukkan nilai">
                             @error('nilai')
                               <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                             @enderror
                        </div>

                        <div class="form-group">
                             <label for="exampleInput">Jawaban Benar</label>
                             <input type="number" name="benar" class="form-control" id="exampleInput" placeholder="Masukkan Jawaban Benar">
                             @error('benar')
                               <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                             @enderror
                        </div>

                        <div class="form-group">
                             <label for="exampleInput">Jawaban Salah</label>
                             <input type="number" name="salah" class="form-control" id="exampleInput" placeholder="Masukkan Jawaban Salah">
                             @error('salah')
                               <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                             @enderror
                        </div>
         
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ url('admin/nilai') }}">Kembali</a>
                 </form>
               </div>
          </div>
     </div>

  <!---Container Fluid-->







@endsection