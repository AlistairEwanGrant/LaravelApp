@extends("layouts.app")

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['PostsController' => 'update', $post->id, 'enctype' => 'multipart/form-data']) !!}
    
    @method('PUT')

        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>            
        <br>
    {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
        
    <div class="form-group">
        <br>
        {{Form::file('cover_image')}}
    </div>

        {!!Form::close()!!}
    
    

    
    {!! Form::close() !!}
    
    

    
  
@endsection

