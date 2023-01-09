<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $options = [
            ["name" => 'Externo', "value" => 'Externo'],
            ["name" => 'Interno', "value" => 'Interno'],
            ["name" => 'Estudiante', "value" => 'Estudiante'],
            ["name" => 'Profesor', "value" => 'Profesor']
        ];

        return view('dashboard.home', ['options' => $options]);
    }
}
