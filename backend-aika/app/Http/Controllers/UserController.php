<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    function get()
    {
        return response()->json(
            [
                "message" => "GET Method Success"
            ]
        );
    }

    function post(Request $request)
    {
        $Users = new Users
        $Users->nama = $request->nama;
        $Users->nim = $request->nim;
        $users->prodi = $request->prodi;
        $Users->fakultas = $request->fakultas;
        $Users->no_telepon = $request->no_telepon;

        $Users->save();
        return response()->json(
            [
                "message" => "Success",
                "data" => $product
            ]
        );
    }

    function put()
    {
        return response()->json(
            [
                "message" => "PUT Method Success".$id
            ]
        );
    }

    function delete()
    {
        return response()->json(
            [
                "message" => "DELETE Method Success".$id
            ]
        );
    }
}
