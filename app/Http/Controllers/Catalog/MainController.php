<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $sellers = Seller::all();
        return view('catalog.indexProperty', compact('properties', 'sellers'));
    }

    public function addProperty()
    {
        return view('catalog.addProperty');
    }

    public function saveProperty(Request $request)
    {
        DB::table('properties')->insert([
            'ref_annonce' => $request->ref_annonce,
            'prix_annonce' => $request->prix_annonce,
            'surface_habitable' => $request->surface_habitable,
            'nombre_de_piece' => $request->nombre_de_piece,
            'id_seller' => $request->id_seller
        ]);
        return back()->with('property_saved', 'Enregistrement réussi !');
    }

    public function editProperty($id)
    {
        $property = DB::table('properties')->where('id', $id)->first();

        return view('catalog.editProperty', compact('property'));
    }

    public function updateProperty(Request $request)
    {
        DB::table('properties')->where('id', $request->id)->update([
            'ref_annonce' => $request->ref_annonce,
            'prix_annonce' => $request->prix_annonce,
            'surface_habitable' => $request->surface_habitable,
            'nombre_de_piece' => $request->nombre_de_piece,
            'id_seller' => $request->id_seller
        ]);
        return back()->with('property_updated', 'Propriété mise a jour avec succès !');
    }

    public function deleteProperty($id)
    {
        DB::table('properties')->where('id', $id)->delete();
        return back()->with('property_deleted', 'Propriété effacée avec succès !');
    }
}
