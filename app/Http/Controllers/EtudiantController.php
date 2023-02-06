<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::orderBy('id','desc')->paginate(5);
        return view('etudiants.index', compact('etudiants'));
    }

    public function create()
    {
        $etudiants = Etudiant::orderBy('id','desc')->paginate(5);
        return view('etudiants.create',compact('etudiants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'semestre' => 'required',
            'matiere' => 'required',
            'note' => 'required',
            'examen' => 'required',
        ]);
        
        Etudiant::create($request->post());

        return redirect()->route('etudiants.index')->with('success','Etudiant creer avec success.');
    }
    
}
