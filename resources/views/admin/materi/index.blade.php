@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Data Materi')
@section('content')


     <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Matapelajaran</h6>
                  <a href="{{ url('admin/materi/create')}}" class="btn btn-dark float-right">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama MataPelajaran </th>
                        <th>Guru</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($list_materi as $m)
                         <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $m->nama_materi }} </td>
                              <td> {{ $m->user->name }} </td>
                              <td>
                                   <div class="btn btn-group">
                                        <a href="{{ url('admin/materi', $m->id) }}/edit"
                                             class="btn btn-warning"><i class="fa fa-edit"></i></a> &nbsp; 
                                        
                                        <form action="{{ url('admin/materi/destroy', $m->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
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