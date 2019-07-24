<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function hienThiNguoiDung()
    {
        $users = DB::table('users')->get();
        // dd($users)
        return $users;
    }

    public function docTatCaNguoiDung()
    {
        $users = DB::table('users')->get();
        // dd($users)
        return $users;
    }

    public function docMotNguoiDung()
    {
        $users = DB::table('users')->get();
        // dd($users)
        return $users;
    }

    public function formSuaNguoiDung()
    {
        $users = DB::table('users')->get();
        // dd($users)
        return $users;
    }
}
