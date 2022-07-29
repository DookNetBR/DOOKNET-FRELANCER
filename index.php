<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css/estilo.css">
    <title>DOOKNET - FRELANCER</title>
</head>

<body>
    <header class="cabecalho">
        
            <h1>DOOKNET</h1>
            <h2>frelancer</h2>
      
       
        <script src="https://kit.fontawesome.com/1e592b5726.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="./searchBar.css">
            
            <form action="#" method="post">
            <input type="text" name="search" id="search" placeholder="Faça sua Busca" required>
            <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            
        
    </header>
   

    <main class="principal">
        <div class="conteudo">

            <nav class="modulos">

            <div class="modulo vermelho-escuro">
                    <h3>Habilidades</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=escopo">
                                JavaScript
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_retorno">
                                C++
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_retorno">
                                Ruby
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_retorno">
                                C
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_retorno">
                                Java
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_retorno">
                                Php
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_retorno">
                                Python
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_retorno">
                                C#
                            </a>
                        </li>
                        <footer class="rodape">
                            <?= date('D M Y'); ?>
                        </footer>
                    </ul>
            </div>

            <div class="modulo verde-escuro">
                    <h3>Modalidade de trabalho</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=for">
                                Preço Fixo
                            </a>
                        </li>
                        
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_for">
                                Preço Por Hora
                            </a>
                        </li>
                        <footer class="rodape">
                            <?= date('D M Y'); ?>
                        </footer>
                    </ul>
            </div>

            <div class="modulo laranja">
                    <h3>Idioma</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basico">
                                Português
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=mapa">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_index">
                                Español
                            </a>
                        </li>    
                        <footer class="rodape">
                            <?= date('D M Y'); ?>
                        </footer>                    
                    </ul>
                </div>

            <div class="modulo roxo">
                    <h3>Localização Do Cliente</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basico">
                            América do Sul e Central
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=mapa">
                            América do Norte
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_index">
                            Europa
                            </a>
                        </li>   
                        <footer class="rodape">
                            <?= date('D M Y'); ?>
                        </footer>                     
                    </ul>
                </div>

             <div class="modulo azul">
                    <h3>Tipo de projeto</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">
                            Projetos em destaque
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                            Projetos urgentes
                            </a>
                        </li>
                        <footer class="rodape">
                            <?= date('D M Y'); ?>
                        </footer>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Subcategorias</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Banco de Dados
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Cloud Computing
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Desenvolvimento de Games
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Desenvolvimento Desktop
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Desenvolvimento Mobile
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desenvolvimento Web
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Teste de Software
                            </a>
                        </li>
                        <footer class="rodape">
                            <?= date('D M Y'); ?>
                        </footer>
                    </ul>
                </div>   
            </nav>
        </div>
    </main>
    <footer class="rodape">
        DOOKNET © <?= date('Y'); ?>
    </footer>
</body>
</html>