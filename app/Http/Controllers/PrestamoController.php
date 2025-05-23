<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Prestamo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class PrestamoController
 * @package App\Http\Controllers
 */
class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id(); // ID del usuario logueado (usuario)

        // Obtener los préstamos filtrados por el cliente logueado
        $prestamos = Prestamo::where('id_usuario', $userId)->paginate(10);
        //$prestamos = Prestamo::paginate(10);
        error_log($prestamos);

        return view('prestamo.index', compact('prestamos'))
            ->with('i', (request()->input('page', 1) - 1) * $prestamos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamo = new Prestamo();
        $usuarios = User::pluck('name', 'id'); // Trae id => name
        $clientes = Cliente::all();
        error_log($clientes);
        return view('prestamo.create', compact('prestamo','usuarios','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prestamo::$rules);

        $prestamo = Prestamo::create($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo = Prestamo::find($id);

        return view('prestamo.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestamo = Prestamo::find($id);

        return view('prestamo.edit', compact('prestamo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        request()->validate(Prestamo::$rules);

        $prestamo->update($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prestamo = Prestamo::find($id)->delete();

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo deleted successfully');
    }
}
