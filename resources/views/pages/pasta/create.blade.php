@extends('layouts.app')
{{-- @section('title-page', 'La miglior Pasta - show') --}}
@section('title-page')
La miglior Pasta - Create
@endsection

@section('main-content')
<h1 class="text-center">Form per la Create</h1>

@if ( $errors->any() )
    <div class="alert alert-danger my-3">
        <ul>
            @foreach ($errors->all() as $error )
               <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="{{route('pastas.store')}}">

    @csrf

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title">
        {{-- Errori inline --}}
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id=""></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input name="type" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">immagine</label>
        <input name="image" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Tempo di cottura</label>
        <input name="cooking_time" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Peso</label>
        <input name="weight" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Crea record</button>
</form>
@endsection
