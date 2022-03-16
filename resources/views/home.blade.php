@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                {{ __('You are logged in!') }}

                    <h3>Your  Blog Posts</h3>
                    <a class="btn btn-primary" href="/lsapp/public/posts/create">Create Post</a> 
                    @if(count($posts) >0)
                    <table class="table table-striped">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td></td>
                            <td>
                                <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary float-end">Edit</a>
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
