<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ressources;

class RessourcesController extends Controller
{
    public function index()
    {
        $ressources = Ressources::all();
        return view('ressources', ['ressources' => $ressources]);
    }
}
