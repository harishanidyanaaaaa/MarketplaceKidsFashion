<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        $role = Role::all();
        return view('User.index')->with('user', $user)->with('role', $role);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role_id' => $input['role_id'],
            'password' => Hash::make($request['password']),



        ]);

        return redirect('/User');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;

        $user->save();
        return redirect('/User');
    }

    public function destroy($id)
    {

        $u = User::findOrFail($id);
        $u->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }


    public function indexrole()
    {
        $role = Role::all();
        return view('Role.index')->with('role', $role);
    }
    public function storerole(Request $request)
    {
        $input = $request->all();
        Role::create([
            'name' => $input['name'],
            'deskripsi' => $input['deskripsi'],
        ]);

        return redirect('/Role');
    }

    public function updaterole(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->deskripsi = $request->deskripsi;

        $role->save();
        return redirect('/Role');
    }

    public function destroyrole($id)
    {

        $r = Role::findOrFail($id);
        $r->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

}
