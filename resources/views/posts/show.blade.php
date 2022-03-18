@extends("layouts.app")

@section('content')
    <a style="margin-top:5px" href="/lsapp/public/posts" class="btn btn-danger">Back</a>
    <h1 style="margin-top:5px" class="bg-success bg-opacity-50 text-white rounded text-center border border-dark fw-bolde fs-3 fw-bold">{{$post->title}}</h1>
    <img style="width:100%" class="border border-dark rounded-3 bg-success" src="../storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div>
        <h3>{!!$post->body!!}</h3>
    </div>
    <hr>
    <small class="text-white">Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    
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
@endsection