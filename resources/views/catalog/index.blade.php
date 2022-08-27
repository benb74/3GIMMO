@extends('home')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($properties as $property)
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <h4 class="card-text">Bien a la vente</h4>
                                <h5>Reference : {{$property->ref_annonce}}</h5>
                                <h5>Prix : {{$property->prix_annonce}} million d'euros</h5>
                                <h5>Surface : {{$property->surface_habitable}} m2</h5>
                                <h5>Nombre de pieces : {{$property->nombre_de_piece}}</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Editer</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Supprimer
                                        </button>
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
