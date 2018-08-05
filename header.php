<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>



<body>

    
 

<div class='hidden-sm hidden-md hidden-lg' id='mobile_header_logo_image'>
  <img id="main_header_logo_image_mobile" src="<?php echo get_template_directory_uri(); ?>/images/english_school_logo.jpg" alt="English school logo" />
</div>

<header class='navbar navbar-default' id='main_header'>
  <div class='row'>
  
    <div class='col-xs-3'>
      <div class='hidden-xs'>
        <a href="/"><img id="main_header_logo_image" src="<?php echo get_template_directory_uri(); ?>/images/english_school_logo.jpg" alt="English school logo" />
        </a>
      </div>
    </div>
  <!-- / user picture, points and level -->
  <div class='col-xs-6 center col-sm-2 col-lg-offset-2' id='current_user_info_container'>
    <div class='row'>
      <div class='col-xs-12'>
      </div>
    </div>

  </div>
  <div class='container-fluid'>
  <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class='navbar-header'>
      <button aria-expanded='false' class='navbar-toggle collapsed' data-target='#bs-example-navbar-collapse-1' data-toggle='collapse' id='nav_sandwhich' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
    </div> <!-- .navbar-header -->

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
    <ul class='nav navbar-nav navbar-right nav-links'>
      <li>
      <a href="/free" id="free-book-button-on-blog">
        <button class='btn btn-primary v_margin'>免費禮物</button>      
      </a>
      <!-- Free Gift -->
      </li>
      <li>
        <a href="/blog">Blog</a>
      </li>
      <li class='hidden-sm hidden-md hidden-lg'>
        <a href="/free">免費</a>
      </li>
      <li class='hidden-sm hidden-md hidden-lg'>
        <a href="/games">遊戲</a>
      </li>
      <li>
        <a href="/courses">課程</a>
      </li>
      <li class='hidden-sm hidden-md hidden-lg'>
        <a href="/upgrade">高级会员</a>
      </li>
      <li class='hidden-sm hidden-md hidden-lg'>
        <a href="/ebooks">書架</a>
      </li>
      <li>
        <a href="/signin">登入</a>
      </li>
      <li>
        <a href="/signup">註冊</a>
      </li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
  </div>
</header>



<!-- nav-->

<nav class='navbar navbar-default navbar-static-top hidden-xs' id='main_nav'>
  <div class='row'>
    <div class='col-sm-2 nav_item'>
      <div class='nav_text'>
        <a href="/free">免費</a>
      </div>
    </div>
    <div class='col-sm-2 nav_item'>
      <div class='nav_text'>
        <a href="/courses">課程</a>
      </div>
    </div>
    <div class='col-sm-2 nav_item'>
      <div class='nav_text'>
      <!-- = link_to "練習", practice_path # Practice -->
        <a href="/games">遊戲</a>
      </div>
    </div>
    <div class='col-sm-2 nav_item'>
      <div class='nav_text'>
        <a href="/upgrade">高級會員</a>
      </div>
    </div>
    <div class='col-sm-2 nav_item'>
      <div class='nav_text'>
        <a href="/ebooks">書架</a>
      </div>
    </div>
    <div class='col-sm-2 nav_item'>
      <div class='nav_text'>
        <a href="/blog">Blog</a>
      </div>
    </div>
  </div>
</nav>