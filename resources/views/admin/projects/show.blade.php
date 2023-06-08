@extends('layouts.admin')

@section('content')
    <a href="{{ url()->previous() }}"><i class="fa-solid fa-circle-arrow-left"></i></a>
    <h1>{{ $project->title }}</h1>
    <div class="d-flex justify-content-between">

        @if ($project->type)
            <span>Tipologia: {{ $project->type->name }}</span>
        @else
            <span>Nessuna tipologia</span>
        @endif

        <span>{{ $project->slug }}</span>
    </div>
    <div class="mt-3">
        <h5>Tecnologie: </h5>
        @forelse ($project->technologies as $technology)
            <span>{{ $technology->name }} {{ $loop->last ? '' : ',' }}</span>
        @empty
            <span>Nessuna tecnologia presente</span>
        @endforelse
    </div>
    <p class="mt-4">{{ $project->content }}</p>
@endsection
