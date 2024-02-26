@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
<a href="/" class="btn btn-primary">Home</a>
<a href="/types" class="btn btn-primary">View Types</a>
<a href="/projects" class="btn btn-primary">View Project</a>
<h1>New Projects</h1>

<form method="POST">

    @csrf
    @method("POST")

    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>

    <label for="type_id">Type</label>
    <select name="type_id" id="type_id">
        @foreach ($types as $type)
            <option value="{{ $type -> id }}">
                {{ $type -> name }}
            </option>
        @endforeach
    </select>
    <br>
    @foreach ($technologies as $technology)
        <div>
            <input
                type="checkbox"
                name="technology_id[]"
                value="{{ $technology -> id }}"
                id="{{ 'technology-' . $technology -> id }}"
            >
            <label for="{{ 'technology-' . $technology -> id }}">
                {{ $technology -> name }}
            </label>
        </div>
    @endforeach
    <input type="submit" value="CREATE">
</form>

@endsection
