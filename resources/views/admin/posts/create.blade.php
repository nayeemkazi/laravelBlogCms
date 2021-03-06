@extends('../../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Create a New Post</h3>
                        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                        {{-- <strong>Title is required</strong> --}}
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="featured">Featured Image</label>
                                <input type="file" class="form-control @error('featured') is-invalid @enderror" name="featured">
                                @error('featured')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            
                            </div>
                                                       
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" cols="30" rows="5"></textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success">Add Post</button>
                                </div>
                            </div>
                            
                           
                        </form>
                          
                        
                    </div>
                </div>

            {{-- <div class="panel panel-default">
                <div class="panel-heading">
                    Create a New Post
                </div>
                <div class="panel-body">
                    <form action="/post/store" method="POST">
                        @csrf
                        
                    </form>
                </div>
            </div>
             --}}
        </div>
    </div>
</div>
@endsection
