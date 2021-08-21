@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <form action="{{route('admin.portfolios.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                    <img src="" style="height: 30vh" class="img-thumbnail">
                    <input type="file" name="big_image" class="mt-3" >
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">
                            <h4>Title</h4>
                        </label>
                        <input type="text" name="title" class="form-control" id="title" value="">
                    </div>
                    <div class="mb-3" >
                        <label for="description">
                            <h4>Description</h4>
                        </label>
                        <textarea input type="text" name="description" class="form-control" rows="5" id="description"></textarea>
                    </div>                    
                </div>
            </div>
        <input type="submit" name="submit" class="btn btn-primary mt-3" id="submit">
    </div>
    </form>
</main>
@endsection
