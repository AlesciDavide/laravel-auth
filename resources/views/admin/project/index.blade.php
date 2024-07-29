@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if (session('message_delete'))
        <div class="alert alert-success">
            {{ session('message_delete') }}
        </div>
        @elseif (session('message_restore'))
        <div class="alert alert-success">
            {{ session('message_restore') }}
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
                    @foreach ($projects as $singleproject)

                    <tr>
                        <th scope="row">{{ $singleproject->id}}</th>
                        <td>{{ $singleproject->nome}}</td>
                        <td>{{ $singleproject->linguaggio_utilizzato}}</td>
                        <td><a href=" {{ $singleproject->url_repo}}">Clicca qui per vedere la repository</a></td>
                        <td>
                            <div class="d-flex ">
                                <a href="{{ route('admin.project.show', ['project' => $singleproject->id]) }}" class="btn btn-primary d-flex justify-content-center mx-2">Show</a>
                                <a href="{{ route('admin.project.edit', ['project' => $singleproject->id]) }}" class="btn btn-warning d-flex justify-content-center">edit</a>
                                <form action="{{ route('admin.project.destroy', ['project' => $singleproject->id]) }}" method="POST" class="d-inline-block delete_form mx-2" data_project_id="{{ $singleproject->id }}" data_project_nome="{{ $singleproject->nome }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection

@section('custom_script')
@vite('resources/js/delete_confirm.js')
@endsection
