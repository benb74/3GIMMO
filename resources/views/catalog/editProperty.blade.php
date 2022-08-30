@extends('edition')
@section('content')
    @if(Session::has('property_updated'))
        <span>{{Session::get('property_updated')}}</span>
    @endif
    <form method="post" action="{{route('update_property')}}" style="padding: 5em">
        @csrf
        <input type="hidden" name="id" value="{{$property->id}}">
        <h3>Modifier une propriété</h3><br><br>
        <a class="bold">Référence de l'annonce : </a><br><input type="text" name="ref_annonce"
                                                                value="{{$property->ref_annonce}}"><br><br>
        <a class="bold">Prix : </a><br><input type="number" name="prix_annonce" value="{{$property->prix_annonce}}">
        million(s) d'euros<br><br>
        <a class="bold">Surface habitable : </a><br><input type="number" name="surface_habitable"
                                                           value="{{$property->surface_habitable}}"> mètres
        carres<br><br>
        <a class="bold">Nombre de pièces : </a><br><input type="number" name="nombre_de_piece"
                                                          value="{{$property->nombre_de_piece}}">
        pièces<br><br>
        <a class="bold">Code vendeur* : </a><br><input type="number" name="id_seller" value="{{$property->id_seller}}"
                                                       required="required">
        (nombre uniquement)<br><br>
        <h6 style="color:red;">*Champs obligatoire</h6><br><br>
        <input type="submit" value="Valider">
    </form>
@endsection
