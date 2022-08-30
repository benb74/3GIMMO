@extends('home')
@section('content')

    <div class="album py-5" style="background-color: #053840;">
        <div class="container" style="background-color: #053840;">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="padding-bottom: 1em">
                @foreach($properties as $property)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-text"><i class="fa-solid fa-house"></i> Bien à la vente</h4>
                                <h5>Référence : {{$property->ref_annonce}}</h5>
                                <h5>Prix : {{number_format($property->prix_annonce, 2)}} million d'euros</h5>
                                <h5>Surface : {{number_format($property->surface_habitable, 2)}} m2</h5>
                                <h5>Nombre de pièces : {{$property->nombre_de_piece}}</h5>
                                    <?php $seller = DB::table('sellers')->where('id', $property->id_seller)->first();
                                    ?>
                                <h5>Nom agent : {{$seller->nom_agent}}</h5>
                                <h5>Prénom agent : {{$seller->prenom_agent}}</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/editProperty/{{$property->id}}"
                                           type="button" class="btn btn-sm btn-outline-secondary"><i
                                                class="fa-solid fa-pen-to-square"></i><span> Editer</span>
                                        </a>
                                        <a href="/deleteProperty/{{$property->id}}" type="button"
                                           class="btn btn-sm btn-outline-secondary"><i
                                                class="fa-solid fa-trash"></i><span> Supprimer</span>
                                        </a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
