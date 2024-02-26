@extends('layouts.main-layout')
@section('head')
    <title>Project</title>
@endsection
@section('content')
<a href="/" class="btn btn-primary">Home</a>
<a href="/types" class="btn btn-primary">View Types</a>
<h1>Projects</h1>
<a class="btn btn-primary" href="{{route('project.create')}}">CREATE</a>

<ul>
    @foreach ($projects as $project)
    <li>
       <h2>
        {{$project -> name}} : {{ $project -> type ->name}}
    </h2>
        <br>
        <a class="btn btn-primary" href="{{ route('project.edit', $project -> id) }}">EDIT</a>
        <br>
        Technologies:
        <ul>
            @foreach ($project->technologies as $technology)
                <li>
                    {{$technology->name}}
                </li>

            @endforeach
            <br>
        </ul>
    </li>

    @endforeach
</ul>

@endsection
