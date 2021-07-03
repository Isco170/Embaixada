<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Embaixada</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <script src="../../assets/dist/sweetalert.min.js"></script>
        <script src="../../assets/dist/sweetalert-dev.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div style="padding: 100pt;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card card-secondary">
                            <div class="card-header">Criar conta</div>
                                <div class="card-body">
                                    <form action="" method="POST" action="#">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="nome">Nome:</label>
                                                    <input class="form-control" type="text" name="nome" id="nome">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="apelido">Apelido:</label>
                                                    <input class="form-control" type="text" name="apelido" id="apelido">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="contacto">Contacto:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                        </div>
                                                        <input name="contacto" id="contacto" type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="email">Email:</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col">
                                                <button class="btn btn-success">Criar</button>
                                                <button class="btn btn-danger">Cancelar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/dist/js/adminlte.js"></script>
    </body>
</html>