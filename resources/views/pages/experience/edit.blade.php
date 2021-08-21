@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <form action="{{route('admin.experience.update', $experience->id)}}" method="POST" enctype="multipart/form-data">
            @csrf            
            <div class="row">                
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">
                            <h4>Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$experience->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="title">
                            <h4>Workplace</h4>
                        </label>
                        <input type="text" name="workplace" class="form-control" id="workplace" value="{{$experience->workplace}}">
                    </div>
                    <div class="mb-3">
                        <label for="title">
                            <h4>Date</h4>
                        </label>
                        <input type="date" name="date" class="form-control" id="date" value="{{$experience->date}}">
                    </div>
                    <div class="mb-3" >
                        <label for="description">
                            <h4>Description</h4>
                        </label>
                        <textarea input type="text" name="description" class="form-control" rows="5" id="description">{{$experience->description}}</textarea>
                    </div>                    
                </div>
            </div>
        <input type="submit" name="submit" class="btn btn-primary mt-3" id="">
    </div>
    </form>
</main>
@endsection
