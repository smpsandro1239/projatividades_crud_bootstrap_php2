<?php
require_once "functions.php";
view($_GET["id"]);
?>

<?php include HEADER_TEMPLATE; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Atividade nº <?php echo $atividade["id"]; ?></h2>

    <?php if (!empty($_SESSION["message"])) : ?>
        <div class="alert alert-<?php echo $_SESSION["type"]; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION["message"]; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5>Informações da Atividade</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <p class="form-control-plaintext"><?php echo $atividade["nome"]; ?></p>
                </div>
                <div class="form-group col-md-6">
                    <label for="descricao">Descrição</label>
                    <p class="form-control-plaintext"><?php echo $atividade["descricao"]; ?></p>
                </div>
                <div class="form-group col-md-6">
                    <label for="modalidade">Modalidade</label>
                    <p class="form-control-plaintext"><?php echo $atividade["modalidade"]; ?></p>
                </div>
                <div class="form-group col-md-6">
                    <label for="dinamizadores">Dinamizadores</label>
                    <p class="form-control-plaintext"><?php echo $atividade["dinamizadores"]; ?></p>
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
                    <p class="form-control-plaintext"><?php echo $atividade["data"]; ?></p>
                </div>
                <div class="form-group col-md-2">
                    <label for="local">Local</label>
                    <p class="form-control-plaintext"><?php echo $atividade["local"]; ?></p>
                </div>
                <div class="form-group col-md-4">
                    <label for="destinatarios">Destinatários</label>
                    <p class="form-control-plaintext"><?php echo $atividade["destinatarios"]; ?></p>
                </div>
                <div class="form-group col-md-2">
                    <label for="numero_participantes">Nº de Participantes</label>
                    <p class="form-control-plaintext"><?php echo $atividade["numero_participantes"]; ?></p>
                </div>
                <div class="form-group col-md-2">
                    <label for="custo">Custo</label>
                    <p class="form-control-plaintext">€ <?php echo $atividade["custo"]; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6 text-center">
            <a href="edit.php?id=<?php echo $atividade["id"]; ?>" class="btn btn-warning btn-lg mx-2">
                <i class="fa fa-pencil"></i> Editar
            </a>
            <a href="index.php" class="btn btn-secondary btn-lg mx-2">
                <i class="fa fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
</div>

<?php include FOOTER_TEMPLATE; ?>
