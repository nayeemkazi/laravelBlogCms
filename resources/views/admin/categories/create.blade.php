@extends('../../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Create a New Category</h3>
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="form-group">

                                <label for="name">Name</label>
                                <input type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                        {{-- <strong>Title is required</strong> --}}
                                    </span>
                                @enderror
                            </div>
                  
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Add Category</button>
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
