<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
   
    public function index(Request $request)
    {
        
         //$request->get('id');  Pegando o id na requisicao
         // $request->url(); Pegando a url na requisicao
         // response('', 302, ['Location' => 'https://google.com']); Resposta redireciona para o google
         // redirect('https://google.com'); Resposta redireciona para o 
         
        /*
        $series = [ 
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];  */

        //$series = Serie::all();
        $series = Serie::query()->orderBy('nome')->get();


       // dd($series);

        
        return view('series.index')->with('series', $series); //With esta passando a variavel para a view //series.view é o caminho dentro da view

       /* return view('listar-series', compact('series')); */ //Retornando a view e no segundo paramentro passa os dados informando o nome da varievel que vai ser criada na view
                                                            //Compact, pega a variavel com o mesmo nome da string e passa como array com a chave e valor para a view
    }

    public function create(){

        return view('series.create');
    }

    public function store(Request $request){
        // $request->input('nome') 
        
        Serie::create($request->all());

        return redirect('/series');

       
        //Serie::create($request->only(['nome'])); Para adicionar apenas os campos definidos
        //Serie::create($request->except(['nome'])); Pega todos os campo exceto o definido
        //Serie::create(['nome' => 'Lost']);
        /*        
        $nomeSerie = $request->nome;

        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();*/

    }
}
