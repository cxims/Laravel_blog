@extends('app')
@section('content')
    <form method="POST" action="{{route('postArticle')}}">
        @csrf

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>

        <label for="intro">Introduction:</label>
        <textarea id="intro" name="intro" rows="5" cols="33" required></textarea><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="5" cols="33" required></textarea><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" required><br>

        <button type="submit">Submit</button>
    </form>
@endsection