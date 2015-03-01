
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="margin-top: 12px;">
                <div class="panel-heading">
                    Dados do Cliente
                </div>
                <div class="panel-body">
                    <form role="form" action="/cliente/s_editar_cliente" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" name="dados[nome1]" value="<?php echo $cliente[0]['Cliente']['nome1']; ?>">
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group">
                                    <label>Sobreome</label>
                                    <input class="form-control" name="dados[nome2]" value="<?php echo $cliente[0]['Cliente']['nome2']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>CPF</label>
                                    <input class="form-control" name="dados[documento1]" value="<?php echo $cliente[0]['Cliente']['documento1']; ?>">
                                </div>                                
                                <div class="form-group">
                                    <label>RG</label>
                                    <input class="form-control" name="dados[documento2]" value="<?php echo $cliente[0]['Cliente']['documento2']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Data de Nascimento</label>
                                    <input class="form-control" name="dados[data_de_nascimento]" value="<?php echo $cliente[0]['Cliente']['data_de_nascimento']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Endereço
                                    </div>
                                    <div class="panel-body">
                                        a
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <input type="hidden" value="<?php echo $cliente[0]['Cliente']['id']; ?>" name="dados[id]"/>
                        <button type="submit" class="btn btn-success">Editar Cliente</button>
                        <button type="reset" class="btn btn-danger" onclick="history.go(-1);">Cancelar</button>
                    </form>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>