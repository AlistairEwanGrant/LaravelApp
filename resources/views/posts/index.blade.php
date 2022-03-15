@extends("layouts.app")

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" style="width: 80%;">
                <h3><a href="post/{{$post->id}}">{{$post->title}}</a></h3>
                
                <small>Writen on {{$post -> created_at}}</small>
            </div>    
            
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection