@extends("layouts.app")

@section('content')
    <a href="/lsapp/public/posts" class="btn btn-success">Back</a>
    <h1>{{$post->title}}</h1>
    
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['PostsController' => 'destroy', $post->id, 'class' => 'float-end'])!!}
        @method('DELETE')
        {!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
    {!!Form::close()!!}

@endsection