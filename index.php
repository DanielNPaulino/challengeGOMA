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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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
                    <h1 class="text-right">Clientes</h1>
                </div>
            </div>
        </div>
    </header>

    <!--Apresentação-->
    <section id="presentation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="listClient.php">Listar Clientes</a>
                </div>
                <div class="col-md-12">
                    <h1 class="text-center">Bem-Vindo</h1>
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
                <?php 
                    if(isset($_POST['submit'])){ 
                        /* db connection */
                        $connect = mysqli_connect("localhost", "root", "", "goma")or die("cannot connect"); 

                        /* variable connection to form inputs */
                        $Name = $_POST['nome'];
                        $NIF = $_POST['nif'];
                        $Telefone = $_POST['telefone'];
                        $Morada = $_POST['morada'];
                        $Localidade = $_POST['localidade'];
                        $Country = $_POST['country'];

                        

                        /* all fields filled verification */
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if ((empty($_POST["nome"])) || (empty($_POST["nif"])) || (empty($_POST["telefone"])) || (empty($_POST["morada"])) || 
                            (empty($_POST["localidade"])) || (empty($_POST["country"]))) {
                                echo "<div class='alert alertStyleError'> ERRO, Verifique se preencheu os campos devidamente</div>";
                            } 

                            else{
                                /* table values insertion */
                                mysqli_query($connect, " INSERT INTO cliente (Nome, NIF, Telefone, Morada, Localidade, Country) VALUES ('$Name', '$NIF', '$Telefone', '$Morada', '$Localidade', '$Country')");

                                /* values insertion verification */
                                if(mysqli_affected_rows($connect) > 0){
                                     echo "<div class='alert alertInsertion'> Os dados foram inseridos na base de dados </div>";
                                } else {
                            
                                    echo "<p> Não foram inseridos</p>";
                                    echo mysqli_error ($connect);
                                 }
                            } 
                          }
                    }
                 ?>

                <h1 class="text-center">Inserir Cliente</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                        </div>

                        <div class="form-group halfWidth formStyle">
                            <label for="nif">NIF</label>
                            <input type="number" name="nif" class="form-control" id="nif">
                        </div>

                        <div class="form-group halfWidth">
                            <label for="telefone">Telefone</label>
                            <input type="number" name="telefone" class="form-control" id="telefone">
                        </div>

                        <div class="form-group">
                            <label for="morada">Morada</label>
                            <input type="text" name="morada" class="form-control" id="morada">
                        </div>

                        <div class="form-group halfWidth formStyle">
                            <label for="localidade">Localidade</label>
                            <input type="text" name="localidade" class="form-control" id="localidade">
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

                        <button type="submit" name="submit" class="btn btn-primary" value="insert">Submeter</button>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->
    <footer class="fixed-bottom">
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