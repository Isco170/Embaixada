<?php include('../commons/header.php');?>
<?php include('../commons/menu.php');?>
<div class="content-wrapper">
    <?php include('../commons/menuInterno.php')?>
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <div class="card-header">Novo ponto</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <form action="#" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="nome">Nome</label>
                                                        <input type="text" name="nome" id="nome" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="imagem">Foto</label>
                                                        <input type="file" name="imagem" id="imagem" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="nome">Descrição</label>
                                                        <textarea name="nome" id="nome" class="form-control" rows="3" placeholder="Escrever ..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
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
                <hr>
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <p>Nome do ponto</p>
                                        <p>Descricao</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <p>Nome do ponto</p>
                                        <p>Descricao</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php include('../commons/footer.php') ?>