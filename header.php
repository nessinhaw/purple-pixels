<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="container">
      <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <form>
                <input type="text" name="search" placeholder="&#xf002 Pesquisar...">
              </form>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo" href="#">Nome do Blog</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="blog-header-icon pr-2" href="#"><i class="fab fa-facebook"></i></a>
              <a class="blog-header-icon pr-2" href="#"><i class="fab fa-twitter-square"></i></a>
            </div>
          </div>
      </header>
    </div>

    <div class="container sticky mb-4" id="filters">
      <ul class="filter nav justify-content-center mt-1" data-filter-group="posts">
        <li class="nav-item">
          <button type="button" class="btn btn-link" data-filter="">Todos</button>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link btn-link-plus" data-filter=".category-noticias">Noticias</button>
          <a class="open"><i class="btn-icon fas fa-chevron-right"></i></a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link btn-link-plus pl-4" data-filter=".reviews">Reviews</button>
          <a class="open"><i class="btn-icon fas fa-chevron-right"></i></a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link btn-link-plus pl-4" data-filter=".guias">Guias</button>
          <a class="open"><i class="btn-icon fas fa-chevron-right"></i></a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link pl-4" data-filter=".tecnologia">Tecnologia</button>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link" data-filter=".eventos">Eventos</button>
        </li>
      </ul>

      <div id="panel">
        <ul class="filter nav justify-content-center" data-filter-group="posts2">
          <li class="nav-item">
            <button type="button" class="btn btn-link" data-filter="">Todos</button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-link" data-filter=".mobile">Mobile</button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-link" data-filter=".pc">PC</button>
          </li>
        </ul>
      </div>
    </div>

    <div class="container mb-3">
      <div class="header-title">Destaques</div>
      <div class="row mt-2">
        <div class="col-md-6">
          <div class="card flex-md-row-reverse mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text"><a href="#" class="badge cat-badge-link">Jogo da Semana</a></p>
              <h3 class="card-title"><a class="card-title" href="#">Titulo do jogo</a></h3>
              <p class="card-text mb-2">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in.</p>
              <p class="card-text pt-2 mb-auto"><a href="#" class="card-link">Review</a> <a href="#" class="card-link">Guias</a></p>
            </div>
            <img class="flex-auto d-none d-lg-block" width="210" height="285" src="img/onmyoji-sample.JPG" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row-reverse mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text"><a href="#" class="badge cat-badge-link">Destaque da Semana</a></p>
              <h3 class="card-title"><a class="card-title" href="#">Titulo do post</a></h3>
              <p class="card-text mb-2">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in.</p>
              <p class="card-text pt-2 mb-auto"><a href="#" class="card-link">Leia mais</a></p>
            </div>
            <img class="flex-auto d-none d-lg-block" width="210" height="285" src="img/onmyoji-sample.JPG" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-3">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-9">
        <div class="header-title">Recentes</div>
        <div class="grid mt-2">
            <div class="grid-sizer col-xs-4 col-md-6 col-lg-2 col-xl-1"></div>