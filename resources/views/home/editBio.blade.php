@extends("layouts.app")

@section('content')
    <h1>Edit Bio</h1>
    {!! Form::open(['HomeController' => 'update', $users->id]) !!}
    
    @method('PUT')

        <div class='form-group'>
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $users->name, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class='form-group'>
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $users->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class='form-group'>
            {{Form::label('bioText', 'BioText')}}
            {{Form::textarea('bioText', $users->bio_text, ['class' => 'form-control', 'placeholder' => 'Bio Text'])}}
        </div>
        <div class="form-group">
        <br>
            <h5>Upload Photo</h5>
            {{Form::file('cover_image')}}
        </div>
        <br>
            
        
    {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
    

    {!! Form::close() !!}

    
  
@endsection

