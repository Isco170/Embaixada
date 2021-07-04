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
                                    <div class="card-body">
                                        <p>Nome do visto</p>
                                        <p>Validade do visto</p>
                                        <p>Taxa do visto</p>
                                        
                                    </div> 
                                    <div class="card-footer text-muted text-center">
                                        <button class="btn btn-sm btn-success" onclick="aceitarVisto(1)">Apagar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Nome do visto</p>
                                        <p>Validade do visto</p>
                                        <p>Taxa do visto</p>
                                        
                                    </div> 
                                    <div class="card-footer text-muted text-center">
                                        <button class="btn btn-sm btn-success" onclick="aceitarVisto(1)">Apagar</button>
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
    function aceitarVisto(id){
        swal({
            title: "Tem certeza?",
            text: "Apagar visto",
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
                        text: "Visto foi apagado",
                        type: "success",
                    });
                    window.location.href = window.location.href;
                },

                error: function(){
                    swal({
                        title : "Falha",
                        text : "Nao foi possivel apagar visto",
                        type : "error",
                    });
                }
            });
        });

    }
</script>
