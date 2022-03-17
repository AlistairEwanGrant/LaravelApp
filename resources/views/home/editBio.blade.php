@extends("layouts.app")

@section('content')
    <h1>Edit Bio</h1>
    {!! Form::open(['HomeController' => 'update']) !!}
    
    @method('PUT')

        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{-- {{Form::text('title', $user->name, ['class' => 'form-control', 'placeholder' => 'Title'])}} --}}
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body')}}
            {{-- {{Form::textarea('body', $user->bio_text, ['class' => 'form-control', 'placeholder' => 'Body Text'])}} --}}
        </div>
        
            
        
    {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {!! Form::close() !!}

    
  
@endsection

