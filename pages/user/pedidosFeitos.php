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
                                        <table id="datatableid" class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>Codigo</th> 
                                                    <th>Nome</th>
                                                    <th>Apelido</th>
                                                    <th>Classe</th>
                                                    <th class="text-center">Opções</>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $c+1; ?> </td>
                                                    <td> <?php echo $alunos[$c]->codigo; ?> </td>
                                                    <td> <?php echo $alunos[$c]->aluno_nome; ?> </td>
                                                    <td> <?php echo $alunos[$c]->aluno_apelido; ?> </td>
                                                    <td> <?php echo $alunos[$c]->classe_designacao; ?> </td>
                                                    <td class="project-actions text-center">
                                                        <button class="btn btn-primary btn-sm" onclick="apagar(1)"><i class="fas fa-folder"></i>Cancelar pedido</button>
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

        text: "Se apagar este aluno não poderá recuperar seus dados",

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

                    text: "Aluno apagado",

                    type: "success",

                });

                window.location.href = window.location.href;

                

            },

            error: function(){

                swal({

                    title : "Falha",

                    text : "Nao foi possivel apagar aluno",

                    type : "error",

                });

            }

        });



    });

    }

</script>