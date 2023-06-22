<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticia = Noticia::orderBy('created_at', 'DESC')->get();

        return view('noticia.index', compact('noticia'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noticia = new Noticia;
        return view('noticia.create')->with(['noticia' => $noticia]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new Noticia;
        $this->validate($request, [
        'titulo' => 'required',
        'descricao' => 'required'
        ]);
        $noticia->fill($request->all());
        $noticia->save();
        return redirect()->route('noticia.index')->with('success', 'Notícia adicionada com sucesso!');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);

        return view('noticia.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticia.edit', compact('noticia'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticia = Noticia::find($id);
        $this->validate($request, [
        'titulo' => 'required',
        'descricao' => 'required'
        ]);
        $noticia->fill($request->all());
        $noticia->save();
        return redirect()->route('noticia.index')->with('success', 'Notícia alterada com sucesso!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect()->route('noticia.index')->with('success', 'Notícia excluída com sucesso!');

    }

    public function getLoglista() {
        $html = '<h2>Lista de Noticias com Laravel</h2>';
        $html .= '<ul>';
        $noticias = DB::select('select * from noticias');
        foreach ($noticias as $n) {
            $html .= '<li> Titulo: '. $n->titulo .' ---
            Descrição: '. $n->descricao .'. </li>';
        }
            $html .= '</ul>';
 return $html;
}
}
