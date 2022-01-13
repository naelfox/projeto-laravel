<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Consulta;




class ConsultaController extends Controller
{
    public function index(){


        $search = request('search');


    if($search){
        $consultas = Consulta::where([
            ['especialidade', 'like', '%'.$search.'%']
        ])->get();
    }else{
        $consultas = Consulta::all();

    }
           return view('welcome', ['consultas' => $consultas, 'search' => $search]);
    }

    public function criar() {
        return view('consultas.criar');
    }

    public function store(Request $request){

        $consultas = new Consulta;
        $consultas -> especialidade = $request -> especialidade;
        $consultas -> nome = $request -> nome;
        $consultas -> localidade = $request -> localidade;
        $consultas -> horario = $request -> horario;
        $consultas -> data = $request -> data;



        $consultas -> save();



        return redirect('/') -> with ('msg', 'Cadastro efetuado!');

    }


    public function show($id){

        $consulta = Consulta::findOrFail($id);


        return view('consultas.show', ['consulta' => $consulta]);

    }

    public function destroy($id){


        Consulta::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Agenda cancelada!');
    }


}
