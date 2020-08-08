@extends('app')
@section('content')
    <h3>{{$article->title}}</h3>
    <p>{{$article->content}}</p>
    <p>{{$article->created_at}}</p>
    <p>{{$article->author}}</p>

    <h2>Post comments</h2>

    <form method="POST" action="{{route('postComment', $article->id)}}">
        @csrf

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" required><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="5" cols="33" required></textarea><br>

        <button type="submit">Submit</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Comments</h2>

    @foreach ($article->comments as $item) 
    <div>
        <h3>{{$item->author}}</h3>
        <p>{{$item->content}}</p>
    </div>  
    @endforeach
@endsection