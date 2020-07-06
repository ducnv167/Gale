@extends('header')
@section('sidebar')
<a href="" class="nav-link">
    @if(\Illuminate\Support\Facades\Auth::user())
        <img style="width:40px; border-radius: 50%" src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}" alt="My Avatar">
    @else
        Login
    @endif
</a>
@endsection
