@extends('app')
@section('content')
    <a href="{{route('article')}}"><button>Create article</button></a>

    {{ $allArticles->links() }}

    @foreach ($allArticles as $item) 
    <div>
        <h3>{{$item->title}}</h3>
        <p>{{$item->intro}}</p>
        <p>{{$item->author}}</p>
        <p>{{$item->created_at}}</p>
        <a href="{{route('showArticle', $item->id)}}"><button>More details</button></a>
    </div>  
    @endforeach
@endsection