@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Cadastrar Notícia</h1>
    <hr />
    <form action="{{ route('noticia.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titulo" class="form-control" placeholder="Título">
            </div>
            <div class="col">
                <textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Incluir</button>
            </div>
        </div>
    </form>
@endsection
