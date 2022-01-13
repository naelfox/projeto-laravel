
@extends('layouts.main')

@section('titulo', $consulta -> titulo)
@section('content')

<div class="col-md-10 offset-md-1">
<div class="row">

<div id="dados-container" class="col=md-6">
    <h1>Agenda de  {{$consulta->especialidade}}</h1>
    <p>Médico de serviço: {{$consulta->nome}}</p>
    <p>Unidade: {{$consulta->localidade}}</p>

    @if($consulta->horario == 'Manhã')
    <p> Horário: {{$consulta->horario}} (das 6h até 12h)</p>

    @elseif($consulta->horario == 'Tarde')
    <p>Horário: {{$consulta->horario}} (do 12h até 18h)</p>

    @else
    <p>Horário: {{$consulta->horario}} (das 18h até 00h)</p>

    @endif
    <p>Data: {{date('d/m/Y', strtotime($consulta -> data))}}</p>



    <button type="button" class="btn btn-info"><ion-icon name="send-outline"></ion-icon>Enviar no SMS</button>


    <form action="/consultas/{{$consulta -> id}}" method ="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><ion-icon name="close-circle-outline"></ion-icon>Cancelar a agenda</button>
    </form>


</div>



</div>

</div>

@endsection
