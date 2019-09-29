
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GOMA Challenge - Inserir Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="images/gomalogo.png" alt="gomalogo">
                </div>
                <div class="col-md-4">
                    <h1 class="alignRight">Clientes</h1>
                </div>
            </div>
        </div>
    </header>

    <!--Apresentação-->
    <section id="presentation">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="alignRight">Bem-Vindo</h1>
                </div>
                <div class="col-md-5">
                    <a href="listClient.php">Listar Clientes</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" id="description">
                    <p>GOMA is a company from Portugal that creates integrated web-based solutions.</p>
                    <p>We work with organizations of all sizes to design and build great digital products.</p>
                </div>
            </div>

        </div>
    </section>

    <!--Formulário-->
    <section id="form">
        <div class="container">
            <div>
                <h1 class="alignCenter">Inserir Cliente</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form action="insert.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" required>
                        </div>

                        <div class="form-group halfWidth">
                            <label for="nif">NIF</label>
                            <input type="number" name="nif" class="form-control" id="nif" required>
                        </div>

                        <div class="form-group halfWidth">
                            <label for="telefone">Telefone</label>
                            <input type="number" name="telefone" class="form-control" id="telefone" required>
                        </div>

                        <div class="form-group">
                            <label for="morada">Morada</label>
                            <input type="text" name="morada" class="form-control" id="morada" required>
                        </div>

                        <div class="form-group halfWidth">
                            <label for="localidade">Localidade</label>
                            <input type="text" name="localidade" class="form-control" id="localidade" required>
                        </div>

                        <div class="form-group halfWidth">
                            <label for="country">País</label>
                            <select class="form-control" name="country" id="country">
                                <option>Portugal</option>
                                <option>Espanha</option>
                                <option>Holanda</option>
                                <option>França</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" value="insert">Submeter</button>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>https://gomadevelopment.pt</h3>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>