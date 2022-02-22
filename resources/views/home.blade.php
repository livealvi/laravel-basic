@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <h1>Home -
        @if (session('user'))
        {{session('user') ? session('user.0') : "null" }}</h1>

    @else
    {{session('teacher') ? session('teacher.0') : "null" }}</h1>
    @endif
    {{
    dd(
    Session::all()
    )
    }}
</div>

@endsection