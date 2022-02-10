@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $count=>$user )
            <tr>
                <th scope="row">{{++$count}}</th>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->phone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection