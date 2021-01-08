@extends('layout')



@section('content')
    @include('consultant.create')

    <div class="row col-12">
        <h2 class="h2">Consultores Cadastrados</h2>
    </div>
    <ul class="list-group list-group-flush">
        @foreach($consultants as $consultant)
            <li class="list-group-item">
                <a href="/editar/{{$consultant->id}}" class="text-dark">{{$consultant->nome}}</a>
            </li>
        @endforeach
    </ul>
    </div>
@endsection
