@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.types.index') }}"><i class="fa-solid fa-circle-arrow-left"></i></a>
    <h1>Progetti con {{ $type->name }}</h1>
    <ul>
        @forelse ($type->projects as $project)
            <a href="{{ route('admin.projects.show', $project->slug) }}">
                <li>{{ $project->title }}</li>
            </a>
        @empty
            <li>Nessun progetto presente</li>
        @endforelse
    </ul>
@endsection
