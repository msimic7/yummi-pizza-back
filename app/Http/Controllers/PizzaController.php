<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pizza;
use App\Http\Resources\PizzaCollection;

class PizzaController extends Controller
{
    public function index()
    {
        return new PizzaCollection(Pizza::all());
    }
}
