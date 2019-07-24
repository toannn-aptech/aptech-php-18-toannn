<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();
        // dd($users)
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        DB::table('users')->insert(
            ['name' => $name,
                'email' => $email,
                'password' => $password,
            ]
        );

        return redirect()->route('users.index');

    }

    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('users.show', [
            'user' => $user[0],
        ]);
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('users.edit', [
            'user' => $user[0],
        ]);
    }

    public function update($id)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        // $_GET $_POST
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'email' => $email,
            ]);
        $user = DB::table('users')->where('id', $id)->get();
        return view('show', [
            'user' => $user[0],
        ]);
        // return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        // $users = DB::table('users')->get();
        // $user = User::find($id);
        // $user->delete();
        // return redirect()->route('users.index');

        $user = DB::table('users')->where('id', $id)->delete();
        $users = DB::table('users')->get();
        return view('users.index', [
            'users' => $users,
        ]);
    }
}
