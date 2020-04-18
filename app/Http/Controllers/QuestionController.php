<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Survey $survey)
    {
        return view('questions.create', compact('survey'));
    }

    public function store(Survey $survey)
    {
        $data = request()->validate([
            'question.question' => 'required',
            'answer.*.answer'   => 'required',
        ]);

        $question = $survey->questions()->create($data['question']);
        $question->answers()->createMany($data['answer']);

        return redirect('surveys/' . $survey->id);
    }
}
