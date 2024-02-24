@extends('layouts.main-layout')
@section('head')
    <title>Type</title>
@endsection
@section('content')
<a href="/projects" class="btn btn-primary">View Projects</a>
<a href="/" class="btn btn-primary">Home</a>
<h1>Type</h1>

<ul>
    @foreach ($types as $type)
    <li>
        <h5>
            {{$type -> name}} :
            {{ count($type -> projects)}} <br>
        </h5>

        <ul>
            @foreach ($type -> projects as $project)
            <li>
                {{ $project -> name}}
            </li>
        @endforeach
        </ul>

    </li>

    @endforeach
</ul>

@endsection
