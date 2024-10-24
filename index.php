<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="/img/logo192x192.png" type="image/png">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">
  <title>Portfolio</title>
</head>

<body>
  <!-- navbar -->

  <!-- pc -->
  <nav class="navbar">
    <div class="container-fluid d-none d-md-block">
      <div class="d-flex align-items-center justify-content-between">
        <a class="navbar-brand d-flex align-items-center logo">
          <img src="img/logo192x192.png" alt="">
          <span class="ms-2">Alessia Ciabatti</span>
        </a>

        <div class="d-flex flex-row">
          <a class="navbar-brand" href="#specializzazioni">
            Specializzazioni
          </a>
          <a class="navbar-brand" href="#lavori">
            Lavori
          </a>
          <a class="navbar-brand" href="#tecnologie">
            Tecnologie
          </a>
          <a class="navbar-brand" href="#contatti">
            Contatti
          </a>
        </div>
      </div>

    </div>
    <!-- mobile -->
    <div class="container-fluid d-block d-md-none">
      <div class="d-flex align-items-center">
        <a class="navbar-brand logo">
          <img src="img/logo192x192.png" alt="">
          <span class="ms-2">Alessia Ciabatti</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- hero -->
  <!-- mobile/tablet -->
  <section class="hero d-lg-flex align-items-end">
    <div class="my_container d-sm-flex flex-column d-lg-none">

      <h1>Jr Full Stack Web Developer & UX/UI Designer</h1>

      <h5 class="d-sm-none">Su di me</h5>
      <p class="d-sm-none">
        Mi presento brevemente: sono Alessia Ciabatti, ho 28 anni e sono una Junior Full
        Stack Web Developer con provata esperienza nel graphic design, il tutto arricchito con conoscenze dei principi
        di UX/UI design.
      </p>

      <div class="btn_contact">
        <a href="#contatti" class="button type--A">
          <div class="button__line"></div>
          <div class="button__line"></div>
          <span class="button__text">Contatti</span>
          <div class="button__drow1"></div>
          <div class="button__drow2"></div>
        </a>
      </div>

      <div class="icon">
        <a class="me-3" href="https://github.com/AlessiaCiabatti" target="_blank"><i
            class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/in/alessiaciabatti/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
      </div>

      <div class="d-flex d-block d-lg-none justify-content-center">
        <div class="bg_img">
          <img class="my_img d-sm-none" src="img/foto_ok.png" alt="">
        </div>
      </div>

    </div>

    <!-- pc -->
    <div class="pc my_container d-sm-none d-lg-block d-lg-flex flex-lg-row">

      <div class="hero_description">
        <h1>Jr Full Stack Web Developer & UX/UI Designer</h1>

        <h5>Su di me</h5>
        <p>
          Mi presento brevemente: sono Alessia Ciabatti, ho 28 anni e sono una Junior Full
          Stack Web Developer con provata esperienza nel graphic design, il tutto arricchito con conoscenze dei principi
          di UX/UI design.
        </p>

        <div class="btn_contact">
          <a href="#contatti" class="button type--A">
            <div class="button__line"></div>
            <div class="button__line"></div>
            <span class="button__text">Contatti</span>
            <div class="button__drow1"></div>
            <div class="button__drow2"></div>
          </a>
        </div>

        <div class="icon">
          <a class="me-3" href="https://github.com/AlessiaCiabatti" target="_blank"><i
              class="fa-brands fa-github"></i></a>
          <a href="https://www.linkedin.com/in/alessiaciabatti/" target="_blank"><i
              class="fa-brands fa-linkedin"></i></a>
        </div>

      </div>


      <div class="d-flex d-none d-lg-block d-lg-flex justify-content-end align-items-end">
        <div class="bg_img_pc d-flex justify-content-center">
          <img class="my_img_pc" src="img/foto_ok.png" alt="">
        </div>
      </div>

    </div>
  </section>
  <!-- fine hero -->

  <!-- main -->
  <section id="specializzazioni">
    <div class="container d-flex flex-column align-items-center start">
      <span class="line"></span>
      <h2 class="mb-5">Specializzazioni</h2>
      <p class="description">
        Mi sono specializzata nella programmazione, sviluppando soluzioni web efficienti e su misura. La mia esperienza
        in UX/UI design si concentra sulla creazione di esperienze utente intuitive e coinvolgenti. Nel campo del
        graphic design, realizzo, creo e disegno progetti d'impatto per brand e campagne, trasformando idee in grafiche
        chiare e interessanti.
      </p>
    </div>

    <div class="row row-cols-1 row-cols-lg-3 g-4 mt-3">

      <div class="col d-flex justify-content-center">
        <div class="card" style="width: 24rem;">
          <div class="d-flex justify-content-center">
            <img src="img/icon_card/coding.png" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h3 class="card-title mb-3">Coding</h3>
            <p class="card-text">Sviluppo codice efficente per siti web, applicazioni e creo soluzioni personalizzate
              utilizzando strumenti quali: HTML, CSS, JavaScript, e frameworks moderni, dal backend al frontend.</p>
          </div>
        </div>
      </div>

      <!-- Aggiungi altre card qui, ad esempio: -->
      <div class="col d-flex justify-content-center">
        <div class="card" style="width: 24rem;">
          <div class="d-flex justify-content-center">
            <img src="img/icon_card/icon_ux_ui.png" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h3 class="card-title mb-3">UX/UI Design</h3>
            <p class="card-text">Creo design intuitivi e interfacce migliorando l'esperienza utente con tecnologie come
              Figma e photoshop, concentrandomi su architettura e design visivo.</p>
          </div>
        </div>
      </div>

      <!-- Altre card ... -->
      <div class="col d-flex justify-content-center">
        <div class="card" style="width: 24rem;">
          <div class="d-flex justify-content-center">
            <img src="img/icon_card/graphic_design.png" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h3 class="card-title mb-3">Graphic Design</h3>
            <p class="card-text">Progetto contenuti grafici d'impatto per marchi e campagne, trasformando idee complesse
              in immagini chiare. Lavoro con Adobe Illustrator, Photoshop e InDesign per creare loghi professionali,
              brochure e contenuti digitali.</p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- lavori -->
  <section id="lavori" class="curved-bg">
    <div class="d-flex flex-column align-items-center justify-content-center">
      <span class="line line_work"></span>
      <h2>Lavori</h2>
      <div class="lavori text-center">
        <div class="row work">
          <!-- <div class="col">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/1011772838?h=cb2e88c454" width="450" height="360" frameborder="0" allowfullscreen></iframe>
            <div>
              <img class="icon_video" src="img/icone_img/figma.png" alt="">
            </div>
          </div>
          <div class="col">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/1011772838?h=cb2e88c454" width="450" height="360" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col">
            <iframe title="vimeo-player" src="https://player.vimeo.com/video/1011772838?h=cb2e88c454" width="450" height="360" frameborder="0" allowfullscreen></iframe>
          </div>
        </div> -->
        </div>
      </div>

  </section>
  <!-- fine lavori -->

  <!-- linguaggi -->
  <section id="tecnologie">

    <div class="d-flex flex-column align-items-center">
      <span class="line_tecnologie"></span>
      <h2 class="mb-5">Tecnologie</h2>
    </div>


    <table class="container">
      <tbody>
        <tr>
          <td><img class="html" src="img/icone_img/html.png" alt=""></td>
          <td><img class="html" src="img/icone_img/css.png" alt=""></td>
          <td><img class="html" src="img/icone_img/bootstrap.png" alt=""></td>
        </tr>
        <tr>
          <td><img class="html" src="img/icone_img/javascript.png" alt=""></td>
          <td><img class="html" src="img/icone_img/vue.png" alt=""></td>
          <td><img class="html" src="img/icone_img/sass.png" alt=""></td>
        </tr>
        <tr>
          <td><img class="html" src="img/icone_img/vite.png" alt=""></td>
          <td><img class="html" src="img/icone_img/php.png" alt=""></td>
          <td><img class="html" src="img/icone_img/mysql.png" alt=""></td>
        </tr>
        <tr>
          <td><img class="html" src="img/icone_img/laravell.png" alt=""></td>
          <td><img class="html" src="img/icone_img/photoshop.png" alt=""></td>
          <td><img class="html" src="img/icone_img/illustrator.png" alt=""></td>
        </tr>
        <tr>
          <td><img class="html" src="img/icone_img/indesign.png" alt=""></td>
          <td><img class="html" src="img/icone_img/figma.png" alt=""></td>
        </tr>
      </tbody>
    </table>
  </section>
  <!-- fine linguaggi -->

  <!-- footer -->
  <section id="contatti" class="prova">

    <div class="footer">

      <div class="container_form">
        <form action="form.php" method="post">
          <h3>Contattami</h3>

          <?php
          if (isset($_GET['error'])) {
            $Msg = "Completare i campi richiesti";

            echo '<div class="alert alert-danger">' . $Msg . '</div>';
          }

          if (isset($_GET['success'])) {
            $Msg = 'L\'operazione è andata a buon fine';

            echo '<div class="alert alert-success">' . $Msg . '</div>';
          }

          ?>

          <input type="text" name="name" placeholder="Nome">
          <input type="email" name="email" placeholder="E-mail">
          <textarea name="message" rows="4" placeholder="Messaggio"></textarea>
          <button type="submit" name="btn-send">SEND</button>
        </form>
      </div>

    </div>


  </section>
  <script src="script.js"></script>

  <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="9be3d066-3497-4a7e-9f28-3db4b0fa7d20"
    data-blockingmode="auto" type="text/javascript"></script>
</body>

</html>