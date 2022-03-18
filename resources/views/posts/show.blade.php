@extends("layouts.app")

@section('content')
    <a style="margin-top:5px" href="/lsapp/public/posts" class="btn btn-danger">Back</a>
    <h1 style="margin-top:5px" class="bg-success bg-opacity-50 rounded text-center border border-3 border-dark fw-bolde fs-3 fw-bold">{{$post->title}}</h1>
        @if($post->cover_image == 'noimage.jpg')
          
        @else
        <div style="text-align: center">
            <img style="width:auto%; max-height:500px" class="border border-dark rounded-3 bg-success" src="../storage/cover_images/{{$post->cover_image}}">
        </div>
        @endif
    <br>
    <br>
    <div>
        <h3>{!!$post->body!!}</h3>
    </div>
    <div class="bg-success bg-opacity-50 border border-5 border-dark rounded-3 bg-opacity-25 row">
        <div class="col-md-4 col-sm4">
            
            <img style="max-width: 300px; padding:5px" src="../storage/cover_images/{{$post->user->cover_image}}">
                
            
        </div>
        <div class="col-md-8 col-sm8">
            <h3 style="padding:5px" class="text-wrap">{{$post->user->bio_text}}</h3>
        </div>
    </div>
    <br>
        <div style="margin-top:5px; padding:5px">
            <h5>Written on {{$post->created_at}} by {{$post->user->name}} / email: {{$post->user->email}}</h5>
        </div>
    
    
    <hr>


    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        
        <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

        {!! Form::open(['PostsController' => 'destroy', $post->id, 'class' => 'float-end'])!!}
            @method('DELETE')
            {!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
        {!!Form::close()!!}
        </div>
        @endif
    @endif
    <hr>
</div>
@endsection