<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('surveys.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title'     => 'required',
            'purpose'   => 'required',
        ]);

        // $data['user_id']    = Auth::user()->id;
        // $survey = Survey::create($data);
        $survey = Auth::user()->surveys()->create($data);

        return redirect('surveys/' . $survey->id);
    }

    public function show(Survey $survey)
    {
        $survey->load('questions.answers');

        return view('surveys.show', compact('survey'));
    }
}
