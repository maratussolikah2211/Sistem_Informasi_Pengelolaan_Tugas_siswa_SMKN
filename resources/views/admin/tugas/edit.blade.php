@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Edit Tugas Siswa')
@section('content')


<!-- Container Fluid-->
     <div class="container-fluid" id="container-wrapper">
         
          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Tugas Siswa</h6>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/tugas/update', $tugas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama tugas</label>
                      <input type="text" name="nama_tugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Masukkan Nama Materi" value="{{ $tugas->nama_tugas }}" required>
                    </div>
                     
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Pilih Materi</label>
                        <select class="form-control" name="id_materi" id="exampleFormControlSelect1">
                              <option value="{{ $tugas->id_materi }}">{{ $tugas->materi->nama_matapelajaran }}</option>
                                @foreach ($materi as $u )
                              <option value="{{ $u->id }}">{{ $u->nama_matapelajaran }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Dokumen tugas</label>
                      <input type="file" accept=".pdf" name="dokumen" value="{{ $tugas->dokumen }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-success" href="{{ url('admin/tugas') }}">Kembali</a>
                  </form>
                </div>
              </div>
     </div>
   <!---Container Fluid-->


@endsection