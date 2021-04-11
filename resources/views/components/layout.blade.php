
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dentista | Studio Colapietro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
</head>

<body>
    <div class="img-header">
        <div class="container-fluid nav-custom col-12">
            <div class="row" id="ghost-nav">
                <a class="col-2 he-li ms-5 text-end mt-3">
                    Prenota un appuntamento
                </a>
    
                <a class="col-1 text-center mt-3 he-li">
                    Chiama subito
                </a>
                <a class="col-1 mt-3 he-li">
                    Invia una email
                </a>
                <div class="col-6 ms-5 text-end mt-3">
                    <i class="fab fa-instagram me-2"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-youtube ms-2"></i>
                </div>
            </div>
            <hr>
    
            <div class="fs-4 brand">
                <i class="fas fa-tooth me-2"></i>
                Studio <b>Colapietro</b>
            </div>
            <ul class="nav justify-content-end me-5">
                <li class="nav-item me-5" id="item-nav">
                    <a class="nav-link active me-5 he-li" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item me-5" id="item-nav">
                    <a class="nav-link me-5 he-li" href="/chisiamo">Chi siamo</a>
                </li>
                <li class="nav-item me-5" id="item-nav">
                    <a class="nav-link me-5 he-li" href="/servizi">Servizi</a>
                </li>
                <li class="nav-item me-5" id="item-nav">
                    <a class="nav-link me-5 he-li" href="/contatti" tabindex="-1" aria-disabled="true">Contatti</a>
                </li>
            </ul>
        </div>
    
        <div class="container slogan col-12">
            <h2 class="slogan-text">Studio Dentistico Colapietro <br><br></h2>
            <h1 class="slogan-text">Il meglio per la salute dei tuoi denti</h1>
        </div>
    </div>
    
    {{$slot}}

    <footer>
        <footer class="bg-primary text-white text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5 class="mb-4">Aiuto e contatti</h5>
          
                  <ul class="list-unstyled mb-0">
                    <li>
                      <p class="text-white"><i class="fas fa-map-marker-alt me-2"></i> Viale Dei Pini , 53</p>
                    </li>
                    <li>
                      <p class="text-white"><i class="far fa-envelope me-2"></i> info@studiocolapietro.it</p>
                    </li>
                    <li>
                      <p class="text-white"><i class="fas fa-globe me-2"></i> studiocolapietro.it</p>
                    </li>
                    <li>
                      <p class="text-white"><i class="fas fa-mobile-alt me-2"></i> +39101010101</p>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->
          
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <p class="text-white">Instagram <i class="fab fa-instagram ms-3"></i> </p>
                    </li>
                    <li>
                      <p class="text-white">Facebook <i class="fab fa-facebook-f ms-3"></i> </p>
                    </li>
                    <li>
                      <p class="text-white">Twitter <i class="fab fa-twitter ms-3"></i> </p>
                    </li>
                    <li>
                      <p class="text-white">Linkedin <i class="fab fa-linkedin-in ms-3"></i> </p>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->
          
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <ul class="list-unstyled">
                    <li>
                      <p></p>
                    </li>
                    <li>
                      <p></p>
                    </li>
                    <li>
                      <p></p>
                    </li>
                    <li>
                      <p></p>
                    </li>
                  </ul>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2020 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
          </footer>
    </footer>
    <script type="text/javascript" src="{{ asset('js/myscript.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
    </html>
