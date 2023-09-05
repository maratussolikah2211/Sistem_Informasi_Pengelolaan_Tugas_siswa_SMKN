@extends('template.siswa.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Kerjakan Tugas Anda')
@section('content')







  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
         
         <div class="row">
           <div class="col-lg-6">
             <!-- Form Basic -->
             <div class="card mb-4">
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Tambah Tugas Siswa</h6>
               </div>
               <div class="card-body">
                 <form action="{{ url('siswa/tugas/store') }}" method="POST" enctype="multipart/form-data">
                   @csrf

                   <input type="hidden" name="id_tugas" value="{{$ambil}}">

                    <div class="form-group">
                         <label for="exampleInputEmail1">Kirim Tugas Anda</label>
                         <input type="file" accept=".pdf" name="jawaban" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                         placeholder="Masukkan Nama Materi" required>
                    </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <a class="btn btn-success" href="{{ url('siswa/tugas') }}">Kembali</a>
                 </form>
               </div>
             </div>
     </div>
  <!---Container Fluid-->







@endsection