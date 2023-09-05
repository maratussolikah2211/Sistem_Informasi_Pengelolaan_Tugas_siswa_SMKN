<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\Materi;
use App\Models\Siswa;
use App\Models\Nilai;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class NilaiController extends Controller
{
   
    public function index()
    {
       $siswaId = Auth::id();
       $data['data'] = Nilai::where('id_siswa', $siswaId)->get();

       return view('siswa.materi.index', $data);
    }
   
    public function create(string $id)
    {
        $ambil = $id;
        $siswa = Siswa::all();
        $tugas = Tugas::all();
        return view('siswa.tugas.create',  compact('siswa','ambil','tugas'));   
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        $status = "Proses";
        $siswaId = Auth::id();
        $jawaban = $request->jawaban;
        $new_image = time() . $jawaban->getClientOriginalName();
        $jawaban->move('dokumen/jawaban/', $new_image);
        $nilai = Nilai::create([
            'id_tugas' => $request->id_tugas,
            'id_siswa' => $siswaId,
            'status' => $status,
            'jawaban' => 'dokumen/jawaban/' . $new_image,
        ]);
        return redirect('siswa/nilai')->with('success', 'Tugas Berhasil di Selesaikan');
    }

    
    public function show(string $id)
    {
        $siswa = Siswa::all();
        $tugas = Tugas::all();
        $nilai = Nilai::findOrfail($id);
        return view('siswa.materi.show',  compact('siswa','nilai','tugas'));   
    }



}
