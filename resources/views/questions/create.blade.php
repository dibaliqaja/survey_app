@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/surveys/{{ $survey->id }}/questions" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" class="form-control" name="question[question]" id="question" aria-describedby="questionHelp" placeholder="Enter question" value="{{ old('question.question') }}">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to the point question for best results.</small>
                            @error('question.question') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                                <div>
                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input type="text" class="form-control" name="answer[][answer]" id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice 1" value="{{ old('answer.0.answer') }}">
                                        @error('answer.0.answer') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input type="text" class="form-control" name="answer[][answer]" id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice 2" value="{{ old('answer.1.answer') }}">
                                        @error('answer.1.answer') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input type="text" class="form-control" name="answer[][answer]" id="answer3" aria-describedby="choicesHelp" placeholder="Enter Choice 3" value="{{ old('answer.2.answer') }}">
                                        @error('answer.2.answer') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input type="text" class="form-control" name="answer[][answer]" id="answer4" aria-describedby="choicesHelp" placeholder="Enter Choice 4" value="{{ old('answer.3.answer') }}">
                                        @error('answer.3.answer') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
