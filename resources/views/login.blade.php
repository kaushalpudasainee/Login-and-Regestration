@extends('layout.app')

@section('content')
@if(Session::has('fail'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('fail')}}
</div>
@endif

<div id="formLayout">

    <h1 class="d-flex justify-content-center">Login</h1>
    
    </div>
    <div class="d-flex justify-content-center">
  
   
        <form action="{{route('login')}}" method="Post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection