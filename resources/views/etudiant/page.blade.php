@extends('layouts.master')

@section('title','Etudiant')
@section('etudiantActive','active')

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

<form action="{{ $id > 0 ? route('etudiantedit',$id) : route('etudiantnew') }}" method="POST" enctype="multipart/form-data">

    {{ csrf_field() }}

    <!-- Name input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nom</label>
      <input type="text" id="form4Example1" class="form-control" name="nom" value="{{$id>0? $etudiant->nom : ""}}"/>
    </div>


    <!-- Name input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Prenom</label>
        <input type="text" id="form4Example1" class="form-control" name="prenom" value="{{$id>0? $etudiant->prenom : ""}}"/>
    </div>

    <!-- Name input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Sexe</label>
        <select name="sexe" id="" class="formselect">
            <option value="Male" {{$id>0 ? ($etudiant->sexe=="Male" ? "selected" : "" ) : ""  }}>Male</option>
            <option value="Female" {{$id>0 ? ($etudiant->sexe=="Female" ?  "selected" : "") : ""  }}>Female</option>
        </select>
    </div>

    <!-- Name input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Filiere</label>
        <select name="filiere_id" id="" class="formselect">

            @foreach($filieres as $f)
                <option value="{{$f->id}}" {{$id>0 ? ($etudiant->filiere()->first()->id==$f->id ?  "selected" : "") : ""  }}>{{$f->nom}}</option>
            @endforeach


        </select>
    </div>
    
    @if ($id==0)
        <!-- email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">User Email</label>
        <input type="email" id="form4Example1" class="form-control" name="email" />
    </div>
    
        <!-- password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">User password</label>
            <input type="password" id="form4Example1" class="form-control" name="password" />
        </div>

    @endif




    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">{{ $id > 0 ? "Edit": "Add"}}</button>
  </form>

</div>

@endsection
