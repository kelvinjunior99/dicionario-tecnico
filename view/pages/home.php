<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Framework - Rotas </title>

  <!--Bootstrap 5--->
  <link rel="stylesheet" href="view/asset/bootstrap/css/bootstrap.min.css">

  <!--Font awemesome--->
  <link rel="stylesheet" href="view/asset/font-awesome/css/font-awesome.min.css">

  <!---CSS--->
  <link rel="stylesheet" href="view/asset/css/estilo.css">
  <link rel="stylesheet" href="view/asset/css/sidebars.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>

  <main>
    <div class="flex-shrink-0 p-3 bg-white menu">
      <a href="" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-5 fw-semibold">Url amigavel - MF</span>
      </a>
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Home
          </button>
          <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Overview</a></li>
              <li><a href="#" class="link-dark rounded">Updates</a></li>
              <li><a href="#" class="link-dark rounded">Reports</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Dashboard
          </button>
          <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Overview</a></li>
              <li><a href="#" class="link-dark rounded">Weekly</a></li>
              <li><a href="#" class="link-dark rounded">Monthly</a></li>
              <li><a href="#" class="link-dark rounded">Annually</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Orders
          </button>
          <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">New</a></li>
              <li><a href="#" class="link-dark rounded">Processed</a></li>
              <li><a href="#" class="link-dark rounded">Shipped</a></li>
              <li><a href="#" class="link-dark rounded">Returned</a></li>
            </ul>
          </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Account
          </button>
          <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">New...</a></li>
              <li><a href="#" class="link-dark rounded">Profile</a></li>
              <li><a href="#" class="link-dark rounded">Settings</a></li>
              <li><a href="#" class="link-dark rounded">Sign out</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </main>

  <section id="conteudo">
    <div class="container">
      <div class="card">
        <div class="card-header">
          @inicio
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0 text-center">
            <p>Sistema de Rotas com PHP - Mini Framework</p>
            <footer class="blockquote-footer"><cite title="Source Title">@html, @css, @javascript, @php, @mvc</cite></footer>
          </blockquote>
        </div>
      </div>
      <hr>

      <div class="card">
        <div class="card-body">
        <p>Se você esta ler esta documentação é porque já fizeste download do #Sistema de Rota</p>
      <p>Descubra o que ela tem: </p>
        </div>
      </div>


    </div>


  </section>


  <script src="view/asset/css/sidebars.js"></script>
  <script src="view/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>