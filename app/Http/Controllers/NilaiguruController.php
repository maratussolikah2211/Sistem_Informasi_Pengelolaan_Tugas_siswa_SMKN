<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Tugas;
use App\Models\User;
use App\Models\Materi;
use App\Models\Kelas;
use DB;


class NilaiguruController extends Controller
{



    public function home()
    {
        // $siswa = Siswa::count();
        // $kelas = Kelas::count();
        // $materi = Materi::count();
        // $user = User::count();
        return view('admin.home', [
            'siswa' => Siswa::count(),
            'kelas' => Kelas::count(),
            'materi'=> Materi::count(),
            'user' => User::count()
        ]
    );
    }




    public function index()
    {
        $data['tugas'] = Tugas::all();
        $data['siswa'] = Siswa::all();
        $data['list_nilai'] = Nilai::all();
    
        return view('admin.nilai.index', $data);
    }

    public function edit(string $id)
    {
        $data['tugas'] = Tugas::all();
        $data['siswa'] = Siswa::all();
        $data['nilai'] = Nilai::findOrfail($id);
        return view('admin.nilai.edit', $data);
    }

    public function show(string $id)
    {
        $siswa = Siswa::all();
        $tugas = Tugas::all();
        $nilai = Nilai::findOrfail($id);
        return view('admin.nilai.show', compact('siswa','nilai','tugas'));
    }

    public function update(Request $request, string $id)
    {
        $status = "Selesai";
        $nilai = Nilai::findorfail($id);
        $nilai_data = [
            'id_siswa' => $request->id_siswa,
            'id_tugas' => $request->id_tugas,
            'nilai' => $request->nilai,
            'benar' => $request->benar,
            'salah' => $request->salah,
            'status' => $status,
           ];

       $nilai->update($nilai_data);
       return redirect('admin/nilai')->with('success','Data Nilai anda berhasil di Update');
    }


    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        return redirect('admin/nilai')->with('danger', 'Data berhasil dihapus');
    }

}
