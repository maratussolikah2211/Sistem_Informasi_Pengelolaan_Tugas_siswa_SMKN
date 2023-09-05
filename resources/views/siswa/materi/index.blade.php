@extends('template.siswa.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Tugas Yang Sudag Dikerjakan')
@section('content')

 

          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Tugas Selesai</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Tugas </th>
                        <th>Status Koreksi Tugas</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($data as $t)
                         <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $t->tugas->nama_tugas }} </td>
                              <td> {{ $t->status }} </td>
                              <td>
                                   <div class="btn btn-group">
                                        <a href="{{ url('siswa/nilai/show', $t->id)}}"
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