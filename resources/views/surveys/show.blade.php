@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $survey->title }}</div>

                <div class="card-body">
                    <a href="/surveys/{{ $survey->id }}/questions/create" class="btn btn-dark">Add New Question</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
