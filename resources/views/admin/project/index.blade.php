@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-12">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome Progetto</th>
                        <th scope="col">Linguaggio Utilizzato</th>
                        <th scope="col">link della repository</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($project as $singleproject)

                    <tr>
                        <th scope="row">{{ $singleproject->id}}</th>
                        <td>{{ $singleproject->nome}}</td>
                        <td>{{ $singleproject->linguaggio_utilizzato}}</td>
                        <td><a href=" {{ $singleproject->url_repo}}">Clicca qui per vedere la repository</a></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>

    </div>
</div>
@endsection
