<!DOCTYPE html>
<html lang="en">

<?php
$invertHeaderColor = get_field('invert_header_color');
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Programmer's Paradise</title>
  <?php wp_head() ?>
</head>

<body>
  <header id="pp-global-header" class="pp-global-header <?php echo $invertHeaderColor ? 'header-inverted' : '' ?>">
    <a href="<?php echo get_home_url(); ?>" class="pp-global-header-logo-container">
      <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
        <g id="nav-logo" class="<?php echo $invertHeaderColor ? 'header-inverted' : '' ?>" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000" stroke="none">
          <path d="M1822 5050 c-265 -56 -486 -367 -547 -770 -18 -112 -19 -337 -4 -446
              80 -577 471 -929 834 -750 161 79 292 248 374 479 135 383 94 860 -101 1184
              -33 55 -143 183 -157 183 -5 0 -42 -114 -85 -253 l-76 -254 23 -54 c74 -168
              66 -390 -20 -536 -34 -59 -104 -118 -158 -133 -125 -35 -261 89 -305 280 -40
              171 3 379 101 485 49 53 83 73 141 83 l41 7 72 240 c53 178 69 242 60 247 -21
              13 -147 18 -193 8z" />
          <path d="M953 3251 c-207 -77 -379 -328 -530 -776 -160 -473 -290 -1152 -347
              -1805 -16 -178 -36 -500 -36 -571 l0 -39 2196 2 2195 3 39 41 c21 23 44 60 50
              82 36 135 558 2538 552 2543 -4 3 -64 36 -135 73 -88 46 -129 63 -132 54 -2
              -7 -117 -530 -255 -1163 -138 -632 -253 -1158 -256 -1167 -5 -17 -33 -18 -400
              -18 l-394 0 0 53 c-1 123 -59 288 -133 372 -19 22 -59 54 -88 70 l-54 30 -647
              3 c-357 1 -648 4 -648 7 0 2 -32 160 -71 352 -135 665 -253 1171 -325 1391
              -73 223 -183 381 -310 443 -85 42 -191 50 -271 20z" />
        </g>
      </svg>
      <h1>Programmer's Paradise</h1>
    </a>

    <div class="desktop-nav-container">
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container' => 'nav'
      ))
      ?>
    </div>

    <div id="mobile-drawer" class="mobile-drawer">
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container' => 'nav'
      ))
      ?>
      <button id="mobile-drawer-close-btn">X</button>
    </div>

    <button id="pp-mobile-menu-btn" class="pp-mobile-menu-btn">
      <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30.000000pt" height="30.000000pt" viewBox="0 0 30.000000 30.000000" preserveAspectRatio="xMidYMid meet">
        <g class="<?php echo $invertHeaderColor ? 'header-inverted' : '' ?>" transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)" fill="#000" stroke="none">
          <path d="M20 220 c0 -6 50 -10 130 -10 80 0 130 4 130 10 0 6 -50 10 -130 10 -80 0 -130 -4 -130 -10z" />
          <path d="M20 150 c0 -6 50 -10 130 -10 80 0 130 4 130 10 0 6 -50 10 -130 10 -80 0 -130 -4 -130 -10z" />
          <path d="M20 80 c0 -6 50 -10 130 -10 80 0 130 4 130 10 0 6 -50 10 -130 10 -80 0 -130 -4 -130 -10z" />
        </g>
      </svg>
    </button>
  </header>