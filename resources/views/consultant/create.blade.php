@include('nav')
<form action="/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row mt-4">
        <div class="form-group col-md-4">
            <label class="font-weight-bold" for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <div class="form-group col-md-4">
            <label for="rg">RG:</label>
            <input type="text" class="form-control" id="rg" name="rg">
        </div>
        <div class="form-group col-md-2">
            <label for="orgaoExpedidor">Órg. Exp:</label>
            <input type="text" class="form-control" id="orgaoExpedidor" name="orgaoExpedidor">
        </div>
        <div class="form-group col-md-2">
            <label for="uf">UF:</label>
            <select class="form-control" id="uf" name="uf">
                @foreach($ufs as $uf)
                    <option value="{{$uf->uf}}">{{$uf->uf}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label class="font-weight-bold" for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group col-md-3">
            <label for="dataDeNascimento">Data nascimento:</label>
            <input type="date" class="form-control" id="dataDeNascimento" name="dataDeNascimento">
        </div>
        <div class="form-group col-md-3">
            <label class="font-weight-bold" for="genero">Sexo:</label>
            <select class="form-control" id="genero" name="genero" required>
                <option>Masculino</option>
                <option>Feminino</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label class="font-weight-bold" for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="estadoCivil">Estado Cívil:</label>
            <select class="form-control" id="estadoCivil" name="estadoCivil">
                <option value="Solteiro">Solteiro</option>
                <option value="Casado">Casado</option>
                <option value="Divorciado">Divorciado</option>
            </select>
        </div>
        <div class="form-group col-md-9">
            <label for="linkCVLattes">Link Currículo Lattes:</label>
            <input type="text" class="form-control" id="linkCVLattes" name="linkCVLattes">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="titulacao">Titulação:</label>
            <select class="form-control" id="titulacao" name="titulacao">
                <option value="Graduação">Graduação</option>
                <option value="Especilização">Especialização</option>
                <option value="Mestrado">Mestrado</option>
                <option value="Doutorado">Doutorado</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="instituicaoTitulacao">Instituição titulação:</label>
            <input type="text" class="form-control" id="instituicaoTitulacao" name="instituicaoTitulacao">
        </div>
        <div class="form-group col-md-3">
            <label for="anoTitulacao">Ano titulação:</label>
            <input type="text" class="form-control" id="anoTitulacao" name="anoTitulacao">
        </div>
    </div>
</form>

