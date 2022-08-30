@extends('edition')
@section('content')
    @if(Session::has('property_updated'))
        <span>{{Session::get('property_updated')}}</span>
    @endif
    <form method="post" action="{{route('update_property')}}" style="padding: 5em">
        @csrf
        <input type="hidden" name="id" value="{{$property->id}}">
        Reference de l'annonce : <input type="text" name="ref_annonce" value="{{$property->ref_annonce}}"><br><br>
        Prix : <input type="text" name="prix_annonce" value="{{$property->prix_annonce}}"> million(s) d'euros<br><br>
        Surface habitable : <input type="text" name="surface_habitable" value="{{$property->surface_habitable}}"> metres
        carres<br><br>
        Nombre de pieces : <input type="text" name="nombre_de_piece" value="{{$property->nombre_de_piece}}">
        pieces<br><br>
        Code vendeur* : <input type="text" name="id_seller" value="{{$property->id_seller}}" required="required">
        (nombre uniquement)<br><br>
        <h6 style="color:red;">*Champs obligatoire</h6><br><br>
        <input type="submit" value="Valider">
    </form>
@endsection
