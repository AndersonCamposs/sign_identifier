<?php include("header.php"); ?>
<body class="bg-dark bg-gradient">
    <main id="layout">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card border-0 rounded-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Descubra o seu signo</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md text-center">
                                    <form action="show_zodiac_sign.php" METHOD="POST">
                                        <div class="text-center justify-content-center my-3">
                                            <h6>Informe a sua data de nascimento</h6>
                                            <input class="form-control my-4 text-center w-50 p-3 mx-auto" type="date" name="data_nascimento">
                                            <input class="btn btn-dark" type="submit" value="Enviar">
                                        </div>
                                    </form>
                                </div>
                            </div>                        
                        </div>
                    
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