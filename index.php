<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,200;1,400;1,700&family=Source+Sans+3:wght@900&display=swap" rel="stylesheet">
    
    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script src="js/funcoes.js" type="text/javascript"></script>
    <title>Damns.</title>
</head>

<body>
    <div class="container-fluid px-0">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid" id="nav-content">
                <a class="navbar-brand" href="#"><h5 class="fw-bold text-dark" id="logo">DAMNS.</h5></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h3 class="htitle offcanvas-title fw-bold text-black" id="offcanvasNavbarLabel">DAMNS.</h3>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 pe-5 overflow-hidden justify-content-end" data-bs-dismiss="offcanvas" aria-label="Close">
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="#sobre">Sobre</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="#projeto">Projeto</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="#equipe">Equipe</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="#footer">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- HEADER -->
        <header class="header position-relative start-0 top-0 end-0 px-0">
            <div class="hero position-relative">
                <div class="h-100 row align-items-center position-relative" id="hero_content">
                    <div class="container-fluid align-items-center col-9 col-sm-7 col-md-5 position-relative">
                        <h3 class="fw-bold fs-1" id="header-title">A segurança que o seu lar precisa.</h3>
                    </div>
                    <div class="container-fluid align-items-right col-10 col-sm-7 col-md-6">
                        <img class="hero-img img-fluid position-relative" src="files/img/house3.png">
                    </div>
                </div>
            </div>     
        </header>

        <section>
        <!-- HOME -->
        <div class="container-fluid px-0 text-white position-relative" id="home">
            <div class="row align-items-center mb-0 flex-sm-row-reverse">
                <div class="col-lg-5 col-md-5 col-sm-6 col-12 p-5">
                    <h3 class="fw-bold my-3 text-dark fs-1" id="title">ForGated pronto para proteger sua casa.</h3>
                    <div id="botao"> 
                        <a href="#sobre" class="text-center"><button type="button" class="btn btn-primary btn-lg btn-block btn-dark fw-bold mb-3">Saiba Mais!</button></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-12">
                    <img src="files/img/itens.png" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- SOBRE -->
        <div class="container-fluid px-0 text-white position-relative mb-4" id="sobre">
            <div class="col-12 p-4 text-dark">
                <div class="container mb-5" id="secao1">
                    <h1 class='fw-bold mb-3'>Sobre</h1>
                    <p>
                        Segundo dados divulgados pela Agência Brasil, mais de 50% dos incêndios ocorridos em casas ou apartamentos, resultaram de sobrecarga no sistema elétrico. Segundo a Associação Brasileira de Conscientização dos Perigos da Eletricidade (Abracopel), em 2020, foram registrados no país, 583 incêndios por sobrecarga, com 26 mortes. Desse total, 309 incêndios aconteceram em casas e apartamentos, resultado em 23 mortes.</p>
                    </p>
                    <p>
                        Além disso, apenas em São Paulo, o Corpo de Bombeiros registrou 4.055 casos de acidentes por decorrência de vazamentos de gás GLP (popularmente conhecido como gás de cozinha).
                    </p>
                </div>
                
                <div class="container" id="secao1">
                    <h1 class='fw-bold mb-3'>Objetivo do projeto</h1>
                    <p>
                        O projeto tem como objetivo evitar que tragédias aconteçam em um espaço onde deve ter paz e tranquilidade. Para isso, nosso produto conta com sensores e outros dispositivos que estão conectados juntamente a um aplicativo mobile e também para desktop. 
                    </p>
                    <p>
                        <b>Funções</b>: Monitoramento da rede elétrica em cômodos com maior concentração de produtos eletrônicos (eletrodomésticos, computador, televisão etc); Detectar vazamento de gás que pode resultar em um incêndio; Sistema com sensores de movimento para alertar quando sua casa é invadida quando você não está.
                    </p>
                </div>
            </div>
        </div>

        <!-- PROJETO -->
        <div class="container-fluid px-5 mb-5 text-white position-relative" id="projeto">
            <div class="container pt-5">
                <div class="row justify-content-center" id="projeto-container">
                    <div class="col-12 col-sm-6" id="projeto-coluna-esquerda">
                        <div class="mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto1">
                            <div class="col-10 mt-1" id="card-texto">
                                <h2 class='fw-bold' style="color: #000;">Proteção contra Incêndio</h2>
                            </div>
                            <img src="files/img/abajur2.png" class="img-fluid" id="card-imagem2">
                            <img src="files/img/cozinha.png" class="img-fluid" id="card-imagem1">
                        </div>
                        <div class="mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto2">
                            <div class="col-6 mt-1" id="card-texto">
                                <h2 class='fw-bold' style="color: #000;">Sobrecargas Elétricas</h2>
                            </div>
                            <img src="files/img/mao_fio2.png" class="img-fluid" id="card-imagem1">
                        </div>
                    </div>

                    <div class="col-12 col-sm-5 mb-4">
                        <div class="mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto3">
                            <div class="col-6" id="card-texto">
                                <h2 class='fw-bold' style="color: #000;">Vazamento de Gás de Cozinha</h2>
                            </div>
                            <img src="files/img/gas2.png" class="img-fluid" id="card-imagem1">
                        </div>
                        <div class="mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto1">
                            <div class="col-6 mt-1" id="card-texto4">
                                <h2 class='fw-bold' style="color: #000;">Sensor de Movimento</h2>
                                <p>Seja avisado caso algum intruso invada sua casa enquanto você está fora!</p>
                            </div>
                            <img src="files/img/porta2.png" class="img-fluid" id="card-imagem4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- EQUIPE -->
        <div class="container-fluid px-5 mt-5 text-dark position-relative mb-3" id="equipe">
            <div class="reveal">
                <h1 class='fw-bold mb-4'>Nossa Equipe</h1>
            </div>
            <div class="row px-2" id="equipe-conteudo">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/ferrari.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3" id="nome">Matheus Ferrari Abrahão</h5>
                            <p class="card-text fw-bold">Designer Digital</p>
                            <p class="card-text"><small class="text-muted">Responsável pelo design digital do website, aplicativo mobile e do software para desktop.</small></p>
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                <li><a href="https://www.instagram.com/mtzferrari/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://www.linkedin.com/in/matheus-ferrari-abrahão-893b17237/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="https://github.com/MatheusFAbr" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/yamamoto.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">Matheus Yamamoto Dias</h5>
                            <p class="card-text fw-bold">Programador Mobile</p>
                            <p class="card-text"><small class="text-muted">Responsável por criar o aplicativo mobile do projeto.</small></p>
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                <li><a href="https://www.instagram.com/matheus_yamas/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://www.youtube.com/channel/UC8vWyKLaITcUV-2a4JeKlGg" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="https://github.com/yHiroshiz" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/leandro.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">Leandro Takeo Oyadomari</h5>
                            <p class="card-text fw-bold">Programador Back-end</p>
                            <p class="card-text"><small class="text-muted">Responsável por criar o software do projeto.</small></p>
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                    <li><a href="https://www.instagram.com/le.takeo/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                    <li><a href="https://www.linkedin.com/in/leandro-oyadomari-856998231/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                    <li><a href="https://github.com/takeoya" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/victor.png." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">Victor Ryuki Tamezava</h5>
                            <p class="card-text fw-bold mb-0">Designer Digital</p>
                            <p class="card-text fw-bold">Programador WEB</p>
                            <p class="card-text"><small class="text-muted">Responsável pelo design digital do website, aplicativo mobile e do software para desktop.</small></p>
                            
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                <li><a href="https://www.instagram.com/vicruk_edits/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://www.linkedin.com/in/victor-tamezava/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="https://github.com/VicRuk" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- FOOTER -->
        <footer class="py-3 px-0 position-relative align-items-center" id="footer">
            <div class="container">
                <div class="row justify-content-center align-items-center py-3">
                    <div class="col-12 col-md-2 mb-2 text-center d-flex justify-content-center align-items-center">
                        <a class="text-decoration-none" href="#"><h5 class="fw-bold" id="logo" style="color: #000;">DAMNS.</h5></a>
                    </div>

                    <div class="col-12 col-md-1 mb-2">
                    </div>

                    <div class="col-12 col-md-2 mb-2 text-center d-flex justify-content-center align-items-center">
                        <a class="text-decoration-none" href="#sobre" style="color: #000" id="items-footer">SOBRE</a>
                    </div>

                    <div class="col-12 col-md-2 mb-2 text-center d-flex justify-content-center align-items-center">
                        <a class="text-decoration-none" href="#projeto" style="color: #000" id="items-footer">PROJETO</a>
                    </div>

                    <div class="col-12 col-md-2 mb-2 text-center d-flex justify-content-center align-items-center">
                        <a class="text-decoration-none" href="#equipe" style="color: #000" id="items-footer">EQUIPE</a>
                    </div>

                    <div class="col-12 col-md-3">
                    </div>
                </div>
                <hr class="border opacity-75 w-100" style="border: 1.5px solid black !important">
            </div>

            <ul class="text-center d-flex justify-content-center position-relative mt-5" id="redes2">
                <li><a href="https://github.com/DamnsGroup" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                <li><a href="https://www.instagram.com/damns.projects/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="" target=""><ion-icon name="logo-youtube"></ion-icon></a></li>
                <li><a href="" target=""><ion-icon name="logo-twitter"></ion-icon></a></li>
            </ul>
            <p class="text-center" id="copyright">© 2023 DAMNS | All Rights Reserved</p>
        </footer>
        </section>
    </div>
    </div>
</body>
</html>