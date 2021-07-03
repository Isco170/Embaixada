<?php include('../../pages/commons/header.php');?>
<?php include('../../pages/commons/menu.php');?>
<div class="content-wrapper">
    <?php include('../../pages/commons/menuInterno.php')?>
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="card card-primary">
                    <div class="card-header">Novo funcionário</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="#" method="POST">
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
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <label for="entidade_civil">Cargo:</label>
                                                    <select class="form-control form-control-sm select2" style="width: 100%;" name="entidade_civil" id="entidade_civil">
                                                        <option value="Embaixador">Embaixador</option>
                                                        <option value="Conselheiro">Conselheiro</option>
                                                        <option value="Administrador">Administrador</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
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
</div>
<?php include('../../pages/commons/footer.php') ?>