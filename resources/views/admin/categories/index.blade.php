@extends('../../layouts.app')

@section('content')

    <div class="card ">
        <div class="card-body">
            <table class="table table-hover">
                    <thead>
                        <th>
                            Category Name    
                        </th>   
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>    
            
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    {{$category->name}}
                                </td>

                                <td>
                                <a href="{{route('category.edit', ['id'=>$category->id])}}" class="btn btn-info btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>

                                <td>
                                    {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
                                    {{-- <i class="fa fa-pencil"></i> --}}
                                    <a href="{{route('category.destroy' , ['id'=>$category->id])}}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-eraser"></i>
                                    </a>

                                    {{-- {{route('category.destroy' , ['id'=>$category->id])}} --}}
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
            </table>      
    </div>    
    </div> 

    
@endsection