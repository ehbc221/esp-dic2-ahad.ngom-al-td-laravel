<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all(); // recupérer toutes les données enregistrées dans la table étudiants

        return view('home', compact('etudiants'));
    }
}
