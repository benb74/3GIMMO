<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Benoit Bequignon">
    <meta name="generator" content="Hugo 0.101.0">
    <title>3G IMMO Crud</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    {{--js css--}}
    <link href="{{asset('ccs/bootstrap.min.css')}}" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="{{asset('js/f55cd37179.js')}}" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <meta name="theme-color" content="#712cf9">


    <style>


        .link:hover {
            cursor: default;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }


        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


</head>
<body>
{{--insert the header from views/template--}}
@include('template.header')

<main>
    <div style="background-color: #053840;">


        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Notre mission</h1>
                    <p class="lead text-muted">Sélectionner les conseillers immobiliers les plus expérimentés pour vous
                        proposer la meilleure transaction immobilière possible.</p>
                    <h1 class="fw-light">Vous apporter une visibilité maximale</h1>
                    <p class="lead text-muted">Nous diffusons vos annonces
                        sur toutes les plus grandes
                        plateformes immobilières et
                        celles spécialisées.</p>
                    <p>
                        <a href="{{route('add_property')}}" class="btn btn-primary my-2">Nouveau bien à
                            vendre</a><br><br>
                        @if(Session::has('property_deleted'))
                            <span>{{Session::get('property_deleted')}}</span>
                        @endif
                    </p>
                </div>
            </div>
        </section>
    </div>
    {{--    @yiel insert the content of the @extends part in views/catalog/indexProperty--}}
    @yield('content')
</main>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
    </div>
</footer>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

</body>
</html>
