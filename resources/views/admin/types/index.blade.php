@extends('layouts.admin')

@section('content')
    <h1>La Lista delle Tipologie</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td>{{ $type->name }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.types.show', $type->slug) }}"><i
                                class="fa-solid fa-eye"></i> Progetti che la utilizzano</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
