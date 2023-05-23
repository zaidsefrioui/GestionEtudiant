@extends('layouts.master')

@section('title','Filieres')
@section('filiereActive','active')

@section('content')

    <div class="d-flex justify-content-center">

        <form action="{{ $id > 0 ? route('filiereedit',$id) : route('filierenew') }}" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Nom</label>
                <input type="text" id="form4Example1" class="form-control" name="nom" value="{{$id>0? $filiere->nom : ""}}"/>
            </div>





            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">{{ $id > 0 ? "Edit": "Add"}}</button>
        </form>



    </div>
@php
$etudiants = $filiere->etudiants()->get();
@endphp

    @if($id>0 && count($etudiants)>0)
    <div class="d-flex justify-content-center">
        <ul class="list-group">

Liste des etudiants
            @foreach ($etudiants as $e)
                <li class="list-group-item">{{$e->nom}} {{$e->prenom}} | {{$e->sexe}}

                </li>

            @endforeach

        </ul>
    </div>
    @endif

@endsection
