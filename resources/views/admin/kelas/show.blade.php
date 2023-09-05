@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Detail Data Kelas')
@section('content')




<!-- Outline Buttons -->
          <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Detail Data Kelas</h6>
                </div>
                <div class="card-body">
                  <tr>
                    <th><strong><i class="fas fa-user-alt mr-1"></i> Nama Guru :</strong></th>
                    <th>{{ $kelas->user->name }}</th>
                  </tr> <hr>
                  <tr>
                    <th><strong><i class="fas fa-qrcode mr-1"></i> NIP Guru :</strong></th>
                    <th>{{ $kelas->user->nip }}</th>
                  </tr> <hr>
                  <tr>
                    <th><strong><i class="fas fa-home"></i> Nama Kelas :</strong></th>
                    <th>{{ $kelas->nama_kelas }}</th>
                  </tr> <hr>
                  <tr>
                    <th><strong><i class="fas fa-cubes"></i> Jurusan :</strong></th>
                    <th>{{ $kelas->jurusan }}</th>
                  </tr> <hr>

                  
                  <a class="btn btn-success" href="{{ url('admin/kelas') }}">Kembali</a>
                </div>
              </div>
          </div>



@endsection