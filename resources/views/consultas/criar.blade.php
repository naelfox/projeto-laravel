
@extends('layouts.main')

@section('titulo', 'Agendar Consultas')
@section('content')


<h1>Crie a agenda de Consulta</h1>
<form action="/consultas" method="POST">
    @csrf


    <div class="form-group">
        <label for="especialidade">Especialidade:</label>
        <input  type="text" class="form-control" id="especialidade" name="especialidade" placeholder="Especialidade">
    </div>


    <div class="form-group">
        <label for="nome">Nome do médico:</label>
        <input  type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>

    <div class="form-group">
        <label for="localidade">Localidade:</label>
        <input  type="text" class="form-control" id="localidade" name="localidade" placeholder="Local">
    </div>

    <div class="form-group">
        <label for="horario">Horário</label>
       <select name="horario" id="horario" class="form-control">
           <option value="Manhã">Manhã</option>
           <option value="Tarde">Tarde</option>
           <option value="Noite">Noite</option>
       </select>
    </div>


    <div class="form-group">
        <label for="localidade">Data:</label>
        <input  type="date" class="form-control" id="data" name="data">
    </div>

    <input type="submit" class="btn btn-primary" value="Criar Agenda">
</form>


@endsection
