<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $data['list_materi'] = Materi::all();
        return view('admin.materi.index', $data);
    }

    public function create()
    {
        $data['list_user'] = User::all();
        return view('admin.materi.create', $data);
    }

    public function store(Request $request)
    {

        $materi = new Materi;
        $materi->nama_materi = $request->input('nama_materi');
        $materi->id_guru = $request->input('id_guru');
    
        $materi->save();

        return redirect('/admin/materi')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $data['list_user'] = User::all();
        $data['materi'] = Materi::findOrfail($id);
        return view('admin.materi.edit', $data);
    }


    public function update(Request $request, string $id)
    {
       $materi = Materi::findorfail($id);
       $materi_data = [
            'id_guru' => $request->id_guru,
            'nama_materi' => $request->nama_materi,
           ];

       $materi->update($materi_data);
       return redirect('/admin/materi')->with('success','Data Materi anda berhasil di Update');
    }

    public function destroy($id)
    {
        $materi = Materi::find($id);
        $materi->delete();
        return redirect('admin/materi')->with('danger', 'data berhasil dihapus');
    }
}
