@extends('template.siswa.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Data Tugas')
@section('content')

 

          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Tugas Siswa</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama materi </th>
                        <th>Nama Tugas</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($list_tugas as $t)
                         <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $t->materi->nama_materi }} </td>
                              <td> {{ $t->nama_tugas }} </td>
                              <td>
                                   <div class="btn btn-group">
                                        <a href="{{ url('siswa/tugas/show', $t->id)}}"
                                             class="btn btn-warning"><i class="fa fa-eye"></i></a> &nbsp; 
                                   </div>
                              </td>
                         </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>




@endsection