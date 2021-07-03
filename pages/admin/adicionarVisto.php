<?php include('../commons/header.php');?>
<?php include('../commons/menu.php');?>
<div class="content-wrapper">
    <?php include('../commons/menuInterno.php')?>
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card card-secondary">
                            <div class="card-header">Novo visto</div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="nome">Nome:</label>
                                                <input class="form-control" type="text" name="nome" id="nome">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="validade">Validade:</label>
                                                <input class="form-control" type="text" name="nome" id="nome">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="taxa">Taxa:</label>
                                                <input class="form-control" type="text" name="nome" id="nome">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row text-right">
                                        <div class="col">
                                            <button class="btn btn-sm btn-success">Adicionar</button>
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
<?php include('../commons/footer.php') ?>