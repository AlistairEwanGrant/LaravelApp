@extends('layouts.app')

@section('content')
<div class="mt-4 p-5 bg-light bg-opacity-50 text-black rounded text-center border border-success border-5 fw-bolde">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-4 p-5 bg-success bg-opacity-50 text-black rounded text-center border border-success border-5 fw-bolde">
                <div class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde fs-3">{{ __('Dashboard') }}</div>


                {{-- img and bio --}}
                <div class="card-header width80">
                    <div class="row">
                        <div class="col-md-4 col-sm4">
                            {{-- <img style="width:100%" src="storage/cover_images/{{$post->cover_image}}"> --}}img
                        </div>
                        <div class="col-md-8 col-sm8">
                            {{-- <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3> --}}bio
                            {{-- <small>Writen on {{$post -> created_at}} by {{$post->user->name}}</small> --}}
                        </div>
                    </div>
                </div>   




                    <h3>Your Blog Posts</h3>
                    <a class="btn btn bg-primary bg-opacity-50 btn-outline-primary text-black" href="/lsapp/public/posts/create">Create Post</a> 
                    @if(count($posts) >0)
                    <table class="table table-striped">
                        <tr bg-light bg-opacity-50>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde fs-3">{{$post->title}}</td>
                            <td class="bg-light bg-opacity-50 text-black rounded text-center border border-success fw-bolde">{{$post->body}}</td>
                            <td>
                                <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn bg-primary bg-opacity-50 btn-outline-primary text-black float-end">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    
                    @else
                        <p>You have no posts</p>
                    @endif

                <div class="card-body">
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
