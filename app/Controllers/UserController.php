<?php

namespace App\Controllers;

use App\Models\User;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class UserController
{
    public function index()
    {
        $users = User::all();
        return view('users/index', ['users' => $users]);
    }

    /*public function edit(Request $request)
    {
    	$id = $request->getAttribute('id');
    	print_r($id);
    }*/
}
