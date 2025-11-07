<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Composer;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departamentos = Departamentos::all();
        return view('departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $departamentos = new Departamentos();
        $departamentos->nombredepartamento = $request->nombredepartamento;
        $departamentos->codigodepartamento = $request->codigodepartamento;
        $departamentos->save();

        return redirect(Route('departamentos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $departamentos = Departamentos::find($id);
       return view('departamentos.edit', compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $departamentos = Departamentos::find($id);

        $departamentos->nombredepartamento = $request->nombredepartamento;
        $departamentos->codigodepartamento = $request->codigodepartamento;
        $departamentos->update();

        return redirect(Route('departamentos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $departamento = Departamentos::find($id);
        $departamento->delete();

        return redirect(Route('departamentos.index'));
    }
}
