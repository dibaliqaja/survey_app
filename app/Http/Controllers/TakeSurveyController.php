<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class TakeSurveyController extends Controller
{
    public function show(Survey $survey, $slug)
    {
        $survey->load('questions.answers');

        return view('takesurveys.show', compact('survey'));
    }

    public function store(Survey $survey)
    {
        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
            'takeSurvey.name'   => 'required',
            'takeSurvey.email'   => 'required|email',
        ]);

        $takeSurvey = $survey->takeSurveys()->create($data['takeSurvey']);
        $takeSurvey->responses()->createMany($data['responses']);

        return 'Thank You!';
    }
}
