<!doctype html>
<html lang="pt_BR">
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

    <div class="container sticky-nav mb-4" id="filters">
      <ul class="filter nav justify-content-center mt-1" data-filter-group="posts">
        <li class="nav-item">
          <button type="button" class="btn btn-link" data-filter="">Todos</button>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-link btn-link-plus" data-filter=".noticias">Noticias</button>
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

    <div class="container mt-3">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-9">
        <div class="header-title">Recentes</div>
        <div class="grid mt-2">
            <div class="grid-sizer col-xs-4 col-md-6 col-lg-2 col-xl-1"></div>