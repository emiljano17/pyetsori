<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pyetsori;

class SurveyController extends Controller
{
    public function show(Pyetsori $pyetsori, $slug){
        
        $pyetsori->load('pyetjet.pergjigjet');
        return view('survey.show', compact('pyetsori'));
    }

    public function store(Pyetsori $pyetsori){

        $data = request()->validate([
            'responses.*.pergjigje_id' => 'required',
            'responses.*.pyetja_id' => 'required',
            'survey.emri' => 'required',
            'survey.email' => 'required|email',
        ]);

        $survey = $pyetsori->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);

        return 'Thank you';
    }
}
