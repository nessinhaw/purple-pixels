<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Arvo|Montserrat|Playfair+Display:700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/theme.css" />

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark main-nav">
        <div class="container">
            <div class="navbar-collapse collapse nav-content order-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">
                <li class="nav-item"><a class="nav-link" href="#">Website Name</a></li>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </ul>
            <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
                <ul class="ml-auto nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="filters" class="filters d-flex justify-content-center mt-3">
      <div class="row">
        <div class="col">
          <div class="btn-group" data-filter-group="posts" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary" data-filter="">Todos</button>
            <button type="button" class="btn btn-secondary" data-filter=".noticias">Noticias</button>
            <button type="button" class="btn btn-secondary" data-filter=".reviews">Reviews</button>
            <button type="button" class="btn btn-secondary" data-filter=".guias">Guias</button>
            <button type="button" class="btn btn-secondary" data-filter=".tecnologia">Tecnologia</button>
            <button type="button" class="btn btn-secondary" data-filter=".eventos">Eventos</button>
          </div>
        </div>

      <div class="col">
        <div class="btn-group" data-filter-group="posts2" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary" data-filter="">Todos</button>
          <button type="button" class="btn btn-secondary" data-filter=".mobile">Mobile</button>
          <button type="button" class="btn btn-secondary" data-filter=".pc">PC</button>
        </div>
      </div>
    </div>
  </div>

    <div class="container mt-3">
      <div class="grid">
          <div class="grid-sizer col-xs-4 col-md-6 col-lg-2 col-xl-2"></div>

          <div class="grid-item noticias mobile col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-noticias cat-badge-link">Notícias</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">13/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item noticias pc col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-noticias cat-badge-link">Notícias</a>
                  <a href="#" class="badge cat-pc cat-badge-link">PC</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This card has some additional content to make it slightly taller overall.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">12/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item reviews pc col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-reviews cat-badge-link">Reviews</a>
                  <a href="#" class="badge cat-pc cat-badge-link">PC</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">11/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item guias mobile col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-guias cat-badge-link">Guias</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">10/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item eventos col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-eventos cat-badge-link">Eventos</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">09/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item noticias mobile col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-noticias cat-badge-link">Notícias</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall. This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">08/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item tecnologia col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-tecnologia cat-badge-link">Tecnologia</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">07/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item reviews mobile col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-reviews cat-badge-link">Reviews</a>
                  <a href="#" class="badge cat-mobile cat-badge-link">Mobile</a>
                </p>
                <h5 class="card-title"><a class="card-title" href="#">Titulo do post</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Algum subtitulo bem legal</h6>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This is another card with title and supporting text below. This is another card with title and supporting text below.</p>
                <p class="card-text"><a href="">Leia mais</a></p>
                <p class="card-text"><small class="text-muted">06/09/2018 por <a href="#">Yuck</a></small></p>
              </div>
            </div>
          </div>

          <div class="grid-item guias pc col-xs-8 col-md-6 col-lg-3 col-xl-4">
            <div class="card shadow-sm">
              <img class="card-img-top" src="img/sample-01.JPG" height="250px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">
                  <a href="#" class="badge cat-guias cat-badge-link">Guias</a>
                  <a href="#" class="badge cat-pc cat-badge-link">PC</a>
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