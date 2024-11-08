<?php  
/* ESTÁ OCORRENDO UM ERRO NO CASO DA DO MÊS DE NASCIMENTO SER EM JANEIRO  */
function formatarData($valor, $dataModelo) {
    $arrayDataModelo = explode("-", $dataModelo);

    $arrayData = explode("/", $valor);

    $mesNascimento = $arrayDataModelo[1];

    $ano = $arrayDataModelo[0];
    $mes = $arrayData[1];
    $dia = $arrayData[0];

    if($mesNascimento == "01" && $mes == "12" && $dia == "22") {
        $ano = $arrayDataModelo[0]-1;
    } 
    if ($mesNascimento == "12" && $mes == "01" && $dia == "19") {
        $ano = $arrayDataModelo[0] + 1;
    }

    

    return "$ano-$mes-$dia";
}
?>

<?php include("header.php") ?>
<body class="bg-dark bg-gradient">
    <main id="layout">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card border-0 rounded-5">
                    <?php 
                        $dataNascimento = $_POST["data_nascimento"];
                        //$dataNascimento = "2021-12-22";

                        $signos = simplexml_load_file("signos.xml");

                        foreach($signos as $signo) {
                            $dataInicio = formatarData($signo->dataInicio, $dataNascimento);
                            $dataFim = formatarData($signo->dataFim, $dataNascimento);

                            if ($dataNascimento >= $dataInicio && $dataNascimento <= $dataFim) {
                                echo 
                                "   <div class='card-header'>
                                        <ul class='nav'>
                                            <li class='nav-item'>
                                                <a class='nav-link' href='./index.php' ><i class='bi bi-house-door-fill btn btn-dark'></i></a>
                                            </li>
                                        </ul>
                                        <h2 class='text-center font-weight-light mb-4'>$signo->signoNome</h2>
                                    </div>
                                    <div class='card-body'>
                                        <p id='descricao' class='text-justify'>$signo->descricao</p>
                                    </div>
                                ";
                                break;
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="layout_footer">
            <footer class="py-4 bg-light">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Anderson Campos - 2024</div>
                        <div>
                            <a target="_blank" href="https://andersoncamposs.github.io">Meu portfólio</a>
                            &middot;
                            <a target="_blank" href="https://github.com/AndersonCamposs">GitHub</a>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
</body>
</html>