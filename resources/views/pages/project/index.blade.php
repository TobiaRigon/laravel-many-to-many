@extends('layouts.main-layout')
@section('head')
    <title>Project</title>
@endsection
@section('content')
<a href="/" class="btn btn-primary">Home</a>
<a href="/types" class="btn btn-primary">View Types</a>
<h1>Projects</h1>

<ul>
    @foreach ($projects as $project)
    <li>
        {{$project -> name}} : {{ $project -> type ->name}}
    </li>

    @endforeach
</ul>

@endsection
