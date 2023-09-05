@extends('template.admin.header')
@section('judul','SMKN 1 NANGA TAYAP | Sistem Informasi Sekolah')
@section('sub_judul','Edit Data Materi')
@section('content')


<!-- Container Fluid-->
     <div class="container-fluid" id="container-wrapper">
          <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Materi</h6>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/materi/update', $materi->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Materi</label>
                      <input type="text" name="nama_materi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Masukkan Nama Materi" value="{{ $materi->nama_materi}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Pilih Guru</label>
                        <select class="form-control" name="id_guru" id="exampleFormControlSelect1">
                           <option value="{{ $materi->id_guru }}">{{ $materi->user->name }}</option>
                               @foreach ($list_user as $u )
                           <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
     </div>
   <!---Container Fluid-->


@endsection