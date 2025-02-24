<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Dashboard</h1>

    <?php if ($db) : ?>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                <div class="card border-primary shadow-sm">
                    <div class="card-body">
                        <i class="fa fa-plus fa-4x mb-3"></i>
                        <h5 class="card-title">Nova Atividade</h5>
                        <p class="card-text">Adicione uma nova atividade à BD.</p>
                        <a href="atividades/add.php" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                <div class="card border-success shadow-sm">
                    <div class="card-body">
                        <i class="fa fa-file-text fa-4x mb-3"></i>
                        <h5 class="card-title">Atividades</h5>
                        <p class="card-text">Veja todas as atividades registadas.</p>
                        <a href="atividades/index.php" class="btn btn-success">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            <p><strong>ERRO:</strong> Não foi possível ligar ao Base de Dados!</p>
        </div>
    <?php endif; ?>
</div>

<?php include(FOOTER_TEMPLATE); ?>
