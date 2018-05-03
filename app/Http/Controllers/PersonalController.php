<?php

namespace sisVeterinaria\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use sisVeterinaria\Http\Requests\PersonalFormRequest;
use sisVeterinaria\Personal;
use sisVeterinaria\Usuario;

class PersonalController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            $query    = trim($request->get('searchText'));
            $Personal = DB::table('personal as p')
                ->join('usuario as u', 'p.idpersonal', '=', 'u.idpersonal')
                ->join('tipo as t', 'u.idtipo', '=', 't.idtipo')
                ->select('p.idpersonal', 'p.nombre', 'p.ap_paterno', 'p.ap_materno', 'p.ci', 'p.telf', 'p.direccion', 't.cargo as cargo')
                ->where('p.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('p.ap_paterno', 'LIKE', '%' . $query . '%')
                ->orwhere('p.ap_materno', 'LIKE', '%' . $query . '%')
                ->orwhere('p.ci', 'LIKE', '%' . $query . '%')
                ->orwhere('p.telf', 'LIKE', '%' . $query . '%')
                ->orderBy('p.idpersonal', 'asc')
                ->paginate(8);
            return view('administrador.personal.index', ["Personal" => $Personal, "searchText" => $query]);
        }
    }
    public function create()
    {
        return view("administrador.personal.create");
    }
    public function store(PersonalFormRequest $request)
    {
        $Personal             = new Personal;
        $Personal->nombre     = $request->get('nombre');
        $Personal->ap_paterno = $request->get('ap_paterno');
        $Personal->ap_materno = $request->get('ap_materno');
        $Personal->ci         = $request->get('ci');
        $Personal->telf       = $request->get('telf');
        $Personal->direccion  = $request->get('direccion');
        $Personal->save();

        $usuario             = new Usuario;
        $usuario->usuario    = $request->get('usuario');
        $usuario->pass       = $request->get('pass');
        $usuario->idpersonal = $Personal->idpersonal;
        $usuario->idtipo     = $request->get('cargo');
        $usuario->save();

        return Redirect::to('administrador/personal');
    }
    public function show($id)
    {
        return view("administrador.personal.show", ["personal" => Personal::findOrFail($id)]);
    }
    public function edit($id)
    {
        $personal = Personal::findOrfail($id);
        $usu      = DB::table('usuario as u')
            ->join('tipo as t', 'u.idtipo', '=', 't.idtipo')
            ->select('u.idusuario', 'u.usuario', 'u.pass', 't.cargo as cargo', 'u.idpersonal', 'u.idtipo', 't.idtipo as idtipo')
            ->where('u.idpersonal', '=', $id)
            ->first();
        $tipo = DB::table('tipo')
            ->get();
        return view("administrador.personal.edit", ["personal" => $personal, "usu" => $usu, "tipos" => $tipo]);
    }
    public function update(PersonalFormRequest $request, $id)
    {
        $personal             = Personal::findOrFail($id);
        $personal->nombre     = $request->get('nombre');
        $personal->ap_paterno = $request->get('ap_paterno');
        $personal->ci         = $request->get('ci');
        $personal->ap_materno = $request->get('ap_materno');
        $personal->telf       = $request->get('telf');
        $personal->direccion  = $request->get('direccion');
        $personal->update();

        $usuario             = Usuario::findOrfail($id);
        $usuario->usuario    = $request->get('usuario');
        $usuario->pass       = $request->get('pass');
        $usuario->idpersonal = $personal->idpersonal;
        $usuario->idtipo     = $request->get('cargo');
        $usuario->update();

        return Redirect::to('administrador/personal');
    }
    public function destroy($id)
    {
        $personal = Personal::findOrfail($id);
        $personal->delete();
        $usuarios = Usuario::findOrFail($id);
        $usuarios->delete();
        return Redirect::to('administrador/personal');
    }
}
