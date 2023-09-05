@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Data Siswa')
@section('content')


     <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                  <a href="{{ url('admin/siswa/create')}}" class="btn btn-dark float-right">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>NIS</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($list_siswa as $siswa)
                         <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $siswa->name }} </td>
                              <td> {{ $siswa->kelas->nama_kelas }} </td>
                              <td> {{ $siswa->nis }} </td>
                              <td>
                                   <div class="btn btn-group">
                                        <a href="{{ url('admin/siswa', $siswa->id) }}/edit"
                                             class="btn btn-warning"><i class="fa fa-edit"></i></a> &nbsp; 
                                        
                                        <form action="{{ url('admin/siswa/destroy', $siswa->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
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