<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .bordered{
        border: solid;
    }

    .carousel-contain{
        background-color:black;

    }
    .banner{
        height:90vh;
        background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,5.5)), url('bootstrap-5.3.0-alpha1-dist/hilda.jpg');
        background-size:cover;
        background-position:center;
    }
    .banner-content{
        height:100%;
        color:white;
        display:flex;
        justify-content:center;
        align-items:center;
        
    }
    .card img{
        height:140px;
    }

    .icon img{
        height:40px;
        border-radius:52%;
        padding:4px;
        margin:5px;
    }
    

</style>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: rgb(0, 0, 0); ">
    <div class="container-fluid icon">
        <a class="navbar-brand mx-2" href="#">
            <span class="text-warning">E</span>sport
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item  dropdown mx-2 active">
                     <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                     </a>
                <ul class="dropdown-menu" aria-labelledboy="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                     <a class="nav-link active mx-2">Disabled</a>
                </li>
            </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
        <div>
            <img src="bootstrap-5.3.0-alpha1-dist/icon.webp">
        </div>
    </div>
    </nav>

    <!--Banner-->
    <div class="container-fluid banner">
        <div class="container banner-content col-lg-6 ">
            <div class="text-center">
                <p class="fs-1">
                    Selamat Datang
                </p class="d-none d-md-block">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consequuntur omnis, porro dolore cum dicta quae explicabo repudiandae nostrum quo?
                </p>
                <p> <a href="contact" class="btn btn-warning">Start</a></p>
                
            </div>
        </div>
    </div>

    <!--Accordion-->
    <div class="my-5 container col-sm-9 col-md-8 col-lg-6">
        <h2 class="text-center mb-5">Kenapa Harus Membaca Di Kami</h2>
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Dari Sumber Terpercaya
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Artikel Seputar Mobile Legends
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Update Patch Terbaru
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Analis Gameplay 
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the Fourth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            </div>  
        </div>
    </div>

    <!--carousel-->
    <div class="container-fluid carousel-contain py-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide"> <!--col-lg-8 offset-lg-2"-->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="bootstrap-5.3.0-alpha1-dist/m42.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="bootstrap-5.3.0-alpha1-dist/blacklist.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="bootstrap-5.3.0-alpha1-dist/mpl.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>


    <!--cards-->
    <div class="container">
        <div class="text-center my-5">
            <h1>Blog Grid Layout</h1>
            <hr>
        </div>
    </div>

    <!--card read more-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-5">
                    <img src="bootstrap-5.3.0-alpha1-dist/echo.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Blacklist lewat! Echo Pemenang M4</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card " >
                    <img src="bootstrap-5.3.0-alpha1-dist/benny.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Analisis Posisi dan Timing Karrie Bennyqt</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="bootstrap-5.3.0-alpha1-dist/atlas.jpg " class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">5 Tips Menjadi Roamer </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="bootstrap-5.3.0-alpha1-dist/hayabusa.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Kelincahan Hayabusa Kairi di M4!</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card " >
                    <img src="bootstrap-5.3.0-alpha1-dist/2 support.webp"  class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Meta 2 support yang Katanya Overpower di Season 27</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card " >
                    <img src="bootstrap-5.3.0-alpha1-dist/acil.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Lord Adi Resmi Bergabung ke ONIC</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card " >
                    <img src="bootstrap-5.3.0-alpha1-dist/mpl11.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Prediksi MPL 11 yang akan datang</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card " >
                    <img src="bootstrap-5.3.0-alpha1-dist/facehugger.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Coach Aura yang Menyamar Menjadi Player</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                    </div>
                </div>
        </div>
    </div>

  

    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>  
    </script>
</body>
</html>