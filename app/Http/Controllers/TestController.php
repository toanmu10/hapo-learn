<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            dd('ok');
        }
        return redirect('/login');
    }
}
