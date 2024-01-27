<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/faviconBird.ico" type="image/vnd.microsoft.icon" /> 
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/faviconBird.ico" type="image/vnd.microsoft.icon" />
    <title>＊＊＊館</title>
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
   <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@500&family=Murecho:wght@600&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
    <!-- css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

   <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container-lg">
        <nav class="navbar navbar-expand-lg mr-auto" id="navigation">
            <div class="container-fluid">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon2"></span>
              </button>

              <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarSupportedContent">
                <div class="offcanvas-header">
                </div>
              
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0  justify-content-end ">
                  <li class="nav-item active">
                    <a class="nav-link" href="/"><button type="button" class="btn btn-outline-primary">トップページ</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/support"><button type="button" class="btn btn-outline-primary">子育て支援</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/consultation"><button type="button" class="btn btn-outline-primary">相談</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/study"><button type="button" class="btn btn-outline-primary">研究・研修</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/library"><button type="button" class="btn btn-outline-primary">子育て図書館</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url(); ?>/meeting"><button type="button" class="btn btn-outline-primary">レンタル会議室</button></a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>

          

        </div>
    </header>
