<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $properties = Property::all();

        return view('catalog.index', compact('properties'));
    }
}
