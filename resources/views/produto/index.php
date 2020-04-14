<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistema Vendas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('produtos') ?>">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('vendas') ?>">Vendas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('sair') ?>">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid" style="margin-top:80px">
        <h3>Produto</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($produto as $key => $value):
                    ?>
                    <tr>
                        <td><?php echo $value->nome ?></td>
                        <td></td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>