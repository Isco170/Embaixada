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
                <hr>
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">Nome do pedido</div>
                                    <div class="card-body">
                                        <p>Nome do usuario</p>
                                        <p>Apelido do usuario</p>
                                        <p>Email do usuario</p>
                                        <p>contacto do usuario</p>
                                        <p class="text-muted">
                                            <p>nome do visto</p>
                                            <p>validade do visto</p>
                                            <p>taxa do visto</p>
                                        </p>
                                    </div> 
                                    <div class="card-footer text-muted text-center">
                                        <button class="btn btn-sm btn-success" onclick="aceitarPedido(1)">Aceitar</button>
                                        <button class="btn btn-sm btn-danger" onclick="negarPedido(1)">Negar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">Nome do pedido</div>
                                    <div class="card-body">
                                        <p>Nome do usuario</p>
                                        <p>Apelido do usuario</p>
                                        <p>Email do usuario</p>
                                        <p>contacto do usuario</p>
                                        <p class="text-muted">
                                            <p>nome do visto</p>
                                            <p>validade do visto</p>
                                            <p>taxa do visto</p>
                                        </p>
                                    </div> 
                                    <div class="card-footer text-muted text-center">
                                        <button class="btn btn-sm btn-success" onclick="aceitarPedido(1)">Aceitar</button>
                                        <button class="btn btn-sm btn-danger" onclick="negarPedido(1)">Negar</button>
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

<script>
    function aceitarPedido(id){
        swal({
            title: "Tem certeza?",
            text: "Aceitar pedido de visto",
            type: "warning",
            buttons: true,
            dangerMode: true,
            showCancelButton: true,
            confirmButtonColor: "red",
            confrmButtonText: "Sim, aceitar",
            closeOnConfirm: false,
        },
        function(){

            $.ajax({
                url: "#",
                type: "post",
                data: {
                    id : id
                },

                success: function(){
                    swal({
                        title : "Sucesso",
                        text: "Pedido foi aceite",
                        type: "success",
                    });
                    window.location.href = window.location.href;
                },

                error: function(){
                    swal({
                        title : "Falha",
                        text : "Nao foi possivel aceitar pedido",
                        type : "error",
                    });
                }
            });
        });

    }

    function negarPedido(id){
        swal({
            title: "Tem certeza?",
            text: "Negar pedido de visto",
            type: "warning",
            buttons: true,
            dangerMode: true,
            showCancelButton: true,
            confirmButtonColor: "red",
            confrmButtonText: "Sim, negado",
            closeOnConfirm: false,
        },
        function(){

            $.ajax({
                url: "#",
                type: "post",
                data: {
                    id : id
                },

                success: function(){
                    swal({
                        title : "Sucesso",
                        text: "Pedido foi negado",
                        type: "success",
                    });
                    window.location.href = window.location.href;
                },

                error: function(){
                    swal({
                        title : "Falha",
                        text : "Nao foi possivel negado pedido",
                        type : "error",
                    });
                }
            });
        });

    }
</script>
