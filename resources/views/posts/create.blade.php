@extends("layouts.app")

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['PostsController' => 'store', 'enctype' => 'multipart/form-data']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <br>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
  
@endsection

