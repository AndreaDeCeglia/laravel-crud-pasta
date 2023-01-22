@extends('layouts.app')
{{-- @section('title-page', 'La miglior Pasta - show') --}}
@section('title-page')
La miglior Pasta - {{$elem->title}}
@endsection


@section('main-content')
<h1 class="text-center">{{$elem->title}}</h1>

@if ( session('success') )
<div class="alert alert-success my-3">
    {{ session('success') }}
</div>
@endif

<div>
    <p>
        {{$elem->description}}
    </p>
</div>

@endsection
