<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Iluminate\Support\Facades\DB;

use App\Models\Kelas;
use App\Models\User;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $user = User::all();
        return view('admin.kelas.index', compact('kelas','user'));
    }

    
    public function create()
    {
        $kelas['user'] = User::all();
        $kelas['kelas'] = Kelas::all();
        return view('admin.kelas.create', $kelas);
    }


    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'id_guru' => ['required'],
            'nama_kelas' => ['required'], 
            'jurusan' => ['required']
    
        ],[
            'id_guru.required' => 'Guru wajib diisi',
            'nama_kelas.required' => 'Nama Kelas wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi', 
        ]);

        $kelas = Kelas::create([
            'id_guru' => $request->id_guru,
            'nama_kelas' => $request->nama_kelas,
            'jurusan' => $request->jurusan,

        ]);

        return redirect('/admin/kelas')->with('success', 'Berhasil Ditambahkan');
    }

    
    public function show(string $id)
    {
        $user = User::all();
        $kelas = Kelas::findOrfail($id);
        return view('admin.kelas.show', compact('kelas','user'));
    }

     
    public function edit(string $id)
    {
        $user = User::all();
        $kelas = Kelas::findOrfail($id);
        return view('admin.kelas.edit', compact('kelas','user'));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_guru' => ['required'],
            'nama_kelas' => ['required'], 
            'jurusan' => ['required']
    
        ],[
            'id_guru.required' => 'Guru wajib diisi',
            'nama_kelas.required' => 'Nama Kelas wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi', 
        ]);

       $kelas = Kelas::findorfail($id);
       $kelas_data = [
            'id_guru' => $request->id_guru,
            'nama_kelas' => $request->nama_kelas,
            'jurusan' => $request->jurusan,
           ];

       $kelas->update($kelas_data);
       return redirect('/admin/kelas')->with('success','Data Kelas anda berhasil di Update');
    }

    public function destroy($id)
    {

        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/admin/kelas')->with('danger', 'data berhasil dihapus');

    }


}
