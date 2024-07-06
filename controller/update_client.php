<?php

include '../model/Conexao.class.php';
include '../model/Manager.class.php';

$manager = new Manager();
var_dump($_POST);
if(!empty($_POST)){
    $manager->update_client($_POST);
    header("Location: ../index.php?cod=3");
}

?>