<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">

    
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/sass/style.css">
    
    <title>Document</title>
</head>
<body>
    <!-- start Navigation -->
    <div class="container-fluid">
      <div class="row">

   
<nav class="navbar navbar-expand-lg navbar-dark  static-top rounded">
    <div class="container logo">
 
      <a href="">
        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="..." class="img-fluid">
      </a>
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto text-dark">
          <li class="nav-item text-dark">
            <a class="nav-link text-dark" aria-current="page" href="">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="">MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="">OUR STORY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="">CONTACT US</a>
          </li>
               <!-- Custom rounded search bars with input group -->
               <form action="">
                <div class="p-1  rounded rounded-pill -sm mb-4">
                  <div class="input-group">
                    <input type="search" aria-describedby="button-addon1" class="form-control border-0">
                    <div class="input-group-append">
                      <button id="button-addon1" type="submit" class="btn btn-link text-primary">
                        <i class="fa fa-search  fa-lg"></i></button>
                      
                    </div>
                  </div>
                </div>
              </form>
              <!-- End -->
       
        </ul>
      </div>
    </div>
  </nav>
</div>
</div>