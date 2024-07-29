@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if (session('message_nuovo_progetto'))
            <div class="alert alert-success">
                {{ session('message_nuovo_progetto') }}
            </div>

        @elseif (session('message_update_progetto'))
            <div class="alert alert-success">
                {{ session('message_update_progetto')}}
            </div>
        @endif
        <div class="col-12">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome Progetto</th>
                        <th scope="col">Linguaggio Utilizzato</th>
                        <th scope="col">link della repository</th>
                        <th scope="col">Azioni</th>
                    </tr>
                    </thead>
                    <tbody>


                    <tr>
                        <th scope="row">{{ $project->id}}</th>
                        <td>{{ $project->nome}}</td>
                        <td>{{ $project->linguaggio_utilizzato}}</td>
                        <td><a href=" {{ $project->url_repo}}">Clicca qui per vedere la repository</a></td>
                        <td class="d-flex">

                            <a href="{{ route('admin.project.edit', ['project' => $project->id]) }}" class="btn btn-primary d-flex justify-content-center mx-2">Edit</a>
                            <form action="{{ route('admin.project.destroy', ['project' => $project->id]) }}" method="POST" class="d-inline-block delete_form" data_project_id="{{ $project->id }}" data_project_nome="{{ $project->nome }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-warning">Elimina</button>
                            </form>
                        </td>
                    </tr>

                    </tbody>
                </table>
        </div>

    </div>
</div>
@endsection
