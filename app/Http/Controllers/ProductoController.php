<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return response()->json($productos);
    }

    // Obtener un producto por su ID
    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    // Crear un nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'imagen_url' => 'nullable|url',
            'categoria' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
        ]);

        $producto = Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'imagen_url' => $request->imagen_url,
            'categoria' => $request->categoria,
            'marca' => $request->marca,
        ]);

        return response()->json($producto, 201);
    }

    // Actualizar un producto existente
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'string|max:255',
            'descripcion' => 'string',
            'precio' => 'numeric',
            'stock' => 'integer',
            'imagen_url' => 'url',
            'categoria' => 'string|max:255',
            'marca' => 'string|max:255',
        ]);

        $producto->update($request->only([
            'nombre',
            'descripcion',
            'precio',
            'stock',
            'imagen_url',
            'categoria',
            'marca',
        ]));

        return response()->json($producto);
    }

    // Eliminar un producto
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json(['message' => 'Producto eliminado']);
    }
}
