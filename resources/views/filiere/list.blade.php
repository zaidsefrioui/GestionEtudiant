@extends('layouts.master')

@section('title','Filieres')
@section('filiereActive','active')

@section('content')
<div class="d-flex justify-content-center">
  <ul class="list-group">

      <a href="{{route('filierenew')}}"> <button class="btn-primary">Add new</button></a>

    @foreach ($filieres as $f)

    <li class="list-group-item">{{$f->nom}}

        <a href="{{route('filiereedit',$f->id)}}"><button class="btn-success">edit</button></a>

        <a href="{{route('filieredelete',$f->id)}}"><button class="btn-outline-danger">delete</button></a>
    </li>


    @endforeach

  </ul>
</div>


@endsection
