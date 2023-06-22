@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detalhe Notícia</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $noticia->titulo }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" placeholder="Descricao" readonly>{{ $noticia->descricao }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado Em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $noticia->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Atualizado em" value="{{ $noticia->updated_at }}" readonly>
        </div>
    </div>
@endsection
