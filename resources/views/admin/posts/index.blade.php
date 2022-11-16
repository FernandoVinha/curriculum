@extends('admin.layouts.app')

@section('Listagem dos Posts')

@section('content')
<h1> curiculo </h1>

@if (session('message'))
    <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('posts.search')}}" method="psot">
    @csrf
    <input type="text" name="search" placeholder="Filtro:">
    <button type="submit">Filtrar</button>
</form>

<a href="{{route('posts.create')}}">criar um novo</a>
@foreach ($posts as $post)
    <p>{{$post->institution}}[
        <a href="{{route('posts.show',$post->id)}}">detalhes</a>|
        <a href="{{route('posts.edit',$post->id)}}">editar</a>
    ]
    </p>

@endforeach
<hr>
@if (isset($filters))
    {{$posts->appends(filters)->links()}}

@else
    {{$posts->links()}}
@endif


@endsection
