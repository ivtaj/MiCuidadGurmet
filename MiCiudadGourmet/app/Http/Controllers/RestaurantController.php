<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant; // Asegúrate de tener el modelo creado

class RestaurantController extends Controller
{
    // Método para listar restaurantes
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    // Método para mostrar un restaurante en detalle
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.show', compact('restaurant'));
    }

    // Agrega otros métodos (create, store, edit, update, destroy) según necesites
}
