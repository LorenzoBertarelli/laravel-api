@extends('layouts.admin')

@section('content')
    <h2>Modifica il Progetto {{ $project->title }}</h2>

    @include('partials.errors')

    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>

        <div class="mb-3">
            <label for="type">Tipologia</label>
            <select class="form-select" id="type" name="type_id">
                <option value=""></option>
                @foreach ($types as $type)
                    <option @selected($type->id == old('type_id', $project->type?->id)) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contentuto</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content', $project->content) }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection
