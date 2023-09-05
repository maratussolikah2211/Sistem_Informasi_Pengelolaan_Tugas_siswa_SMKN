@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Data Kelas')
@section('content')

 
 
    <!-- Row -->
    <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kelas</h6>
                  <a href="{{ url('admin/kelas/create')}}" class="btn btn-dark float-right">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Pengajar</th>
                        <th>NIP</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($kelas as $data)
                         <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $data->user->name }} </td>
                              <td> {{ $data->user->nip }} </td>
                              <td> {{ $data->nama_kelas }} </td>
                              <td> {{ $data->jurusan }} </td>
                              <td>
                                   <div class="btn btn-group">
                                        <a href="{{ url('admin/kelas', $data->id) }}/edit"
                                            class="btn btn-warning"><i class="fa fa-edit"></i></a> &nbsp; 
                                        <a href="{{ url('admin/kelas/show', $data->id) }}"
                                            class="btn btn-success"><i class="fa fa-eye"></i></a>&nbsp;
                                        <form action="{{ url('admin/kelas/destroy', $data->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
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
    <!--Row-->


@endsection