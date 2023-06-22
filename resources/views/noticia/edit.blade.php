@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Alterar Notícia</h1>
    <hr />
    <form action="{{ route('noticia.update', $noticia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{ $noticia->titulo }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" placeholder="Descricao" >{{ $noticia->descricao }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Alterar</button>
            </div>
        </div>
    </form>
@endsection
