<?php

namespace App\Http\Controllers;

use App\Question;
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

    public function destroy(Survey $survey, Question $question)
    {
        $question->answers()->delete();
        $question->delete();
        if ($question->delete() == TRUE) {
            return 'A';
        }

        return redirect($survey->path());
    }
}
