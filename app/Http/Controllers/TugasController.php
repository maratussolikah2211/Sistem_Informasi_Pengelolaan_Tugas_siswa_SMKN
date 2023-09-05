<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\Materi;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $data['list_tugas'] = Tugas::all();
        return view('admin.tugas.index', $data);
    }

    public function create()
    {
        $data['list_materi'] = Materi::all();
        return view('admin.tugas.create', $data);
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
        
        $dokumen = $request->dokumen;
        $new_dokumen = 'dokumen' . time() . $dokumen->getClientOriginalName();
        $dokumen->move('dokumen/arsip/dokumen/', $new_dokumen);
        Tugas::create([
            'nama_tugas' => $request->nama_tugas,
            'id_materi' => $request->id_materi,
            'dokumen' => 'dokumen/arsip/dokumen/' . $new_dokumen,
        ]);

        return redirect()->route('tugas')->with('success', 'Data berhasil ditambahkan');
    }


    public function update(Request $request, string $id)
    {

        $tugas = Tugas::findorfail($id);
        if ($request->has('dokumen')) {
            $image = $request->dokumen;
            $new_image = time().$image->getClientOriginalName();
            $image->move('dokumen/', $new_image);
            $tugas_data = [
                'nama_tugas' => $request->nama_tugas,
                'id_materi' => $request->id_materi,
                'dokumen' => 'dokumen/' . $new_image,
            ];
        }

        //jika tidak mengubah file maka data yang disimpan adalah ini.
        else{
            $tugas_data = [
                'nama_tugas' => $request->nama_tugas,
                'id_materi' => $request->id_materi,
            ];
        }
        $tugas->update($tugas_data);
        return redirect('admin/tugas')->with('success','Data tugas anda berhasil di Update');
    }

    public function edit(string $id)
    {
        $data['materi'] = Materi::all();
        $data['tugas'] = Tugas::findOrfail($id);
        return view('admin.tugas.edit', $data);
    }

    public function destroy($id)
    {
        $tugas = Tugas::find($id);
        $tugas->delete();
        return redirect('/admin/tugas')->with('danger', 'data berhasil dihapus');
    }

}
