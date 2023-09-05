@extends('template.siswa.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Detail Tugas')
@section('content')

 


     <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
         
          <div class="row">
            <div class="col-lg-10 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Detail Tugas</h6>
                    <a class="btn btn-primary" href="{{ url('siswa/tugas/create', $tugas->id) }}">Kerjakan Tugas</a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <tbody>
                      <tr>
                        <td>Nama Materi : {{ $tugas->materi->nama_materi }}</td>
                      </tr>
                      <tr>
                        <td>Nama Tugas : {{ $tugas->nama_tugas }}</td>
                      </tr>
                      <tr>
                        <td>Dokumen Tugas</td>
                      </tr>
                      <tr>
                        <td>
                        <embed src="{{ asset($tugas->dokumen) }}" width="800" height="1000" type="application/pdf">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                   
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
     <!---Container Fluid-->



@endsection