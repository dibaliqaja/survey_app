@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $survey->title }}</div>

                <div class="card-body">
                    <a href="/surveys/{{ $survey->id }}/questions/create" class="btn btn-dark">Add New Question</a>
                    <a href="/takesurveys/{{ $survey->id }}-{{ Str::slug($survey->title) }}" class="btn btn-dark">Take Survey</a>
                </div>
            </div>
            @foreach ($survey->questions as $question)
                <div class="card mt-4">
                    <div class="card-header">{{ $question->question }}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($question->answers as $answer)
                                <li class="list-group-item">{{ $answer->answer }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
