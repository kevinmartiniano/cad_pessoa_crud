<?php
require_once 'functions/update.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>
        Cadastro de Pessoas
    </title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Editar cadastro
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="txtNome">Nome</label>
                        <input type="text" class="form-control" id="txtNome" name="txtNome" aria-describedby="nomeHelp" placeholder="Digite o nome" value="<?php echo $nome; ?>">
                        <small id="nomeHelp" class="form-text text-muted">Digite o nome completo!</small>
                    </div>
                    <div class="form-group">
                        <label for="txtEndereco">Endereço</label>
                        <input type="text" class="form-control" id="txtEndereco" name="txtEndereco" aria-describedby="enderecoHelp" placeholder="Digite o endereço" value="<?php echo $endereco; ?>">
                        <small id="enderecoHelp" class="form-text text-muted">Digite a rua e o número!</small>
                    </div>
                    <div class="form-group">
                        <label for="txtTelefone">Telefone</label>
                        <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" aria-describedby="telefoneHelp" placeholder="Digite o telefone" value="<?php echo $telefone; ?>">
                        <small id="telefoneHelp" class="form-text text-muted">Digite o número do telefone!</small>
                    </div>
                    <div class="form-group">
                        <label for="txtNascimento">Data de nascimento</label>
                        <input type="date" class="form-control" id="txtNascimento" name="txtNascimento" aria-describedby="nascimentoHelp" placeholder="Digite a data de nascimento" value="<?php echo $nascimento; ?>">
                        <small id="nascimentoHelp" class="form-text text-muted">Digite a data de nascimento!</small>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Salvar" name="btnSalvar"/>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
