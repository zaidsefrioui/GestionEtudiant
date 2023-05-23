@extends('layouts.master')

@section('title','Etudiants')
@section('etudiantActive','active')

@section('content')
<div class="d-flex justify-content-center">
  <ul class="list-group">

      <a href="{{route('etudiantnew')}}"> <button class="btn-primary">Add new</button></a>

    @foreach ($etudiants as $e)
    <li class="list-group-item">{{$e->nom}} {{$e->prenom}} | {{$e->sexe}}
        <a href="{{route('etudiantedit',$e->id)}}"><button class="btn-success">edit</button></a>

        <a href="{{route('etudiantdelete',$e->id)}}"><button class="btn-outline-danger">delete</button></a>
     </li>

    @endforeach

  </ul>
</div>


@endsection
