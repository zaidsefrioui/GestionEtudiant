@extends('layouts.master')

@section('title','Login')

@section('content')

        @if($errors->any())
        <div class="bg-red-200 p-d">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
            @endif
    <div class="d-flex justify-content-center">

        
        <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input  name="email" type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input  name="password" type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

        </form>

    </div>


@endsection
