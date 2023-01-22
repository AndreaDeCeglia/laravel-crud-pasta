@extends('layouts.app')
@section('title-page', 'La miglior Pasta - Home')
@section('main-content')
<h1>La lista della Pasta</h1>

@if ( session('success') )
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


{{-- Tutti i record della tabella pasta --}}
<div>
    <a href="{{route('pastas.create')}}">Create Pasta</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">type</th>
            <th scope="col">image</th>
            <th scope="col">cooking_time</th>
            <th scope="col">weight</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pastas as $elem)
            <tr>
                <td>{{$elem->id}}</td>
                <td>
                    <a href="{{route('pastas.show', $elem->id )}}">
                        {{$elem->title}}
                    </a>
                </td>
                <td>{!!$elem->description!!}</td>
                <td>{{$elem->type}}</td>
                <td>{{$elem->image}}</td>
                <td>{{$elem->cooking_time}}</td>
                <td>{{$elem->weight}}</td>
                 
                <td>
                    
                    <form action="{{route('pastas.destroy', $elem->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit">
                            {{-- <i class="fa-solid fa-xmark"></i> --}}
                            X
                        </button>
                    </form>
                    
                    <div>
                        <a href="{{route('pastas.edit', $elem->id)}}">
                             {{-- <i class="fa-solid fa-pen"></i> --}}
                             edit
                        </a>
                    </div>
                 </td>
            </tr>
        @endforeach

    </tbody>
</table>

    {{ $pastas->links() }}

@endsection
