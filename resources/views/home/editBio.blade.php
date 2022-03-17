@extends("layouts.app")

@section('content')
    <h1>Edit Bio</h1>
    {!! Form::open(['HomeController' => 'update']) !!}
    
    @method('PUT')

        <div class='form-group'>
            {{Form::label('name', 'Name')}}
            {{-- {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Title'])}} --}}
        </div>
        <div class='form-group'>
            {{Form::label('bio', 'Bio')}}
            {{-- {{Form::textarea('body', $user->bio_text, ['class' => 'form-control', 'placeholder' => 'Body Text'])}} --}}
        </div>
        
            
        
    {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {!! Form::close() !!}

    
  
@endsection

