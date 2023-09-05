@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Data Siswa')
@section('content')


<!-- Container Fluid-->
     <div class="container-fluid" id="container-wrapper">
         
          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Siswa</h6>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/siswa/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Siswa</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Siswa" required>
                    </div>

                     <div class="form-group">
                          <label for="exampleFormControlSelect1">Kelas</label>
                          <select class="form-control" name="id_kelas" id="exampleFormControlSelect1">
                                <option selected disabled>-- Pilih Kelas --</option>
                                @foreach ($list_kelas as $k )
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}{{ $k->jurusan }}</option>
                                @endforeach
                          </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIS</label>
                      <input type="text" name="nis" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Masukkan nis Siswa">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email siswa" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
     </div>
   <!---Container Fluid-->


@endsection