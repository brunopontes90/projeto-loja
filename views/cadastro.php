<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
    <title>Games</title>
</head>
<body class="container">
    <main class="container shadow p-3 mt-5 mb-5 bg-white rounded">

        <form class="m-5" method='post' action="/php/gravar.php">

            <h1 class="h2 text-center text-uppercase text-muted">Cadastro</h1>
            
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Nome Completo" name="nome" required>
                </div>
            </div>
            
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="email@email.com" name="email" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Rua Tal, 123" name="endereco" required>
            </div>
            
            <div class="form-group">
                <label for="inputAddress2">Complemento</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc." name="complemento" required>
            </div>
            
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="São Paulo" name="cidade" required>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputEstado">Estado</label>
                    <input type="text" id="inputEstado" class="form-control" placeholder="Ba, Ce, Sp, etc..." name="estado" required>
                </div>
                
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" id="inputCEP" placeholder="CEP" name="cep" required>
                </div>

            </div>

            <input type="submit" class="btn btn-primary mt-3" value="Enviar">

            <hr class="my-4">

            <div class="d-flex justify-content-center">
                <a href="../index.php" class="btn btn-secondary m-3 h6">Voltar a página inicial</a>
            </div>
        
        </form>
    </main>

    <footer>
        <?php include './layouts/footer.php' ?>
    </footer>
</body>
</html>