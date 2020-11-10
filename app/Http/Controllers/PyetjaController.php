<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pyetsori;
use \App\Pyetja;

class PyetjaController extends Controller
{
    public function create(Pyetsori $pyetsori){
        return view('pyetja.create', compact('pyetsori'));
    }

    public function store(Pyetsori $pyetsori){
        $data = request()->validate([
            'pyetja.pyetja' => 'required',
            'pergjigjet.*.pergjigja' => 'required',
        ]);
            
        $pyetja = $pyetsori->pyetjet()->create($data['pyetja']);
        $pyetja->pergjigjet()->createMany($data['pergjigjet']);

        return redirect('/pyetsori/'.$pyetsori->id);
    }

    public function destroy(Pyetsori $pyetsori, Pyetja $pyetja){
        $pyetja->pergjigjet()->delete();
        $pyetja->delete();

        return redirect($pyetsori->path());
    }
}
