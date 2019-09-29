<?php
/* db connection */
$connect = mysqli_connect("localhost", "root", "", "goma")or die("cannot connect"); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GOMA Challenge - Listar Clientes</title>
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

    <!--Navegação-->
    <section id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php">Inserir Novo</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h1 class="lineUp">Lista de Clientes</h1>
                    <h4 class="lineUp">(<span>5</span> resultados no sistema)</h4>
                </div>

                <div class="col-md-6">
                    <a class="navLink" href="#">Últimos 3 Registos</a>
                </div>
            </div>
        </div>
    </section>

    <!--Listagem-->
    <section id="list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                            <?php 
                                
                                $sql = "SELECT * FROM cliente;";
                                $results = mysqli_query($connect, $sql);
                                $resultCheck = mysqli_num_rows($results);

                                if($results = mysqli_query($connect, $sql)){
                                if(mysqli_num_rows($results) > 0){
                                    echo "<table class='tableStyle'>";
                                        echo "<tr class='tableRowStyle'>";
                                            echo "<th>nome</th>";
                                            echo "<th>nif</th>";
                                            echo "<th>telefone</th>";
                                            echo "<th>morada</th>";
                                            echo "<th>localidade</th>";
                                            echo "<th>country</th>";
                                        echo "</tr>";
                                    while($row = mysqli_fetch_array($results)){
                                        echo "<tr class='tableRowStyle'>";
                                            echo "<td class='clientName'>" . $row['Nome'] . "</td>";
                                            echo "<td class='clientInfo'>" . $row['NIF'] . "</td>";
                                            echo "<td class='clientInfo'>" . $row['Telefone'] . "</td>";
                                            echo "<td class='clientInfo'>" . $row['Morada'] . "</td>";
                                            echo "<td class='clientInfo'>" . $row['Localidade'] . "</td>";
                                            echo "<td class='clientInfo'>" . $row['Country'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // Free result set
                                    mysqli_free_result($results);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
                            }
                             
                        ?>
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