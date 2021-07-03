<?php include('../commons/header.php');?>
<?php include('../commons/menu.php');?>
<div class="content-wrapper">
    <?php include('../commons/menuInterno.php')?>
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatableid" class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th> 
                                            <th>Nome</th>
                                            <th>Apelido</th>
                                            <th>Con</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>Nome </td>
                                            <td>Apelido</td>
                                            <td>Contact</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>2</td>
                                            <td>Nome </td>
                                            <td>Apelido</td>
                                            <td>Contact</td>
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
<?php include('../commons/footer.php') ?>

<script>
  $(document).ready(function(){
        $('#datatableid').DataTable({
            "pagingType" : "full_numbers",
            "lengthMenu" : [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search : "_INPUT_",
                searchPlaceholder: "Procurar funcionário",
            }
        });
    });

</script>