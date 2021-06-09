<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/bootstrap.css">    
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/main.css">    
  <!-- <link rel="icon" href="./favicon.ico"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&display=swap" rel="stylesheet"> 
    <title>Landify</title>
  </head>
  <body>
<header>
 
<nav class="navbar align-items-center navbar-expand-md bg-main" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
        <path d="M0.587097 28H10.274C14.8674 28 18.591 24.3508 18.591 19.8493H8.90412C4.31076 19.8493 0.587097 23.4985 0.587097 28Z" fill="#F22BB2"/>
        <path d="M1.02039 8.15069V20.137C5.61375 20.137 9.33741 16.4878 9.33741 11.9863V0C4.74405 0 1.02039 3.64919 1.02039 8.15069Z" fill="#8C30F5"/>
        <path d="M27.9844 0H18.2975C13.7041 0 9.98047 3.64919 9.98047 8.15068H19.6674C24.2607 8.15068 27.9844 4.5015 27.9844 0Z" fill="#FE9A22"/>
        <path d="M27.9844 19.3698V7.38354C23.391 7.38354 19.6674 11.0327 19.6674 15.5342V27.5205C24.2607 27.5205 27.9844 23.8713 27.9844 19.3698Z" fill="#2EC5CE"/>
        </g>
        <defs>
        <clipPath id="clip0">
        <rect width="28.5714" height="28" fill="white"/>
        </clipPath>
        </defs>
    </svg>
    <!-- logo part -->
    <span class="text-main logo-text">
        Landify
    </span>
  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#drop_menu" aria-controls="drop_menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse pt-1 pt-md-0" id="drop_menu">


        <?php wp_nav_menu( array(
          'theme_location'  => '',
          'menu'            => '',
          'container'       => 'ul',
          'container_class' => 'navbar-nav nav-color me-md-auto mb-2 mb-md-0',
          'container_id'    => '',
          'menu_class'      => 'navbar-nav nav-color me-md-auto mb-2 mb-md-0',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) ); ?>
       
        <form class="d-md-inline d-none">
          <button class="btn btn-outline-main">Login</button>
          <button class="btn btn-outline-main">Sign up</button>
        </form>
      </div>
    </div>
  </nav>
</header>