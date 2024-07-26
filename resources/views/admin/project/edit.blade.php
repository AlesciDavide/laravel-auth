@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-12">
            <form action="{{ route('admin.project.update', ['project' => $project->id]) }}" method="POST" id="creation_form">
                @method("PUT")
                @csrf

                <div class="input-group-sm container mb-5 w-50">

                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome progetto" id="nome" name="nome" value="{{ old('nome', $project->nome) }}">


                    <label for="linguaggio_utilizzato">linguaggio_utilizzato</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="linguaggio_utilizzato dell'animale" id="linguaggio_utilizzato" name="linguaggio_utilizzato" value="{{ old('linguaggio_utilizzato', $project->linguaggio_utilizzato) }}">

                    <label for="url_repo">url_repo</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="url_repo dell'animale" id="url_repo" name="url_repo" value="{{ old('url_repo', $project->url_repo) }}">



                    <div class="d-flex justify-content-between mt-3">

                            <input class="btn btn-primary" type="submit" value="Modifica">
                            <input class="btn btn-warning" type="reset" value="resetta campi">

                    </div>
                </div>
            </form>
            <a href="{{ route('admin.project.index')}}" class="card-link d-flex justify-content-center">Torna alla lista dei progetti</a>
        </div>

    </div>
</div>
@endsection
