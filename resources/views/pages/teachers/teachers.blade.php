@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course Code</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach($teachers as $count=>$teacher )
            <tr>
                <th scope="row">{{++$count}}</th>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->course_name}}</td>
                <td>{{$teacher->code}}</td>
                <td>
                    <a href="/user-edit/{{$teacher->id}}">
                        <button type="button" class="btn btn-success">Edit</button>
                    </a>
                    <a href="/user-delete/{{$teacher->id}}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection