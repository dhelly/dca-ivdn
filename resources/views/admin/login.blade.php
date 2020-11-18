<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IVDN | DCA | Administrativo</title>
        <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}" type="image/x-icon">
        <link href="{{ url(mix('backend/views/admin/css/template.css'))}}" rel="stylesheet" />
        <link href="{{ url(mix('backend/views/admin/css/ajax.css'))}}" rel="stylesheet" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body class="bg-dca">

        <div class="ajax_response"></div>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">IVDN - DCA</h3></div>
                                    <div class="card-body">
                                        <form method="POST" name="login" action="{{ route('admin.login.do') }}" autocomplete="off">

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputUser">Usuário</label>
                                                <input class="form-control py-4" name="email" id="inputUser" type="text" placeholder="Usuário" value="jaqueline.duarte@ufcg.edu.br"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Senha</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Senha" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-end mt-4 mb-0">
                                                <button class="btn btn-primary px-5">Entrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container">
                        <div class="d-flex justify-content-center small">
                            <p>Com <i class="fas fa-heart text-danger"></i> UACA/UFCG</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="{{ url(mix('backend/views/admin/js/libs.js'))}}"></script>
        <script src="{{ url(mix('backend/views/admin/js/scripts.js'))}}"></script>
        <script src="{{ url(mix('backend/views/admin/js/ajax.js'))}}"></script>
    </body>
</html>
