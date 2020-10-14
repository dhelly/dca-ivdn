<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satélite | IVDN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <div class="main_header">
        <div class="container">
            <div class="row p-3 mx-2">
                <div class="col-4 main_header_logo">
                    <svg id="Layer_5" enable-background="new 0 0 64 64" height="42" viewBox="0 0 64 64" width="42"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <g>
                                <g>
                                    <path d="m29.757 2.929h8.485v14.142h-8.485z" fill="#e6e9ed"
                                        transform="matrix(.707 -.707 .707 .707 2.887 26.971)" />
                                </g>
                                <g>
                                    <path d="m49.757 22.929h8.485v14.142h-8.485z" fill="#e6e9ed"
                                        transform="matrix(.707 -.707 .707 .707 -5.397 46.971)" />
                                </g>
                                <g>
                                    <path d="m57 11-3.03 3.03c-.11-.15-.24-.3-.38-.44l-3.18-3.18c-.14-.14-.29-.27-.44-.38l3.03-3.03 2 2z"
                                        fill="#ccd1d9" />
                                </g>
                                <g>
                                    <path
                                        d="m53.97 14.03c.67.84 1.03 1.89 1.03 2.97 0 1.28-.51 2.51-1.41 3.41l-1.59 1.59-3 3-3 3-2 2-3-3-4-4-3-3 2-2 3-3 3-3 1.59-1.59c.9-.9 2.13-1.41 3.41-1.41 1.08 0 2.13.36 2.97 1.03.15.11.3.24.44.38l3.18 3.18c.14.14.27.29.38.44z"
                                        fill="#fcd770" />
                                </g>
                                <g>
                                    <path d="m40.05 16.879h9.899v4.243h-9.899z" fill="#69d6f4"
                                        transform="matrix(.707 -.707 .707 .707 -.255 37.385)" />
                                </g>
                                <g>
                                    <path d="m41 27-2 6-8-8 6-2z" fill="#ff826e" />
                                </g>
                                <g>
                                    <path d="m18 61v1h-14v-4h8z" fill="#969faa" />
                                </g>
                                <g>
                                    <path d="m12 54v4h-8v-8.18c1.81 2.48 4.72 4.1 8 4.18z" fill="#969faa" />
                                </g>
                                <g>
                                    <path
                                        d="m18 49 2 2c-1.92 1.92-4.53 3-7.24 3h-.52c-.08 0-.16 0-.24 0-3.28-.08-6.19-1.7-8-4.18-1.26-1.7-2-3.8-2-6.06v-.52c0-1.36.27-2.68.78-3.92.51-1.23 1.26-2.36 2.22-3.32l2 2z"
                                        fill="#ccd1d9" />
                                </g>
                                <g>
                                    <path d="m21 46-3 3-11-11 3-3 1 1 4.5 4.5 4.5 4.5z" fill="#e6e9ed" />
                                </g>
                                <g>
                                    <path
                                        d="m21 33c1.1 0 2 .9 2 2s-.9 2-2 2c-.07 0-.14 0-.2-.01-.47-.05-.9-.26-1.21-.58-.32-.31-.53-.74-.58-1.21-.01-.06-.01-.13-.01-.2 0-1.1.9-2 2-2z"
                                        fill="#69d6f4" />
                                </g>
                                <g>
                                    <circle cx="19" cy="19" fill="#ff826e" r="2" />
                                </g>
                                <g>
                                    <circle cx="45" cy="45" fill="#ff826e" r="2" />
                                </g>
                            </g>
                            <g>
                                <path
                                    d="m53.414 22 .879-.879c1.101-1.1 1.707-2.564 1.707-4.121 0-1.012-.261-1.984-.743-2.843l3.157-3.157-2-2 3.793-3.793-1.414-1.414-3.793 3.793-2-2-3.161 3.161c-.863-.481-1.843-.747-2.839-.747-1.534 0-3.036.622-4.121 1.707l-.879.879-10-10-7.414 7.414 10 10-2 2 2.563 2.563-6 2 10.289 10.288 1.999-6 2.563 2.563 2-2 10 10 7.414-7.414zm7.172 10-1.586 1.586-3.586-3.586 1.586-1.586zm-5-5-1.586 1.586-3.586-3.586 1.586-1.586zm0-16-1.586 1.586-2.586-2.586 1.586-1.586zm-16.586 2.586-3.586-3.586 1.586-1.586 3.586 3.586zm-3.414-6.586-1.586 1.586-3.586-3.586 1.586-1.586zm-6.586-.586 3.586 3.586-1.586 1.586-3.586-3.586zm3.414 6.586 1.586-1.586 3.586 3.586-1.586 1.586zm6.149 18.149-5.711-5.712 3.879-1.293 3.126 3.126zm-3.149-11.149 8.879-8.879c.713-.712 1.699-1.121 2.707-1.121s1.994.409 2.707 1.121l3.172 3.172c.723.723 1.121 1.685 1.121 2.707s-.398 1.984-1.121 2.707l-8.879 8.879zm13.586 6.414 3.586 3.586-1.586 1.586-3.586-3.586zm3.414 6.586 1.586-1.586 3.586 3.586-1.586 1.586z" />
                                <path
                                    d="m38.586 21 4.414 4.414 8.414-8.414-4.414-4.414zm4.414 1.586-1.586-1.586 5.586-5.586 1.586 1.586z" />
                                <path
                                    d="m21 32c-1.407 0-2.582.977-2.904 2.285l-6.724.672-1.372-1.371-3 3-2-2-.707.707c-2.123 2.124-3.293 4.947-3.293 7.95v.515c0 2.371.742 4.57 2 6.385v12.857h16v-2.618l-6-3v-2.394c2.912-.062 5.642-1.215 7.707-3.281l.707-.707-2-2 3-3-1.372-1.372.672-6.724c1.309-.322 2.286-1.497 2.286-2.904 0-1.654-1.346-3-3-3zm-2.705 4.275c.002.003.004.006.005.01l-2.8 2.801-2.301-2.301zm-7.295 20.725h-6v-4.657c1.66 1.402 3.728 2.333 6 2.584zm4.764 4h-10.764v-2h6.764zm-3.006-8h-.516c-5.096 0-9.242-4.146-9.242-9.243v-.515c0-2.132.717-4.154 2.037-5.791l13.511 13.511c-1.636 1.321-3.658 2.038-5.79 2.038zm5.242-5.414-9.586-9.586 1.586-1.586 9.586 9.586zm-1.086-7.086 2.801-2.801c.003.002.006.004.009.005l-.509 5.096zm4.086-4.5c-.552 0-1-.449-1-1s.448-1 1-1 1 .449 1 1-.448 1-1 1z" />
                                <path
                                    d="m16 19c0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3-3 1.346-3 3zm4 0c0 .551-.448 1-1 1s-1-.449-1-1 .448-1 1-1 1 .449 1 1z" />
                                <path d="m19 12c-3.859 0-7 3.14-7 7h2c0-2.757 2.243-5 5-5z" />
                                <path d="m19 10v-2c-6.065 0-11 4.935-11 11h2c0-4.962 4.037-9 9-9z" />
                                <path
                                    d="m48 45c0-1.654-1.346-3-3-3s-3 1.346-3 3 1.346 3 3 3 3-1.346 3-3zm-4 0c0-.551.448-1 1-1s1 .449 1 1-.448 1-1 1-1-.449-1-1z" />
                                <path d="m45 52c3.859 0 7-3.14 7-7h-2c0 2.757-2.243 5-5 5z" />
                                <path d="m45 54v2c6.065 0 11-4.935 11-11h-2c0 4.962-4.037 9-9 9z" />
                            </g>
                        </g>
                    </svg>

                    <a href="#">
                        <span class="px-2 font-weight-bold">IVDN - PB e PE</span>
                    </a>
                </div>
                <div class="col-8 align-items-center">
                    <ul class="d-flex justify-content-end main_menu">
                        <li><a href="http://dca.ufcg.edu.br"><strong>DCA</strong></a></li>
                        <li><a href="http://portal.ufcg.edu.br"><strong>UFCG</strong></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main_content mt-5">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="display-4">Índice de Vegetação por Diferença Normalizada (IVDN)</h1>
                    <p class="lead">O Indice de Vegetação por Diferença Normalizada (IVDN). O IVDN representa o estágio de
                        desenvolvimento da vegetação de uma determinada região. A partir de setembro de 2015 essas imagens são
                        obtidas do sensor MODIS do satélite Aqua do produto MYD13A3 com resolução espacial de 1Km (composição
                        mensal). As imagens anteriores são obtidas pela combinação das refletâncias dos canais 1 e 2 do sistemas
                        de sensores AVHRR do satélite NOAA - 18 com resolução espacial de 4 Km x 4Km.</p>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6 text-center">
                    <h3>Paraíba</h3>
                    <a href="">
                        <img class="border mb-2" src="{{ url('assets/images/paraiba.png')}}" alt="Imagem da Bandeira Paraíba" style="width: 30%">
                        <p><strong>Acesse os Mapas Referente a Paraíba</strong></p>
                    </a>
                </div>
                <div class="col-6 text-center">
                    <h3>Pernambuco</h3>
                    <a href="">
                        <img class="border border-info mb-2" src="{{ url('assets/images/pernambuco.png')}}" alt="Imagem da Bandeira Pernambuco" style="width: 30%">
                        <p><strong>Acesse os Mapas Referente a Pernambuco</strong></p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="p-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="footer-content mx-auto text-center text-muted">
                    Desenvolvido com <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-suit-heart-fill text-danger" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                    </svg> pela equipe administrativa do DCA <br>
                    <span class="font-weight-lighter">Campina Grande - 2020</span>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $('.carousel').carousel();
    </script>
</body>

</html>
