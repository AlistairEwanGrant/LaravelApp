@extends('layouts.app')

@section('content')
<div class="mt-4 p-5 bg-light bg-opacity-50 text-black rounded text-center border border-success border-5 fw-bolde">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-4 p-5 bg-success bg-opacity-50 text-black rounded text-center border border-success border-5 fw-bolde">
                <div class="bg-success text-white rounded text-center border border-success fw-bolde fs-3">{{ __('Dashboard') }}</div>

                
                
                {{-- img and bio --}}
                <div class="card-header width80">
                    <div class="row"><a href="/lsapp/public/home/{{Auth::user()->id}}/editBio" style="margin-bottom:5px"class="btn bg-primary bg-opacity-50 btn-outline-success text-white float-end ">Edit Bio</a>
                        
                        <div class="col-md-4 col-sm4">
                            <img style="width:100%" src="storage/cover_images/{{$users->cover_image}}">
                            <h5>Name</h5>
                            <div class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde">{{$users->name}}</div>
                            <br>
                            <h5>Email</h5>
                            <div class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde">{{$users->email}}</div>
                        </div>
                        <div class="col-md-8 col-sm8">
                            <h5>Bio</h5>
                            <div style="height: 80%" class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde">{{$users->bio_text}}</div>
                            
                               </div>
                        
                    </div>
                </div>   
                

                    
                
                    
                    @if(count($posts) >0)
                    <table class="table table-striped">
                        <tr bg-light bg-opacity-50>
                            <td></td>
                            <td><a style="width: 100%" class="btn btn bg-primary bg-opacity-50 btn-outline-primary text-white" href="/lsapp/public/posts/create">Create Post</a></td>
                            <td></td>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde fs-3">{{$post->title}}</td>
                            <td class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde">{{$post->body}}</td>
                            <td>
                                <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn bg-primary bg-opacity-50 btn-outline-primary text-white float-end">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    
                    @else
                        <p>You have no posts</p>
                    @endif

                <div class="card-body"><h3>Your Blog Posts</h3>
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
