@extends("layouts.app")

@section('content')
    <h1 class="text-danger position-absolute top-5 start-50 translate-middle-x "><strong>Delete Post?</strong></h1>
    <a style="margin-top:5px" href="/lsapp/public/home" class="btn btn-primary">Back</a>
    {!! Form::open(['PostsController' => 'destroy', $post->id, 'class' => 'float-end mt-1'])!!}
        @method('DELETE')
        {!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
    {!!Form::close()!!}
    <h1 style="margin-top:5px" class="bg-success bg-opacity-50 rounded text-center border border-3 border-dark fw-bolde fs-3 fw-bold">{{$post->title}}</h1>
        @if($post->cover_image == 'noimage.jpg')
          
        @else
        <div style="text-align: center">
            <img style="width:auto%; max-height:500px" class="border border-dark rounded-3 bg-success" src="../../storage/cover_images/{{$post->cover_image}}">
        </div>
        @endif
    <br>
    <br>
    <div>
        <h3>{!!$post->body!!}</h3>
    </div>
    <div class="bg-success bg-opacity-50 border border-5 border-dark rounded-3 bg-opacity-25 row">
        <div class="col-md-4 col-sm4">
            
            <img style="max-width: 300px; padding:5px" src="../../storage/cover_images/{{$post->user->cover_image}}">
                
            
        </div>
        <div class="col-md-8 col-sm8">
            <h5 style="padding:5px" class="text-wrap">{{$post->user->bio_text}}</h5>
        </div>
    </div>
    <br>
        <div style="margin-top:5px; padding:5px">
            <h5>Written on {{$post->created_at}} by {{$post->user->name}} / email: {{$post->user->email}}</h5>
        </div>
    
    
    <hr>

    
    

        {!!Form::close()!!}    
  
@endsection

