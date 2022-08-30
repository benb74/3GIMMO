@extends('add')
@section('content')
    @if(Session::has('property_saved'))
        <span>{{Session::get('property_saved')}}</span>
    @endif
    <form method="post" action="{{route('save_property')}}" style="padding: 5em">
        @csrf
        <h3>Nouvelle propriété</h3><br><br>
        <a class="bold">Référence de l'annonce : </a><br><input type="text" name="ref_annonce" placeholder="123654FG"><br><br>
        <a class="bold">Prix : </a><br><input type="number" name="prix_annonce" placeholder="125.05"> million(s) d'euros<br><br>
        <a class="bold">Surface habitable : </a><br><input type="number" name="surface_habitable" placeholder="12.25"> mètres carrés<br><br>
        <a class="bold">Nombre de pièces : </a><br><input type="number" name="nombre_de_piece" placeholder="5"> pièces<br><br>
        <a class="bold">Code vendeur* : </a><br><input type="number" name="id_seller" required="required" placeholder="4"> (nombre
        uniquement)<br><br>
        <h6 style="color:red;">*Champs obligatoire</h6><br><br>
        <input type="submit" value="Valider">
    </form>
@endsection
