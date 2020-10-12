<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>GeoPicker</title>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <!-- Font Awesome JS -->
  <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-a11y="true" crossorigin="anonymous"></script>
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
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Home">
            <a href="index.php">
            <div class="c-menu__item__inner"><i class="fas fa-home"></i>
              <div class="c-menu-item__title"><span>Home</span></div>
            </div>
            </a>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Account">
          <?php
          if (session_status() == PHP_SESSION_ACTIVE) {
              echo header('location:https://geopicker.herokuapp.com/account-login.php');
          } else {
              echo header('location:https://geopicker.herokuapp.com/account.php');
          }
          ?>
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
<script src="js/nav.js"></script>
</body>

<main class="l-main">
  <section class="cards">
    <article class="card card--1">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category">Netherlands</span>
        <h3 class="card__title"></h3>
        <div class="info-spacing">
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
        </div>
      </div>
    </article>
  
    <article class="card card--2">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>

  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category">Turkey</span>
        <h3 class="card__title"></h3>
        <div class="info-spacing">
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
        </div>
      </div>
    </article>

    <article class="card card--3">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>

  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category">Germany</span>
        <h3 class="card__title"></h3>
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
      </div>
    </article>

      <article class="card card--4">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>
  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category">Spain</span>
        <h3 class="card__title"></h3>
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
      </div>
    </article>

    <article class="card card--5">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>
  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category">Greece</span>
        <h3 class="card__title"></h3>
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
      </div>
    </article>
  </section>

  <section class="region">
    <article class="card card--6">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>
  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category"> Region: NORTH-AMERICA</span>
        <h3 class="card__title"></h3>
        <i class="fas fa-users"></i><span> 1,231</span>
        <i class="fas fa-heart"></i><span> 1,000</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
      </div>
    </article>

    <article class="card card--7">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>
  
  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category"> Region: EUROPE</span>
        <h3 class="card__title"></h3>
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
      </div>
    </article>

    <article class="card card--8">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>
  
  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category"> Region: ASIA</span>
        <h3 class="card__title"></h3>
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
      </div>
    </article>

    <article class="card card--9">
      <div class="card__info-hover">
        <svg class="card__like" viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
        </svg>
  
  
      </div>
      <div class="card__img"></div>
      <a href="#" class="card_link">
        <div class="card__img--hover"></div>
      </a>
      <div class="card__info">
        <span class="card__category"> Region: SOUTH-AMERICA</span>
        <h3 class="card__title"></h3>
        <i class="fas fa-users"></i><span> 3,321</span>
        <i class="fas fa-heart"></i><span> 2,812</span>
        <i class="fa fa-star" aria-hidden="true"></i><span> 2,812</span>
      </div>
    </article>
  </section>
</main>
</html>
