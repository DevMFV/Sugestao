<?php


    $id = $_GET['id'];

    $objEx = new Matheus\Models\Sugestao();

    $objEx->tornarExcluido($id);

    header('Location: view/admin.php');


