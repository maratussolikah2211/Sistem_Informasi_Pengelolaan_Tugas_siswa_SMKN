<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index(){
        $data['list_siswa'] = Siswa::all();
        return view('admin.siswa.index', $data);
    }

    public function create()
    {
        $data['list_kelas'] = Kelas::all();
        return view('admin.siswa.create', $data);
    }

    public function store(Request $request){

        $siswa = new Siswa;
        $siswa->name = $request->input('name');
        $siswa->id_kelas = $request->input('id_kelas');
        $siswa->password = Hash::make($request->input('password'));
        $siswa->nis = $request->input('nis');
        $siswa->email = $request->input('email');

        $siswa->save();

        return redirect('/admin/siswa')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $data['kelas'] = Kelas::all();
        $data['siswa'] = Siswa::findOrfail($id);
        return view('admin.siswa.edit', $data);
    }



    public function update(Request $request, string $id)
    {
       $siswa = Siswa::findorfail($id);
       $siswa_data = [
            'id_kelas' => $request->id_kelas,
            'name' => $request->name,
            'nis' => $request->nis,
            'email' => $request->email,
            'password' => bcrypt($request->password),
           ];

       $siswa->update($siswa_data);
       return redirect('/admin/siswa')->with('success','Data Siswa anda berhasil di Update');
    }


    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/admin/siswa')->with('danger', 'data berhasil dihapus');
    }
}
