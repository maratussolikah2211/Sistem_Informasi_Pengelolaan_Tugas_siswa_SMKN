@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Data Tugas Siswa')
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
                        <th>Nama Siswa </th>
                        <th>Status Koreksi Tugas</th>
                        <th>Nilai </th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($list_nilai as $t)
                         <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $t->tugas->nama_tugas}} </td>
                              <td> {{ $t->siswa->name}} </td>
                              <td> {{ $t->status }} </td>
                              <td> {{ $t->nilai }} </td>
                              <td>
                                   <div class="btn btn-group">
                                        <a href="{{ url('admin/nilai', $t->id) }}/edit"
                                            class="btn btn-warning"><i class="fa fa-edit"></i></a> &nbsp; 
                                        <a href="{{ url('admin/nilai/show', $t->id) }}"
                                            class="btn btn-success"><i class="fa fa-eye"></i></a>&nbsp;
                                        <form action="{{ url('admin/nilai/destroy', $t->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                             @csrf
                                             <button type="submit" class="btn btn-danger">
                                                  <i class="fa fa-trash"></i>
                                             </button>
                                        </form>
                         
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