@extends('add')
@section('content')
    @if(Session::has('property_saved'))
        <span>{{Session::get('property_saved')}}</span>
    @endif
<form method="post" action="{{route('save_property')}}" style="padding: 5em">
    @csrf
    Reference de l'annonce : <input type="text" name="ref_annonce" value=""><br><br>
    Prix : <input type="text" name="prix_annonce" value=""> million(s) d'euros<br><br>
    Surface habitable : <input type="text" name="surface_habitable" value=""> metres carres<br><br>
    Nombre de pieces : <input type="text" name="nombre_de_piece" value=""> pieces<br><br>
    Code vendeur* : <input type="text" name="id_seller" value="" required="required"> (nombre uniquement)<br><br>
    <h6 style="color:red;">*Champs obligatoire</h6><br><br>
    <input type="submit" value="Valider">
</form>
@endsection
