<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pyetsori;

class PyetsoriController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('pyetsori.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);

        $pyetsori = auth()->user()->pyetsori()->create($data);
        
        return redirect('/pyetsori/'.$pyetsori->id);
    }

    public function show(Pyetsori $pyetsori){
        $pyetsori->load('pyetjet.pergjigjet');

        return view('pyetsori.show', compact('pyetsori'));
    }

    public function destroy(Pyetsori $pyetsori){
        $pyetsori->pyetjet()->delete();
        $pyetsori->delete();

        return view('pyetsori.delete', compact('pyetsori'));
    }
}
