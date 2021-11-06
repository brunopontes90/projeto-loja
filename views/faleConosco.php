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
<body class="container-fluid">

    <header>
        <?php include './layouts/menu.php' ?>
    </header>
    
        <form class="container shadow p-3 mt-5 mb-5 bg-white rounded" action="#" method="GET">
            <h1 class="h2 text-center font-weight-bold text-uppercase text-muted">Fale Conosco</h1>
            <div class="form-row m-3">
                <div class="form-row ">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" class="form-control " placeholder="Nome" required>
                    </div>
                    <div class="col">
                        <label for="sobreNome">Sobrenome</label>
                        <input type="text" id="sobreNome" class="form-control " placeholder="Sobrenome " required>
                    </div>
                </div>
            </div>

            <div class="form-group m-3">
                <label for="exampleFormControlInput1">Endereço de email</label>
                <input type="email " class="form-control" id="email" placeholder="nome@exemplo.com" required>
            </div>
            <div class="form-group m-3">
                <label for="exampleFormControlSelect1">Tipo</label>
                <select class="form-control " id="opcao">
                <option disabled selected>Selecione uma opção...</option>
                <option value="info">Informações</option>
                <option value="elog">Elogios</option>
                <option value="sug">Sugestões</option>
            </select>
            </div>

            <div class="form-group m-3">
                <label for="msg">Mensagem</label>
                <textarea class="form-control " id="msg" rows="3" placeholder="Escreva sua mensagem" required></textarea>
            </div>

            <input type="submit" class="btn btn-primary m-3 text-uppercase font-weight-bold" value="Enviar"></input>

        </form>

    <footer>
        <?php include './layouts/footer.php' ?>
    </footer>
</body>
</html>