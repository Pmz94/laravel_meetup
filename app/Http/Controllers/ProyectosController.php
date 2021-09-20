<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Redirect;
use App\Http\Requests\ProyectoRequest;

class ProyectosController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function demo() {
		echo "Hola Mundo";
	}

	public function index() {
		$proyectos = Proyecto::all();
		return view('proyectos.index', compact('proyectos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('proyectos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ProyectoRequest $request) {
		$proyecto = new Proyecto;

		$proyecto->nombre = $request->nombre;
		$proyecto->raza = $request->raza;

		$proyecto->save();

		return redirect()->route('proyectos.index')->with('info', 'Proyecto Creado');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$proyecto = Proyecto::find($id);
		return view('proyectos.show', compact('proyecto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$proyectos = Proyecto::find($id);
		return view('proyectos.edit', compact('proyectos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ProyectoRequest $request, $id) {
		$proyecto = Proyecto::find($id);

		$proyecto->nombre = $request->nombre;
		$proyecto->raza = $request->raza;

		$proyecto->save();

		return redirect()->route('proyectos.index')->with('info', 'Proyecto Actualizado');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$proyecto = Proyecto::find($id);
		$proyecto->delete();
		return back()->with('info', 'Proyecto Eliminado.');
		//return Redirect::route('proyectos')->with('message', 'Proyecto Eliminado.');
	}
}