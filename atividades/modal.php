<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Gestão de Atividades</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

</head>

<body>
    <!-- Modal de Delete-->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">Eliminar Atividade</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body">
                    Deseja realmente eliminar esta atividade?
                </div>
                <div class="modal-footer">
                    <a id="confirm" class="btn btn-primary" href="#">Sim</a>
                    <a id="cancel" class="btn btn-primary" data-dismiss="modal">Não</a>
                </div>
            </div>
        </div>
    </div> <!-- /.modal -->

    <script>
        $('#delete-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var atividadeId = button.data('atividade');
            var modal = $(this);
            modal.find('.modal-title').text('Eliminar atividade nº ' + atividadeId);
            modal.find('#confirm').attr('href', 'delete.php?id=' + atividadeId);
        });
    </script>
</body>

</html>