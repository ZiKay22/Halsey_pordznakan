<?php

    include "Admin/connect.php";
    $sql = "SELECT * FROM `s_d`";
    $result = mysqli_query($conn, $sql);
    $Products = mysqli_fetch_all($result,MYSQLI_ASSOC);

    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halsey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="favicon-32x32.png">
  </head>
  <body class="bg-dark">
   
    <style>
 .carousel-inner .carousel-item {
    max-height:550px;
    width:  100% !important;
}

.carousel-item img {
  width:  100% !important;

}
    </style>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand active"  href="index.html"><img src="logo.png" style="width: 150px;">  </a> 
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Songs
                        </a>
                        <ul class="dropdown-menu ">
                          <li><a class="dropdown-item  text-primary" href="#">Songs Dowload</a></li>
                          <li><a class="dropdown-item  text-primary" href="s_txt.html">Songs Text</a></li>
                          <li><a class="dropdown-item  text-primary" href="s_txt.html">Songs Translate</a></li>
                          <li><a class="dropdown-item" href="albums.html">Albums</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  text-primary" href="#">Social Media/Fan Pages</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  text-primary" href="https://halseymusicstore.eu/" target="_blank">Halsey's Official Site</a>
                      </li>
                    </ul>
                    
                    
                    <form class="d-flex" role="search">
                      <input class="form-control me-2 btn btn-outline-primary" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-primary" type="submit">Search</button>
                      
                    </form>
                    
                    
                  </div>
                  
                  
                </div>
                
                
              </nav>
              
              

        </div>
      

       
        <div class="row">
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
            
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       1121
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>


          


        </div>
        <hr class="text-primary border-3 opacity-75 ">
        <div class="row">
          <div class=" col-4">
            <button class="btn btn-outline-primary " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">About This Site</button>

            <div class="offcanvas offcanvas-start bg-dark text-light" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">About This Site</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <p>This page was made from <a href="https://www.instagram.com/zi_kay_22/" > Zi Kay </a> This is the only one and complete page dedicated to Halsey which included everything about Halsey the copyright owner is Halsey</p>
              </div>
            </div>
          </div>
          <div class=" col-8  text-end">
        <a href="https://www.instagram.com/iamhalsey/" class="text-decoration-none">  <i class="bi bi-instagram text-primary mx-2"></i></a>
        <a href="https://twitter.com/halsey?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-decoration-none"><i class="bi bi-twitter text-primary mx-2"></i></a>
        <a href="https://www.facebook.com/halsey/"class="text-decoration-none">  <i class="bi bi-facebook text-primary mx-2"></i></a> 
          
          <h5 class="text-primary mt-2">Copyright by Halsey</h5>
     
</div>
          


   
        </div>
        






















    </div>






































































    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>