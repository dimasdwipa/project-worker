@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">List of Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Resume</li>
        </ol>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>                    
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Workplace</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($resume) > 0)
                    @foreach ($resume as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>                            
                            <td>{{$item->title}}</td>
                            <td>{{Str::limit(strip_tags($item->description),40)}}</td>                            
                            <td>{{$item->date}}</td>
                            <td>{{$item->workplace}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="{{route('admin.resume.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-2">
                                        <form action="{{route('admin.resume.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="submit" id="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
</main>
@endsection
