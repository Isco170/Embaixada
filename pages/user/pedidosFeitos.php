<?php include('../commons/header.php');?>
<?php include('../commons/userMenu.php');?>
<div class="content-wrapper">
    <?php include('../commons/menuInterno.php')?>
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <div class="card-header">Pedidos de visto feitos</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <table id="datatableid" class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>#</th> 
                                                    <th>Nome</th>
                                                    <th>Validade</th>
                                                    <th>Taxa</th>
                                                    <th>Opções</>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Nome </td>
                                                    <td> Validade </td>
                                                    <td> Taxa </td>
                                                    <td class="project-actions text-center">
                                                        <button class="btn btn-danger btn-sm" onclick="apagar(1)"><i class="fas fa-folder"></i>Cancelar pedido</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Nome </td>
                                                    <td> Validade </td>
                                                    <td> Taxa </td>
                                                    <td class="project-actions text-center">
                                                        <button class="btn btn-danger btn-sm" onclick="apagar(1)"><i class="fas fa-folder"></i>Cancelar pedido</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    function apagar(id){
    swal({

        title: "Tem certeza?",

        text: "Apagar pedido de visto",

        type: "warning",

        buttons: true,

        dangerMode: true,

        showCancelButton: true,

        confirmButtonColor: "red",

        confrmButtonText: "Sim, apagar",

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
                    text: "Pedido apagado",
                    type: "success",

                });

                window.location.href = window.location.href;

                

            },

            error: function(){

                swal({

                    title : "Falha",

                    text : "Nao foi possivel apagar pedido",

                    type : "error",

                });

            }

        });



    });

    }

</script>