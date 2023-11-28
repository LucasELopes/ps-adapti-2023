<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{

    private $fotos;
    private $nomes;
    private $formados;
    private $cursos;
    private $descricoes;

    public function __construct(Candidato $foto, Candidato $nome, Candidato $formado, Candidato $curso, Candidato $descricao)
    {
        $this->fotos = $foto;
        $this->nomes = $nome;
        $this->formados = $formado;
        $this->cursos = $curso;
        $this->descricoes = $descricao;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $fotos = $this->fotos->all();
        // $nomes = $this->nomes->all();
        // $formados = $this->formados->all();
        // $cursos = $this->cursos->all();
        // $descricoes = $this->descricoes->all();

        $candidatos = [
            'fotos' => $this->fotos->all(),
            'nomes' => $this->nomes->all(),
            'formados' => $this->formados->all(),
            'cursos' => $this->cursos->all(),
            'descricoes' => $this->descricoes->all(),
        ];

        return view('admin.candidato.index', compact('candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.candidato.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatoRequest $request)
    {
        $data = $request->all();
        $this->nomes->create($data);
        return redirect()->route('candidato.index')->with('success', 'Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
