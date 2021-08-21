@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <form action="{{route('admin.me.update', $me->id)}}" method="POST" enctype="multipart/form-data">
            @csrf            
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Project Image</h3>
                    <img src="{{url($me->img)}}" style="height: 30vh" class="img-thumbnail">
                    <input type="file" name="img" class="mt-3" >
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">
                            <h4>Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$me->title}}">
                    </div>
                    <div class="mb-3" >
                        <label for="description">
                            <h4>Description</h4>
                        </label>
                        <textarea input type="text" name="description" class="form-control" rows="5" id="description">{{$me->description}}</textarea>
                    </div>                    
                </div>
            </div>
        <input type="submit" name="submit" class="btn btn-primary mt-3" id="">
    </div>
    </form>
</main>
@endsection
