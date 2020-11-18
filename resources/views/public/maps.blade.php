@extends('public.template.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-4">Índice de Vegetação por Diferença Normalizada (IVDN)</h1>
                <p class="lead">O Indice de Vegetação por Diferença Normalizada (IVDN). O IVDN representa o estágio
                    de
                    desenvolvimento da vegetação de uma determinada região. A partir de setembro de 2015 essas
                    imagens são
                    obtidas do sensor MODIS do satélite Aqua do produto MYD13A3 com resolução espacial de 1Km
                    (composição
                    mensal). As imagens anteriores são obtidas pela combinação das refletâncias dos canais 1 e 2 do
                    sistemas
                    de sensores AVHRR do satélite NOAA - 18 com resolução espacial de 4 Km x 4Km.</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6 text-center">
                <h3>Paraíba</h3>
                <a href="">
                    <img class="border mb-2" src="{{ url('assets/images/paraiba.png')}}" alt="Imagem da Bandeira Paraíba"
                        style="width: 30%">
                    <p><strong>Acesse os Mapas Referente a Paraíba</strong></p>
                </a>
            </div>
            <div class="col-6 text-center">
                <h3>Pernambuco</h3>
                <a href="">
                    <img class="border border-info mb-2" src="{{ url('assets/images/pernambuco.png')}}"
                        alt="Imagem da Bandeira Pernambuco" style="width: 30%">
                    <p><strong>Acesse os Mapas Referente a Pernambuco</strong></p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <a class="btn btn-primary" href="{{ route("public.list") }}">Acesse Listagem de Todas as Imagens de
                    Satélite</a>
            </div>
        </div>
    </div>
@endsection

