<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Nova Atividade</h2>

    <form action="add.php" method="post">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5>Informações da Atividade</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="atividades['nome']" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="atividades['descricao']" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="modalidade">Modalidade</label>
                        <input type="text" class="form-control" name="atividades['modalidade']" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dinamizadores">Dinamizadores</label>
                        <input type="text" class="form-control" name="atividades['dinamizadores']" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mt-4">
            <div class="card-header bg-primary text-white">
                <h5>Data e Local</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="data">Data</label>
                        <input type="date" class="form-control" name="atividades['data']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="local">Local</label>
                        <input type="text" class="form-control" name="atividades['local']" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="destinatarios">Destinatários</label>
                        <input type="text" class="form-control" name="atividades['destinatarios']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero_participantes">Nº de Participantes</label>
                        <input type="number" class="form-control" name="atividades['numero_participantes']" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="custo">Custo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">€</span>
                            </div>
                            <input type="number" class="form-control" name="atividades['custo']" step="0.01" min="0" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-success btn-lg mx-2">
                    <i class="fa fa-save"></i> Gravar
                </button>
                <a href="index.php" class="btn btn-secondary btn-lg mx-2">
                    <i class="fa fa-arrow-left"></i> Cancelar
                </a>
            </div>
        </div>
    </form>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php include(FOOTER_TEMPLATE); ?>
