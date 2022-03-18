@extends("layouts.app")

@section('content')
    <a style="margin-top:5px" href="/lsapp/public/posts" class="btn btn-danger">Back</a>
    <h1 style="margin-top:5px" class="bg-info bg-opacity-25 text-white rounded text-center border border-3 border-dark fw-bolde fs-3 fw-bold">{{$post->title}}</h1>
    <img style="width:100%" class="border border-dark rounded-3 bg-success" src="../storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div>
        <h3>{!!$post->body!!}</h3>
    </div>
    <div class="bg-primary border border-5 border-dark rounded-3 bg-opacity-25">
        <img style="max-width: 300px; padding:5px" src="../storage/cover_images/{{$post->user->cover_image}}">
    
        <small class="text-white">Written on {{$post->created_at}} by {{$post->user->name}} / email: {{$post->user->email}}</small>
    <br>
        <div style="margin-top:5px; padding:5px" class="text-white">
            <small class="text-white text-wrap ">{{$post->user->bio_text}}</small>
        </div>
    </div>
    <hr>


    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

        {!! Form::open(['PostsController' => 'destroy', $post->id, 'class' => 'float-end'])!!}
            @method('DELETE')
            {!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
        {!!Form::close()!!}
        @endif
    @endif
    <hr>
    
@endsection