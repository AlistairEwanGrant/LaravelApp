@extends('layouts.app')

@section('content')
<div class="mt-4 p-5 bg-light bg-opacity-25 text-black rounded text-center border border-dark border-5 fw-bolde">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-4 p-5 bg-success bg-opacity-50 text-black rounded text-center border border-dark border-5 fw-bolde">
                <div class="bg-success text-white rounded text-center border border-dark fw-bolde fs-3 fw-bold">{{ __('Dashboard') }}</div>

                
                
                {{-- img and bio --}}
                <div class="card-header width80 bg-success bg-opacity-50 border border-dark rounded-3">
                    <div class="row"><a href="/lsapp/public/home/{{Auth::user()->id}}/editBio" style="margin-bottom:5px"class="btn bg-primary bg-opacity-50 btn-outline-dark text-white float-end ">Edit Bio</a>
                        
                        <div class="col-md-4 col-sm4">
                            @if($users->cover_image == null)
                            <img style="width:100%" src="storage/cover_images/noimage.jpg">
                                @else
                            <img style="width:100%" src="storage/cover_images/{{$users->cover_image}}">
                            @endif
                            <label style="width:100%" class="bg-light bg-opacity-25 rounded-3 border border-dark"><strong>Name</strong></label>
                            <div class="bg-light bg-opacity-50 text-black rounded text-center border border-dark fw-bolde">{{$users->name}}</div>
                            <br>
                            <label style="width:100%" class="bg-light bg-opacity-25 rounded-3 border border-dark"><strong>Email</strong></label>
                            <div class="bg-light bg-opacity-50 text-black rounded text-center border border-dark fw-bolde">{{$users->email}}</div>
                        </div>
                        <div class="col-md-8 col-sm8">
                            <label style="width:100%" class="bg-light bg-opacity-25 rounded-3 border border-dark"><strong>Bio</strong></label>
                            @if($users->bio_text == null)
                            <div style="height: 80%" class="bg-light bg-opacity-50 text-black rounded text-center border border-dark fw-bolde">Enter your bio information</div>
                            @else
                            <div style="height: 80%" class="bg-light bg-opacity-50 text-black rounded text-center border border-dark fw-bolde">{{$users->bio_text}}</div>
                            @endif
                               </div>
                        
                    </div>
                </div>   
                

                    
                
                    
                    @if(count($posts) >0)
                    <table class="table table-striped">
                        <tr class="bg-success bg-opacity-25 text-black rounded text-center border border-dark fw-bolde fs-3">
                            <td></td>
                            <td><a style="width: 100%" class="btn btn bg-primary bg-opacity-50 btn-outline-dark text-white" href="/lsapp/public/posts/create">Create Post</a></td>
                            <td></td>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td class="bg-light bg-opacity-50 text-black rounded text-center border border-dark fw-bolde fs-3">{{$post->title}}</td>
                            <td class="bg-light bg-opacity-50 text-black rounded text-center border border-dark fw-bolde">{{$post->body}}</td>
                            <td class="bg-success bg-opacity-25 text-black rounded text-center border border-dark fw-bolde">
                                <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn bg-primary bg-opacity-50 btn-outline-dark text-white float-end">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    
                    @else
                        <p>You have no posts</p>
                        <tr class="bg-success bg-opacity-25 text-black rounded text-center border border-dark fw-bolde fs-3">
                            <td></td>
                            <td><a style="width: 100%" class="btn btn bg-primary bg-opacity-50 btn-outline-dark text-white" href="/lsapp/public/posts/create">Create Post</a></td>
                            <td></td>
                        </tr>
                    @endif

                <div class="card-body"><h3><strong>Your Blog Posts</strong></h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
