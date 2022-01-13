
@extends('layouts.main')

@section('titulo', 'Hospital Meta')
@section('content')

<div id="busca-container" class="col-md-12">
    <h1>Procure uma consulta</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar">
    </form>
</div>
<div id="consultas-container" class="col-md-12">


@if($search)
<h3>Resultados da busca por: "{{$search}}"</h3>
@else
<h2>Todas as agendas dos próximos dias</h2>
@endif


    <div id="cards-container" class="row">
        @foreach($consultas as $consulta)
        <div class = "card-col-md-3">

            <div class="card">
            <img src="/imagens/consulta.jpg" alt="{{$consulta -> titulo}}">

                   <h5 class="card-titulo">{{$consulta -> especialidade}}</h5>
                   <p class="card-medicos">{{$consulta -> nome}}</p>
                   <p class="card-data">{{date('d/m/Y', strtotime($consulta -> data))}}</p>
                   <a href="/consultas/{{$consulta -> id}}"class="btn btn-primary">mais</a>
                  </div>
        </div>

        @endforeach
        @if(count($consultas) == 0)
        <p>Sem novas consultas criadas</p>
        @endif
    </div>
</div>

@endsection
