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
        <form class="form-signin" method="POST" action="../index.php">
                                
        <h1 class="card-title text-center text-muted h2 text-uppercase">Login</h1>
        <div class="form-label-group mb-3">
            <label for="login">Email</label>
            <input type="email" class="form-control" name="login" placeholder="Email" required>
        </div>

        <div class="form-label-group mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        </div>

        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="entrar">Entrar</button>
        
        <hr class="my-4">
        
        <div class="d-flex justify-content-center">
            <a href="cadastro.php" class="btn btn-secondary m-3 h6">Não possuo cadastro</a>
            <a href="../index.php" class="btn btn-secondary m-3 h6">Voltar a página inicial</a>
        </div>

        </form>
    </main>
    
    
    <footer>
        <?php include './layouts/footer.php' ?>
    </footer>

</body>
</html>