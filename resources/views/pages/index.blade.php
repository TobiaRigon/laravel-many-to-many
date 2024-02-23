@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="container">
    <h1 class="mt-5 mb-4">Projects</h1>
    <div class="row my-3">
        @foreach ($types as $type)
            @foreach ($type->projects as $project)
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{$project->name}}</h5>
                            <p class="card-text">{{$project->description}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><strong>Type:</strong> {{$type->name}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

@endsection
