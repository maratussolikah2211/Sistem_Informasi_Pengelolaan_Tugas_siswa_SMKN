@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Tabel Guru')
@section('content')


    <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Guru</h6>
                  <a href="{{ url('admin/user/create')}}" class="btn btn-dark float-right">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($list_user as $user)
                         <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $user->name }} </td>
                              <td> {{ $user->nip }} </td>
                              <td> {{ $user->role }} </td>
                              <td> {{ $user->email }} </td>
                              <td> {{ $user->alamat }} </td>
                              <td>
                                   <div class="btn btn-group">
                                        <a href="{{ url('admin/user', $user->id) }}/edit"
                                             class="btn btn-warning"><i class="fa fa-edit"></i></a> &nbsp; 
                                        
                                        <form action="{{ url('admin/user/destroy', $user->id) }}" method="post" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
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