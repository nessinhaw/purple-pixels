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

    <div class="container mb-4">
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

      <div id="filters">
        <ul class="filter nav justify-content-center mt-2" data-filter-group="posts">
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
          <ul class="filter nav justify-content-center mt-2" data-filter-group="posts2">
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
    </div>

    <div class="container mt-4">
      <div class="post-card shadow-sm">
        <h1 class="post-title">Titulo do post</h1>
        <h2 class="post-subtitle text-muted">Algum subtitulo bem legal</h2>
        <h3 class="post-info">Postado em 05/10/2018 por <a href="">Yuck</a> . <a href="">Deixe um comentário</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis nunc quam. Ut urna mauris, ultrices vitae orci ac, varius iaculis tellus. Sed metus libero, bibendum in sodales nec, ullamcorper varius sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi et risus vitae enim auctor euismod. Sed odio metus, commodo non efficitur eu, gravida quis nulla. Nullam dignissim quam ex, eget pulvinar quam vehicula at. Aenean luctus mattis venenatis. Morbi gravida maximus sem sit amet convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin sodales nulla ut convallis. Praesent fringilla lectus non augue mattis posuere. Pellentesque lobortis faucibus faucibus. Aliquam sagittis, velit ac auctor scelerisque, neque sem vehicula libero, at placerat ligula tellus vel est. Integer non tortor id mauris porta convallis vitae vitae ligula. In eu tellus nulla.<br/><br/>

        Vestibulum fermentum id quam ac dapibus. Donec in dignissim tortor. Phasellus egestas justo a mollis dapibus. Mauris a justo ut elit pretium elementum. Integer gravida sem non enim pulvinar, in dapibus justo bibendum. Ut pretium fermentum dui at porttitor. Aliquam lobortis eu tortor non ultrices. Fusce sed leo tincidunt, molestie nisi auctor, laoreet lacus. Aenean eleifend est pellentesque dolor rhoncus scelerisque. Mauris tempus eros sollicitudin lectus accumsan accumsan. Proin id dolor posuere, blandit justo a, hendrerit metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus id varius nulla, non dictum elit. Donec quis augue nec ipsum aliquam faucibus. Maecenas consectetur gravida nisl, ac iaculis mi molestie elementum. Quisque pharetra ornare justo nec sagittis.<br/><br/>

        Vivamus quis malesuada ex, a convallis felis. Morbi id arcu vel dui ullamcorper aliquet. Aliquam erat volutpat. Vivamus egestas quam at ligula tempor, id eleifend risus eleifend. Maecenas gravida arcu a nunc rutrum tempor. Ut eget eros ultricies, venenatis ante in, rutrum erat. Nulla venenatis, augue eu sodales aliquet, lorem ipsum convallis dolor, in suscipit tellus massa eu turpis. Praesent vel tempor neque. Nam pulvinar porttitor venenatis.<br/><br/>

        Morbi sed mollis ipsum. Nullam commodo nisl id facilisis iaculis. Fusce commodo tortor a lectus auctor tincidunt. Duis convallis ante ac metus molestie volutpat. Vivamus quis magna lorem. Suspendisse potenti. Proin ac ipsum a est blandit laoreet non fermentum metus. Proin vehicula, dui faucibus blandit facilisis, lacus magna aliquet justo, a laoreet nunc ipsum vitae eros.</p>
      </div>
    </div>


    <footer class="footer footer-bg mt-5">
      <div class="container">
        <div class="row ">
          <div class="col-sm mt-4 mb-4">
            
              <div>
                <h5 class="pb-3 footer-title">Arquivo</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item pt-0"><a class="footer-link" href="#">Dezembro 2018</a></li>
                  <li class="list-group-item"><a class="footer-link" href="">Novembro 2018</a></li>
                  <li class="list-group-item"><a class="footer-link" href="">Outubro 2018</a></li>
                  <li class="list-group-item"><a class="footer-link" href="">Setembro 2018</a></li>
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
                      <h5 class="mt-0 mb-1"><a class="footer-link" href="#">Pessoa 1</a></h5>
                      <p>Breve introdução sobre o autor.</p>
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="mr-3 rounded-circle" src="img/sample-01.JPG" width="64" height="64" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1"><a class="footer-link" href="#">Pessoa 2</a></h5>
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