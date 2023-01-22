@extends('layouts.app')
{{-- @section('title-page', 'La miglior Pasta - show') --}}
@section('title-page')
La miglior Pasta - Modifica
@endsection

@section('main-content')
<h1 class="text-center">Form per la Modifca</h1>

<form method="POST" action="{{route('pastas.update', $pasta->id)}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input value="{{ $pasta->title }}" name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id="">
            {{ $pasta->description }}
        </textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input value="{{ $pasta->type }}" name="type" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">immagine</label>
        <input value="{{ $pasta->image }}" name="image" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Tempo di cottura</label>
        <input value="{{ $pasta->cooking_time }}" name="cooking_time" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Peso</label>
        <input value="{{ $pasta->weight }}" name="weight" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Modifica record</button>
</form>
@endsection
