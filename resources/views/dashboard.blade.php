@extends('layout.app')

@section('content')
<div>
    <h1>Welcome to dashboard</h1>
    <form action="{{route('logout')}}" method="get">
        <button type="submit" >LogOut</button>
    </form>
</div>
@endsection