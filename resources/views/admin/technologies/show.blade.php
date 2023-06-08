@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.technologies.index') }}"><i class="fa-solid fa-circle-arrow-left"></i></a>
    <h1>Progetti con {{ $technology->name }}</h1>
    <ul>
        @forelse ($technology->projects as $project)
            <a href="{{ route('admin.projects.show', $project->slug) }}">
                <li>{{ $project->title }}</li>
            </a>
        @empty
            <li>Nessun progetto presente</li>
        @endforelse
    </ul>
@endsection
