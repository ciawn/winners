
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clientes - Listar Cadastros</h1>
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listagem dos Clientes
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-cliente">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>E-mail</th>
                                    <th>Documento</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>                   
                            <?php foreach ($clientes as $indice => $cliente): ?>             
                                <tr class="odd gradeX" id="<?php echo $cliente['Cliente']['id'] ?>">
                                    <td>
                                        <?php echo $cliente['Cliente']['nome1'] ?>
                                    </td>
                                    <td>
                                        <?php echo $cliente['Cliente']['nome2'] ?>
                                    </td>
                                    <td>
                                        <?php echo $cliente['Cliente']['email'] ?>
                                    </td>
                                    <td class="center">
                                        <?php echo $cliente['Cliente']['documento1'] ?>
                                    </td>
                                    <td class="center">
                                        <button onclick="remover_cliente(<?php echo $cliente['Cliente']['id'] ?>);" type="button" class="btn btn-danger btn-circle">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button onclick="editar_cliente(<?php echo $cliente['Cliente']['id'] ?>);" type="button" class="btn btn-info btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a class="btn btn-primary btn-circle" title="Listar Pedidos deste Cliente" href="/cliente/listar_pedidos/<?php echo $cliente['Cliente']['id'] ?>">
                                            <i class="fa fa-list"></i>
                                        </a>
                                    </td>
                                </tr>   
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ações
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <button type="button" class="btn btn-primary"><i class="fa fa-plus"><a href="/cliente/adicionar_cliente" style="color: #FFF;"> Adicionar Cliente</a></i>
                </div>
                <hr>
                <div class="panel-body">
                    <button type="button" class="btn btn-info"><i class="fa fa-export"><a href="/cliente/exportar_clientes" style="color: #FFF;"> Exportar Clientes</a></i>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>

<script type="text/javascript">
    function remover_cliente(id) {
        $.ajax({
            type: "post",
            dataType: "json",
            url: "/cliente/excluir_cliente",
            async: true,
            data: {id: id},
            error: function(x){
                window.reload();
            },
            success: function(x){
                window.location.reload();                
            }
        });
    }
    function editar_cliente(id) {
        window.location.href = "/cliente/editar_cliente/"+id;
    }
</script>
