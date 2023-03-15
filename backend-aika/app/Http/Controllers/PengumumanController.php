<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    function get()
    {
        return response()->json(
            [
                "message" => "GET Method Success"
            ]
        );
    }

    function post()
    {
        return response()->json(
            [
                "message" => "POST Method Success"
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
