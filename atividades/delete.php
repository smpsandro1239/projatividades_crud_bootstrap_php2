<?php
require_once('functions.php');
if (isset($_GET['id'])) {
    apaga($_GET['id']);
} else {
    die("ERRO: ID não encontrado.");
}
