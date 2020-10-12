<?php
require 'google-auth.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>GeoPicker</title>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Google maps scripts -->
    <!-- Font Awesome JS -->
    <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-a11y="true" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styleaccount.css">
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body class="sidebar-is-reduced">
    <header class="l-header">
      <div class="l-header__inner clearfix">
        <div class="c-header-icon js-hamburger">
          <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
        </div>
      </div>
    </header>
    <div class="l-sidebar">
      <div class="logo">
        <div class="logo__txt">GEOPICKER</div>
      </div>
      <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
          <ul class="u-list">
            <li class="c-menu__item" data-toggle="tooltip" title="Home">
              <a href="index.php">
              <div class="c-menu__item__inner"><i class="fas fa-home"></i>
                <div class="c-menu-item__title"><span>Home</span></div>
              </div>
              </a>
            </li>
            <li class="c-menu__item has-submenu is-active" data-toggle="tooltip" title="Account">
              <a href="account-login.php">
              <div class="c-menu__item__inner"><i class="fas fa-user"></i>
                <div class="c-menu-item__title"><span>Account</span></div>
              </div>
              </a>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="World">
              <a href="world.php">
              <div class="c-menu__item__inner"><i class="fas fa-globe"></i>
                <div class="c-menu-item__title"><span>World</span></div>
              </div>
              </a>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Continents">
              <div class="c-menu__item__inner"><i class="fas fa-map-marker-alt"></i>
                <div class="c-menu-item__title"><span>Continents</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Famous places">
              <div class="c-menu__item__inner"><i class="fas fa-archway"></i>
                <div class="c-menu-item__title"><span>Famous places</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Contact">
              <div class="c-menu__item__inner"><i class="fas fa-file"></i>
                <div class="c-menu-item__title"><span>Contact</span></div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <button type="button" class="btn btn-danger" onclick=" relocate_home()">logout</button>
    <script src="js/nav.js"></script>
    <script src="js/.js"></script>
  </body>

</html>
