<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\Materi;
use App\Models\Siswa;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;


class TugassiswaController extends Controller
{
    public function index()
    {
        $data['list_tugas'] = Tugas::all();
        return view('siswa.tugas.index', $data);
    }

    public function show(string $id)
    {
        $data['materi'] = Materi::all();
        $data['tugas'] = Tugas::findOrfail($id);
        return view('siswa.tugas.show', $data);
    }




}
