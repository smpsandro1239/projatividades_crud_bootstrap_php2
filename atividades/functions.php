<?php
require_once('../config.php');
require_once(DBAPI);
$atividades = null;
$atividade = null;

/**
 * Listagem de Atividades
 */
function index()
{
    global $atividades;
    $atividades = find_all('atividades');
}

/**
 * Pesquisa todos os registos numa tabela
 */
function find_all($table)
{
    return find($table);
}

/**
 * Registo de Atividades
 */
function add()
{
    if (!empty($_POST['atividades'])) {
        $atividade = $_POST['atividades'];
        save('atividades', $atividade);
        header('location: index.php');
    }
}

/**
 * Atualização/Edição de Atividades
 */
function edit()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['atividades'])) {
            $atividade = $_POST['atividades'];
            update('atividades', $id, $atividade);
            header('location: index.php');
        } else {
            global $atividade;
            $atividade = find('atividades', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**
 * Visualização de um atividade
 */
function view($id = null)
{
    global $atividade;
    $atividade = find('atividades', $id);
}

/*
* Eliminar uma atividade
*/
function apaga($id = null)
{
    global $atividade;
    remove('atividades', $id);
    header('location: index.php');
}
