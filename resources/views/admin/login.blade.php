<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DCA | </title>
        <link href="{{ url(mix('backend/views/admin/css/template.css'))}}" rel="stylesheet" />

    </head>
    <body class="bg-dca">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">IVDN - DCA</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Usuário</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Usuário" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Senha</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Senha" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-end mt-4 mb-0">
                                                <a class="btn btn-primary px-5" href="index.html">Login</a>
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
    </body>
</html>
