<?php

    include 'model/Conexao.class.php';
    include 'model/Manager.class.php';
    include 'utilities/Alert.php';

    $manager = new Manager();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Udemy</title>

    <link rel="shortcut icon" href="resources/user.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
</head>
<style type="text/css">
body {
    margin: 20px;
    background-color: #ffffff,
}
*{
    font-family: 'Open Sans', sans-serif;
}
h2 {
    font-family: 'Open Sans', sans-serif;
}
.thead {
    background-color: #f7f7f7;
}
</style>
<body>
<div class="container">
<?php
    if(isset($_GET['cod'])){
        switch($_GET['cod']){
            case 1:
                Alertas::success('Cadastro confirmado com sucesso');
                break;
                case 2:
                    Alertas::success('Cadastro excluído com sucesso');
                    break;
                    case 3:
                         Alertas::success('Cadastro atualizado com sucesso');
                         break;
                            default:
                                Alertas::danger('Nenhuma ação realizada');
                                break;
        }
    }
    
?>
    <h2 class="text-center"> Lista de Usuários <i class="bi bi-people-fill"></i> </h2>
    <h5 class="text-end"> 
        <a href="view/page_register.php" class="btn btn-primary btn-xs"> 
            <i class="bi bi-person-plus-fill"></i>
        </a>
    </h5>

<div class="table-responsive">
<table class="table table-hover">
    <thead class="thead">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>CPF</th>
            <th>DT. DE NASCIMENTO</th>
            <th>ENDEREÇO</th>
            <th>TELEFONE</th>
            <th colspan="3">AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($manager->list_client() as $data):?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nome'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['cpf'] ?></td>
            <td><?= $data['birth'] ?></td>
            <td><?= $data['endereco'] ?></td>
            <td><?= $data['phone'] ?></td>
            <td>
             <form action="view/page_update.php" method="post">
                <input type="hidden" name="id" value=<?= $data['id']?>>
                <button class="btn btn-warning btn-xs">
                 <i class="bi bi-pencil-square"></i>
                </button>
             </form>
            </td>
            <td>
             <form method="post" action="controller/delete_client.php" onsubmit="return confirm ('Tem certeza que deseja excluir?');">
             <input type="hidden" name="id" value="<?= $data['id'] ?>">
             <button type="submit" class="btn btn-danger btn-xs">
             <i class="bi bi-trash"></i>
            </button>
             </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>