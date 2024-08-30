<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function maba(){
        $maba = User::all();
        return view('admin.users.index', compact('maba'));
    }
}
