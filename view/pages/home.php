<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dicionário Tecnico</title>
   <link rel="stylesheet" href="view/asset/css/style.css">
   <link rel="stylesheet" href="view/asset/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="view/asset/font-awesome/css/font-awesome.css">
   <link rel="stylesheet" href="view/asset/css_ui/jquery-ui.css">

   <script src="view/asset/vue/vue.js"></script>

   <!-- GOOGLE FONTS -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,600;0,700;1,400;1,500;1,600&family=DM+Sans:ital,wght@0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Lexend+Deca:wght@300&display=swap" rel="stylesheet">
</head>

<body>
   <!-- HEADER -->

   <header id="header">
      <nav class="nav-header">



         <div class="logo">
            <!--<h1>Dicionário Tecnico</h1> -->
         </div>


         <form method="post">
            <div class="search">

               <input type="text" name="pesquisar" required id="saida" placeholder="Pesquisar ">

               <button type="submit">
                  <img src="view/asset/fontes/Vector.svg" alt="vector">
               </button>


            </div>
         </form>

         <div class="row" style="margin-top: 18px;">
            <div class="col-md-6">
               <div class="col-md-5">
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Escolher conteudo
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" id="software" href="#">Software</a></li>
                        <li><a class="dropdown-item" id="hardware" href="#">Hardware</a></li>
                        <li><a class="dropdown-item" id="mg" href="#">MG</a></li>
                     </ul>
                  </div>
               </div>

            </div>
            <div class="col-md-6 text-end">
               <a data-bs-toggle="offcanvas" class="info" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" href="">
                  <span class="badge bg-info text-dark">Info</span>
               </a>


               <div class="offcanvas offcanvas-top" style="height: 100%; background-color: #c1cbda;" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel" class="">DicTec</h5>
                     <button type="button" class="btn-close text-reset text-danger" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body text-center">
                     <h3 class="">Sobre Dicionário Técnico</h3>

                     <h5>O site tem objetivo de ajudar os estudante de informática, facilitando em busca de
                        significado e definições de palavras voltada a TI.</h5>

                     <img src="view/asset/imagens/all.png" class="img-fluid" width="400" alt="Informática para todos">

                     <div class="container" style="height: auto;">
                        <div class="row redes">
                           <div class="col-4 f" style="background-color: #0d6efd;">
                              <a href="https://free.facebook.com/joaokjunioriii"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
                           </div>
                           <div class="col-4" style="background-color: #222225;">
                              <a href="https://github.com/kelvinjunior99"><i class="fa fa-github" aria-hidden="true"></i></a>
                           </div>
                           <div class="col-4 l" style="background-color: #0d6efd;">
                              <a href="https://www.linkedin.com/in/kelvin-junior-9bb7501b9/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                           </div>

                        </div>
                     </div>
                     <br>
                     <h6>+244 949773020</h6>
                     <h5>Desenvolvedor: Kelvin Junior</h5>
                     <h6>DicTec 2020 - <?php echo date('Y');  ?> </h6>

                  </div>
               </div>
            </div>

         </div>
      </nav>
   </header>
   <!-- CARDs -->
   <main id="main">
      <section class="container">
         <div class="card cards " id="card">
            <div class="title-text">

               <?php
               require_once "controller/conexao.php";

               $pesquisar = isset($_POST["pesquisar"]) ? $_POST["pesquisar"] : "";

               $busca = $pdo->prepare("SELECT * FROM palavras WHERE nome LIKE '$pesquisar%'");
               $busca->execute();

               if ($pesquisar != "" || $pesquisar != "") {

                  $linha = $busca->fetchAll(PDO::FETCH_ASSOC);


                  if ($linha) {
                     foreach ($linha as $listar) {
                        echo "<h4>" . ($listar["nome"]) . "</h4>";
               ?>
                        <hr>
               <?php

                        echo "<p>" . $listar["descricao"];
                        echo "</p> ";
                        break;
                     }
                  } else {
                     echo "<h5> palavra não encontrada </h5>";
                  }
               }
               ?>






            </div>
         </div>



      </section>
   </main>

   <script src="view/asset/jquery/jquery-3.6.0.js"></script>
   <script src="view/asset/bootstrap/js/bootstrap.min.js"></script>
   <script src="view/asset/bootstrap/js/bootstrap.bundle.js"></script>
   <script src="view/asset/jquery_ui/jquery-ui.js"></script>
   <script src="view/asset/bootstrap/js/script.js"></script>

   <script>
      $(function() {
         // var dados = [
         //    "Java",
         //    "JavaScript",
         //     "Php",
         //      "Python"
         // ];



         $.getJSON("auto_comple", function(data) {
            // console.log(data);
            var retorno_itens = [];

            $(data).each(function(key, value) {

               //console.log(value.nome);

               retorno_itens.push(value.nome);

            });

            $("#saida").autocomplete({
               source: retorno_itens
            });
         });


      });
   </script>



</body>

</html>