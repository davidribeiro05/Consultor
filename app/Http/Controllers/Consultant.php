<?php

namespace App\Http\Controllers;

use App\Models\Consultant as ConsultantModel;
use App\Models\Uf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Consultant extends Controller
{
    public function index()
    {

        return view('consultant.index', [
            'title' => 'Bem vindo',
            'ufs' => Uf::all('uf'),
            'consultants' => ConsultantModel::all('nome', 'id')
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required',
                'cpf' => 'required',
            ]
        );
        if (ConsultantModel::create($request->all())) {
            return redirect('/')->with('success', 'Registro inserido com sucesso');
        }
    }

    public function edit(Request $request, int $id)
    {
        $consultant = ConsultantModel::find($id);

        return view('consultant.update', [
            'title' => 'Atualização',
            'ufs' => Uf::all('uf'),
            'consultant' => $consultant
        ]);
    }

    public function update(Request $request)
    {
        $consultant = ConsultantModel::find($request->id);

        $consultant->cpf = $request->cpf;
        $consultant->nome = $request->nome;
        $consultant->genero = $request->genero;
        $consultant->email = $request->email;
        $consultant->rg = $request->rg;
        $consultant->orgaoExpedidor = $request->orgaoExpedidor;
        $consultant->uf = $request->uf;
        $consultant->titulacao = $request->titulacao;
        $consultant->instituicaoTitulacao = $request->instituicaoTitulacao;
        $consultant->anoTitulacao = $request->anoTitulacao;
        $consultant->linkCVLattes = $request->linkCVLattes;
        $consultant->dataDeNascimento = $request->dataDeNascimento;
        $consultant->estadoCivil = $request->estadoCivil;

        if ($consultant->save()) {
            return redirect("/editar/{$request->id}")
                ->with('success', 'Registro editado com sucesso!.');
        }
    }

    public function destroy(int $id)
    {
        $consultant = ConsultantModel::find($id);
        if ($consultant->delete()) {
            return redirect('/')
                ->with('success', 'Registro deletado com sucesso!.');
        }

    }

}
