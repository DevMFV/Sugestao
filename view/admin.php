<!DOCTYPE html>
<html lang="en">
<?php



?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>SB Admin - Tables</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="https://www.urcamp.edu.br/"><img class="logo-home" src="../img/logo-branco.png"></a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form action="" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            <input type="text" name="texto-pesquisa" class="form-control" placeholder="Procurar por..." aria-label="Search" aria-describedby="basic-addon2">

            <input type="submit" class="btn btn-primary" value="Procurar">


        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">

                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <div class="admin-perfil">
                    <div class="box-ft">
                    </div>
                    <div class="admin-descricao">
                        <span class="des-nome">
                            Nome teste
                        </span>
                    </div>
                </div>
                <a class="nav-link" href="https://www.urcamp.edu.br/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <!--  
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
      -->
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="login.html">Login</a>
                    <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="404.html">404 Page</a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span class="tab-selected">Sugestões</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Aval Central</span></a>
            </li>

        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <!--
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li> 
                    -->
                    <li class="breadcrumb-item active">Sugestões/
                        <?php
                        if (isset($_GET["filtro"])) {
                            echo $_GET["filtro"];
                        } else if (isset($_GET["texto-pesquisa"])) {
                            echo "pesquisa";
                        } else {
                            echo "Entrada";
                        }
                        ?></li>
                </ol>

                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>

                        <?php

                        if(isset($_GET["texto-pesquisa"])) { 
                            echo "<a href=\"admin.php\">Sair da pesquisa</a>";
                        } 

                        else {

                            $selecionado = $_GET["filtro"];

                            if ($selecionado == 'Entrada') {
                                echo "<form class=\"form-header-filter\" action=\"\" mathod=\"get\">
                            <input type=\"submit\" value=\"Filtrar\">
                            <select class=\"select-filter\" id=\"asdf\" name=\"filtro\" requrired>
                                <option selected=\"selected\" value=\"Entrada\">Entrada</option>
                                <option value=\"Arquivadas\">Arquivadas</option>
                                <option value=\"Excluidas\">Excluidas</option>
                            </select>
                            </form>";
                            } else if ($selecionado == 'Arquivadas') {
                                echo "<form class=\"form-header-filter\" action=\"\" mathod=\"get\">
                            <input type=\"submit\" value=\"Filtrar\">
                            <select class=\"select-filter\" id=\"asdf\" name=\"filtro\" requrired>
                                <option value=\"Entrada\">Entrada</option>
                                <option selected=\"selected\" value=\"Arquivadas\">Arquivadas</option>
                                <option value=\"Excluidas\">Excluidas</option>
                            </select>
                            </form>";
                            } else if ($selecionado == 'Excluidas') {
                                echo "<form class=\"form-header-filter\" action=\"\" mathod=\"get\">
                            <input type=\"submit\" value=\"Filtrar\">
                            <select class=\"select-filter\" id=\"asdf\" name=\"filtro\" requrired>
                                <option value=\"Entrada\">Entrada</option>
                                <option value=\"Arquivadas\">Arquivadas</option>
                                <option selected=\"selected\" value=\"Excluidas\">Excluidas</option>
                            </select>
                            </form>";
                            } else {
                                echo "<form class=\"form-header-filter\" action=\"\" mathod=\"get\">
                            <input type=\"submit\" value=\"Filtrar\">
                            <select class=\"select-filter\" id=\"asdf\" name=\"filtro\" requrired>
                                <option selected=\"selected\" value=\"Entrada\">Entrada</option>
                                <option value=\"Arquivadas\">Arquivadas</option>
                                <option value=\"Excluidas\">Excluidas</option>
                            </select>
                            </form>";
                            }
                        }
                        ?>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Assunto</th>
                                        <th>Sugestão</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th class="th-tb">Anexo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    require '../vendor/autoload.php';





                                    ##################################################### se PESQUISA #######################################################

                                    if (isset($_GET["texto-pesquisa"])) {

                                        $tp = $_GET['texto-pesquisa'];

                                        require '../vendor/autoload.php';

                                        $sug = new Matheus\Models\Sugestao();

                                        $resultado = $sug->pesquisa($tp);

                                        while ($linha = pg_fetch_object($resultado)) { //aqui troquei para arrays, este loop declara a variavel $linha (ela representa o resultado da query), e o loop lê linha a linha do retorno
                                            // Escreve na página o retorno para cada registro trazido pela query

                                            if ($linha->arquivado == 't' && $linha->excluido == 'f') {

                                                $arquivado = $linha->arquivado;

                                                $id = $linha->id;
                                                $a = $linha->assunto;
                                                $s = $linha->sugestao;
                                                $n = $linha->nome_pessoa;
                                                $e = $linha->email;
                                                $i = '../' . $linha->imagem;
                                                $img = $linha->imagem;

                                                //$i = $linha->imagem != "Nenhum anexo adicionado"?'../' . $linha->imagem:$linha->imagem;

                                                


                                                if($linha->imagem != "Nenhum anexo adicionado"){
                                                    $ie = "<td class=\"td-img-tb\"> <img class=\"img-table\" src=\"{$i}\">
                                                    </td>";
                                                }
                                                else{
                                                    $ie = "<td>{$img}</td>";
                                                }

                                            echo "<tr>
                                            <td>{$id}</td>
                                            <td>{$a}</td>
                                            <td>{$s}</td>
                                            <td>{$n}</td>
                                            <td>{$e}</td>
                                            ".$ie."
    
                                                    <td class=\"td-ex-tb\">
    
                                                        <a class=\"a-acao -e\" href=\"../index.php?pagina=SugestaoController&acao=excluir&id={$id}&arq={$arquivado}&origem=admin&texto-pesquisa={$tp}\">
                       
                                                        </a>
    
                                                    </td>
                                                    </tr> ";

                                            } else if ($linha->excluido == 't' && $linha->arquivado == 'f') {

                                                $id = $linha->id;
                                                $a = $linha->assunto;
                                                $s = $linha->sugestao;
                                                $n = $linha->nome_pessoa;
                                                $e = $linha->email;
                                                $i = '../' . $linha->imagem;

                                                echo "<tr>
                                                    <td>{$id}</td>
                                                    <td>{$a}</td>
                                                    <td>{$s}</td>
                                                    <td>{$n}</td>
                                                    <td>{$e}</td>
                  
                                                    <td class=\"td-img-tb\"> <img class=\"img-table\" src=\"{$i}\">
                                                    </td>
    
                                                    <td class=\"td-ex-tb\">
    
                                                        <a class=\"a-acao -r\" href=\"../index.php?pagina=SugestaoController&acao=resgatar&id={$id}&origem=admin&texto-pesquisa={$tp}\">
                        
                                                        </a>
    
                                                    </td>
                                                    </tr> ";
                                            } else if($linha->excluido == 'f' && $linha->arquivado == 'f'){

                                                $id = $linha->id;
                                                $a = $linha->assunto;
                                                $s = $linha->sugestao;
                                                $n = $linha->nome_pessoa;
                                                $e = $linha->email;
                                                $i = '../' . $linha->imagem;

                                                echo " <tr>
                                                      <td>{$id}</td>
                                                      <td>{$a}</td>
                                                      <td>{$s}</td>
                                                      <td>{$n}</td>
                                                      <td>{$e}</td>
                                                      
                                                      <td class=\"td-img-tb\"> <img class=\"img-table\" src=\"{$i}\">
                                                      </td>
    
                                                      <td class=\"td-ex-tb\">
    
                                                            <a class=\"a-acao -e\" href=\"../index.php?pagina=SugestaoController&acao=excluir&id={$id}&origem=admin&texto-pesquisa={$tp}\">
                                                           
                                                            </a>
    
                                                            <a class=\"a-acao -a\" href=\"../index.php?pagina=SugestaoController&acao=arquivar&id={$id}&origem=admin&texto-pesquisa={$tp}\">
                                                            
                                                            </a>
    
                                                      </td>
                                                      </tr> ";
                                            }
                                        }
                                    }




                                    ############################################################ senão ##############################################################


                                    else {

                                            $sug = new Matheus\Models\Sugestao();

                                            $filtro  = isset($_GET["filtro"]) ? $_GET["filtro"] : $_GET["filtro"] = 'Entrada';

                                            $resultado = $sug->listaFiltro($filtro);

                                            while ($linha = pg_fetch_object($resultado)) { //aqui troquei para arrays, este loop declara a variavel $linha (ela representa o resultado da query), e o loop lê linha a linha do retorno
                                                // Escreve na página o retorno para cada registro trazido pela query

                                                if ($filtro == 'Arquivadas') {

                                                    $arquivado = $linha->arquivado;

                                                    $id = $linha->id;
                                                    $a = $linha->assunto;
                                                    $s = $linha->sugestao;
                                                    $n = $linha->nome_pessoa;
                                                    $e = $linha->email;
                                                    $i = '../' . $linha->imagem;
                                                    $img = $linha->imagem;

                                                    //$i = $linha->imagem != "Nenhum anexo adicionado"?'../' . $linha->imagem:$linha->imagem;

                                                    


                                                    if($linha->imagem != "Nenhum anexo adicionado"){
                                                        $ie = "<td class=\"td-img-tb\"> <img class=\"img-table\" src=\"{$i}\">
                                                        </td>";
                                                    }
                                                    else{
                                                        $ie = "<td>{$img}</td>";
                                                    }

                                                echo "<tr>
                                                <td>{$id}</td>
                                                <td>{$a}</td>
                                                <td>{$s}</td>
                                                <td>{$n}</td>
                                                <td>{$e}</td>
                                                ".$ie."

                                                <td class=\"td-ex-tb\">

                                                    <a class=\"a-acao -e\" href=\"../index.php?pagina=SugestaoController&acao=excluir&id={$id}&arq={$arquivado}&origem=admin&filtro=Arquivadas\">
                   
                                                    </a>

                                                </td>
                                                </tr> ";
                                                } else if ($filtro == 'Excluidas') {

                                                    $id = $linha->id;
                                                    $a = $linha->assunto;
                                                    $s = $linha->sugestao;
                                                    $n = $linha->nome_pessoa;
                                                    $e = $linha->email;
                                                    $i = '../' . $linha->imagem;
                                                    $img = $linha->imagem;

                                                    //$i = $linha->imagem != "Nenhum anexo adicionado"?'../' . $linha->imagem:$linha->imagem;

                                                    


                                                    if($linha->imagem != "Nenhum anexo adicionado"){
                                                        $ie = "<td class=\"td-img-tb\"> <img class=\"img-table\" src=\"{$i}\">
                                                        </td>";
                                                    }
                                                    else{
                                                        $ie = "<td>{$img}</td>";
                                                    }

                                                echo "<tr>
                                                <td>{$id}</td>
                                                <td>{$a}</td>
                                                <td>{$s}</td>
                                                <td>{$n}</td>
                                                <td>{$e}</td>
                                                ".$ie."

                                                <td class=\"td-ex-tb\">

                                                    <a class=\"a-acao -r\" href=\"../index.php?pagina=SugestaoController&acao=resgatar&id={$id}&origem=admin&filtro=Excluidas\">
                    
                                                    </a>

                                                </td>
                                                </tr> ";
                                                } else {
                                                    $id = $linha->id;
                                                    $a = $linha->assunto;
                                                    $s = $linha->sugestao;
                                                    $n = $linha->nome_pessoa;
                                                    $e = $linha->email;
                                                    $i = '../' . $linha->imagem;
                                                    $img = $linha->imagem;

                                                    //$i = $linha->imagem != "Nenhum anexo adicionado"?'../' . $linha->imagem:$linha->imagem;

                                                    


                                                    if($linha->imagem != "Nenhum anexo adicionado"){
                                                        $ie = "<td class=\"td-img-tb\"> <img class=\"img-table\" src=\"{$i}\">
                                                        </td>";
                                                    }
                                                    else{
                                                        $ie = "<td>{$img}</td>";
                                                    }

                                                echo "<tr>
                                                <td>{$id}</td>
                                                <td>{$a}</td>
                                                <td>{$s}</td>
                                                <td>{$n}</td>
                                                <td>{$e}</td>
                                                ".$ie."

                                                  <td class=\"td-ex-tb\">

                                                        <a class=\"a-acao -e\" href=\"../index.php?pagina=SugestaoController&acao=excluir&id={$id}&origem=admin&filtro=Entrada\">
                                                       
                                                        </a>

                                                        <a class=\"a-acao -a\" href=\"../index.php?pagina=SugestaoController&acao=arquivar&id={$id}&origem=admin&filtro=Entrada\">
                                                        
                                                        </a>

                                                  </td>
                                                  </tr> ";
                                                }
                                            }
                                        }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

                <p class="small text-center text-muted my-5">
                    <em>More table examples coming soon...</em>
                </p>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html> 