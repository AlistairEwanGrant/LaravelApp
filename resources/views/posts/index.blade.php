@extends("layouts.app")

@section('content')
    <h1 style="margin-top:5px" class="bg-success bg-opacity-50  rounded text-center border border-dark fw-bolde fs-3 fw-bold">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div  class="card-header width80 border border-dark rounded-3 bg-success bg-opacity-25">
                <div class="row">
                    <div class="col-md-4 col-sm4">
                        <a class=" text-decoration-none" href="posts/{{$post->id}}">
                        <img style="width:100%; max-height:400px" class="border border-secondary" src="storage/cover_images/{{$post->cover_image}}">
                        </a>
                    </div>
                    <div class="col-md-8 col-sm8">
                        <h3><a class=" text-decoration-none text-success" href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                    {{$post->body}}
                    <br>
                        <small class="">Writen on {{$post -> created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>    
            
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection