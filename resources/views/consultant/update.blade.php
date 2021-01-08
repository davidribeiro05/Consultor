@extends('layout')
@section('content')
    <div class="container">
        <form action="/update" method="POST" enctype="multipart/form-data">
            @csrf
            <nav class="navbar navbar-light bg-light p-3">

                <div class="d-flex justify-content-start mt-4">
                    <a href="/" class="btn btn-lg btn-outline-secondary mr-2"><i class="far fa-file "></i></a>
                    <button type="submit" class="btn btn-lg btn-outline-primary mr-2" id="save"
                    "><i
                        class="far fa-save"></i>
                    </button>
                    <a href="/excluir/{{$consultant->id}}" class="btn btn-lg btn-outline-danger mr-2"
                       onclick="return confirm('Tem certeza que deseja excluir esse registro?')"><i
                            class="fas fa-trash"></i>
                    </a>
                </div>
            </nav>
            <div class="form-row mt-4">
                <input type="hidden" value="{{$consultant->id}}" name="id">
                <div class="form-group col-md-4">
                    <label class="font-weight-bold" for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required value="{{$consultant->cpf}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" id="rg" name="rg" value="{{$consultant->rg}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="orgaoExpedidor">Órg. Exp:</label>
                    <input type="text" class="form-control" id="orgaoExpedidor" name="orgaoExpedidor"
                           value="{{$consultant->orgaoExpedidor}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="uf">UF:</label>
                    <select class="form-control" id="uf" name="uf">
                        <option value="{{$consultant->uf}}">{{$consultant->uf}}</option>
                        @foreach($ufs as $uf)
                            <option value="{{$uf->uf}}">{{$uf->uf}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="font-weight-bold" for="inputEmail4">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required
                           value="{{$consultant->nome}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="dataDeNascimento">Data nascimento:</label>
                    <input type="date" class="form-control" id="dataDeNascimento" name="dataDeNascimento"
                           value="{{$consultant->dataDeNascimento}}">
                </div>
                <div class="form-group col-md-3">
                    <label class="font-weight-bold" for="uf">Sexo:</label>
                    <select class="form-control" id="genero" name="genero" required>
                        <option value="{{$consultant->genero}}">{{$consultant->genero}}</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="font-weight-bold" for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required
                           value="{{$consultant->email}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="estadoCivil">Estado Cívil:</label>
                    <select class="form-control" id="estadoCivil" name="estadoCivil">
                        <option value="{{$consultant->estadoCivil}}">{{$consultant->estadoCivil}}</option>
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado">Casado</option>
                        <option value="Divorciado">Divorciado</option>
                    </select>
                </div>
                <div class="form-group col-md-9">
                    <label for="linkCVLattes">Link Currículo Lattes:</label>
                    <input type="text" class="form-control" id="linkCVLattes" name="linkCVLattes"
                           value="{{$consultant->linkCVLattes}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="titulacao">Titulação:</label>

                    <select class="form-control" id="titulacao" name="titulacao">
                        <option value="{{$consultant->titulacao}}">{{$consultant->titulacao}}</option>
                        <option value="Graduação">Graduação</option>
                        <option value="Especilização">Especialização</option>
                        <option value="Mestrado">Mestrado</option>
                        <option value="Doutorado">Doutorado</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="instituicaoTitulacao">Instituição titulação:</label>
                    <input type="text" class="form-control" id="instituicaoTitulacao" name="instituicaoTitulacao" ,
                           value="{{$consultant->instituicaoTitulacao}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="anoTitulacao">Ano titulação:</label>
                    <input type="text" class="form-control" id="anoTitulacao" name="anoTitulacao"
                           value="{{$consultant->anoTitulacao}}">
                </div>
            </div>
        </form>
    </div>
@endsection
