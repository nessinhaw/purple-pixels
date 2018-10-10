<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Arvo|Montserrat|Playfair+Display:700" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/search-bar.css" />
    <link rel="stylesheet" href="css/media.css" />

    <title>Hello, world!</title>
  </head>
  <body>

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
        <div class="header-title">Arquivo</div>
        <div class="grid mt-2">
            <div class="grid-sizer col-xs-4 col-md-6 col-lg-2 col-xl-1"></div>

            <div class="grid-item noticias mobile col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Notícias</a>
                    <a href="#" class="badge cat-badge-link">Mobile</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">13/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item noticias pc col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Notícias</a>
                    <a href="#" class="badge cat-badge-link">PC</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This card has some additional content to make it slightly taller overall.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">12/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item reviews pc col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Reviews</a>
                    <a href="#" class="badge cat-badge-link">PC</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This is another card with title and supporting text below.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">11/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item guias mobile col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Guias</a>
                    <a href="#" class="badge cat-badge-link">Mobile</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">10/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item eventos col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Eventos</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">09/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item noticias mobile col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Notícias</a>
                    <a href="#" class="badge cat-badge-link">Mobile</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall. This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">08/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item tecnologia col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Tecnologia</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">07/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item reviews mobile col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Reviews</a>
                    <a href="#" class="badge cat-badge-link">Mobile</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This is another card with title and supporting text below.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">06/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>

            <div class="grid-item guias pc col-xs-8 col-md-6 col-lg-3 col-xl-6">
              <div class="card shadow-sm">
                <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <a href="#" class="badge cat-badge-link">Guias</a>
                    <a href="#" class="badge cat-badge-link">PC</a>
                  </p>
                  <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                  <p class="card-text"><a href="">Leia mais</a></p>
                  <p class="card-text"><small class="text-muted">05/09/2018 por <a href="#">Yuck</a></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="widget">
            <div class="header-title mb-2">Mais Lidos</div>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-lidas flex-column align-items-start mb-1">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Titulo do Post</h5>
                    <small>13/09/2018</small>
                  </div>
                  <p class="mb-1">Algum subtitulo bem legal</p>
                  <small>This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</small>
                </a>
                <a href="#" class="list-group-item list-group-lidas flex-column align-items-start mb-1">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Titulo do Post</h5>
                    <small>13/09/2018</small>
                  </div>
                  <p class="mb-1">Algum subtitulo bem legal</p>
                  <small>This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below.</small>
                </a>
                <a href="#" class="list-group-item list-group-lidas flex-column align-items-start mb-1">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Titulo do Post</h5>
                    <small>13/09/2018</small>
                  </div>
                  <p class="mb-1">Algum subtitulo bem legal</p>
                  <small>This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</small>
                </a>
              </div>
          </div>

          <div class="widget mt-4">
            <div class="header-title mb-2">Top Tags</div>
            <div class="card">
              <div class="card-body">
                <a href="#" class="badge">Horror</a> <a href="#" class="badge">Android</a> <a href="#" class="badge">Survival</a> <a href="#" class="badge">MOBA</a> <a href="#" class="badge">RPG</a> <a href="#" class="badge">Strategy</a> <a href="#" class="badge">Indie</a> <a href="#" class="badge">Puzzle</a> <a href="#" class="badge">MMORPG</a> <a href="#" class="badge">Nintendo</a>
              </div>
            </div>
          </div>
 
            
        </div>
     </div>
    </div>


    <footer class="footer footer-bg mt-5">
      <div class="container">
        <div class="row ">
          <div class="col-sm mt-4 mb-4">
            
              <div>
                <h5 class="pb-3 footer-title">Arquivo</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-footer pt-0"><a class="footer-link" href="#">Dezembro 2018</a></li>
                  <li class="list-group-item list-group-footer"><a class="footer-link" href="">Novembro 2018</a></li>
                  <li class="list-group-item list-group-footer"><a class="footer-link" href="">Outubro 2018</a></li>
                  <li class="list-group-item list-group-footer"><a class="footer-link" href="">Setembro 2018</a></li>
                </ul>
              </div>

          </div>

          <div class="col-sm mt-4 mb-4">

              <div>
                <h5 class="pb-3 footer-title">Quem escreve?</h5>
                <ul class="list-unstyled">
                  <li class="media">
                    <img class="mr-3 rounded-circle" src="img/sample-01.JPG" width="64" height="64" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1"><a class="author-link" href="#">Pessoa 1</a></h5>
                      <p>Breve introdução sobre o autor.</p>
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="mr-3 rounded-circle" src="img/sample-01.JPG" width="64" height="64" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1"><a class="author-link" href="#">Pessoa 2</a></h5>
                      <p>Breve introdução sobre o autor.</p>
                    </div>
                  </li>
                </ul>
            </div>

          </div>

          <div class="col-sm mt-4 mb-4">
            <div class="mb-5">
              <h5 class="pb-3 footer-title">Newsletter</h5>
              <form>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="seu-email@email.com" aria-label="seu-email@email.com" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-newsletter" type="button" id="button-addon2">Inscrever!</button>
                  </div>
                </div>
              </form>
            </div>

            <div>
              <h5 class="pb-2 footer-title">Sobre</h5>
              <p>Algum texto legal sobre o blog.</p>
            </div>

          </div>
        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/teste.js"></script>
  </body>
</html>