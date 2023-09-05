<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Iluminate\Support\Facades\DB;

class UserController extends Controller
{
   
    public function index()
    {
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }


    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'name' => ['required', 'unique:users,name'],
            'email' => ['required', 'unique:users,email'],
            'nip' => ['required'],
            'alamat' => ['required'],
            'role' => ['required'],
            'password' => ['required']
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email Pesanan wajib diisi',
            'nip.required' => 'No HP wajib diisi', 
            'alamat.required' => 'Alamat wajib diisi',
            'password.required' => 'Password wajib diisi',
            'role.required' => 'Level pengguna wajib diisi',  
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/admin/user')->with('success', 'Berhasil Ditambahkan');
    }


    public function edit(string $id)
    {
        $data['user'] = User::findOrfail($id);
        return view('admin.user.edit', $data);

    }
    

    public function update(Request $request, string $id)
    {
        //  dd(request()->all());

        $user = User::findorfail($id);
        if ($request->has('profil')) {
            $image = $request->profil;
            $new_image = time().$image->getClientOriginalName();
            $image->move('img/', $new_image);
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'nip' => $request->nip,
                'role' => $request->role,
                'password' => bcrypt($request->password),
                'profil' => 'img/' . $new_image,
            ];
        }
        else{
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'nip' => $request->nip,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ];
        }
        $user->update($user_data);
        
        return redirect('/admin/user')->with('success','Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user')->with('danger', 'data berhasil dihapus');
    }

   
}
