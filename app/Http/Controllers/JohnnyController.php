<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JohnnyController extends Controller
{

    /**
     * JohnnyController constructor.
     */
    public function __construct()
    {
//        dd('__construct');
    }

    public function index(Request $request)
    {
        return view('johnny.editor.editor');
    }
}
