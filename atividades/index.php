<?php
require_once('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-sm-6">
            <h2>Atividades</h2>
        </div>
        <div class="col-sm-6 text-right">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar..." aria-label="Pesquisar" aria-describedby="search-btn">
                <div class="input-group-append">
                    <a class="btn btn-primary" href="add.php" id="search-btn">
                        <i class="fa fa-plus fa-lg mr-2"></i> Atividades
                    </a>
                    <a class="btn btn-secondary" href="index.php">
                        <i class="fa fa-refresh fa-lg"></i> Atualizar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="table-responsive-sm">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Modalidade</th>
                    <th>Dinamizadores</th>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Destinatários</th>
                    <th>Nº de participantes</th>
                    <th>Custo</th>
                    <th class="actions text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($atividades) : ?>
                    <?php foreach ($atividades as $atividade) : ?>
                        <tr>
                            <td><?php echo $atividade['id']; ?></td>
                            <td><?php echo $atividade['nome']; ?></td>
                            <td><?php echo $atividade['descricao']; ?></td>
                            <td><?php echo $atividade['modalidade']; ?></td>
                            <td><?php echo $atividade['dinamizadores']; ?></td>
                            <td><?php echo $atividade['data']; ?></td>
                            <td><?php echo $atividade['local']; ?></td>
                            <td><?php echo $atividade['destinatarios']; ?></td>
                            <td><?php echo $atividade['numero_participantes']; ?></td>
                            <td><?php echo $atividade['custo']; ?></td>
                            <td class="actions text-center">
                                <div class="btn-group" role="group">
                                    <a href="view.php?id=<?php echo $atividade['id']; ?>" class="btn btn-success btn-sm mr-2">
                                        <i class="fa fa-eye"></i> Visualizar
                                    </a>
                                    <a href="edit.php?id=<?php echo $atividade['id']; ?>" class="btn btn-warning btn-sm mr-2">
                                        <i class="fa fa-pencil"></i> Editar
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-modal" data-atividade="<?php echo $atividade['id']; ?>">
                                        <i class="fa fa-trash"></i> Eliminar
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="11" class="text-center">Nenhum registo encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.getElementById("search").addEventListener("keyup", function() {
        var filter = this.value.toUpperCase();
        var rows = document.querySelectorAll("table tbody tr");

        rows.forEach(function(row) {
            var cells = row.getElementsByTagName("td");
            var match = false;
            for (var i = 0; i < cells.length; i++) {
                if (cells[i].innerText.toUpperCase().indexOf(filter) > -1) {
                    match = true;
                    break;
                }
            }
            row.style.display = match ? "" : "none";
        });
    });
</script>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
