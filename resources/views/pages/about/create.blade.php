@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <form action="{{route('admin.about.create')}}" method="POST" enctype="multipart/form-data">
            @csrf            
            <div class="row">                
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">
                            <h4>Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3" >
                        <label for="sub_title">
                            <h4>Description</h4>
                        </label>
                        <textarea input type="text" name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="icon">
                            <h4>Font Awsome Icon</h4>
                        </label>
                        <input type="text" name="icon" class="form-control" id="icon">
                    </div>                    
                </div>
            </div>
        <input type="submit" name="submit" class="btn btn-primary mt-3" id="">
    </div>
    </form>
</main>
@endsection
