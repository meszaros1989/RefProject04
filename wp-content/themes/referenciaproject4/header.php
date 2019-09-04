<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <title>LUMINA WEBÁRUHÁZ</title>
    <?php wp_head(); ?>
  </head>


  <body>

    <div class="wrapper">


      <div class="topbar">

        <div class="topbar-box-1">
          <span>Ügyfélszolgálat: +36-60-646-6886 | info@lumina.hu</span>
        </div>

        <div class="topbar-box-2">
          <div class="topbar-box-2-1">
            <img src="wp-content/uploads/2019/09/truck2.png" alt="" class="topbar-box-2-img">
            <span>INGYENES KISZÁLLÍTÁS 20.000 Ft felett!  Részletek</span>
          </div>
        </div>

        <div class="topbar-box-3">
          <div class="topbar-box-3-container">
            <div class="topbar-box-3-1">
              <img src="wp-content/uploads/2019/09/lock2.png" alt="" class="topbar-box-3-img">
              <span><strong>BELÉPÉS</strong></span>
            </div>
            <div class="topbar-box-3-2">
              <img src="wp-content/uploads/2019/09/login.png" alt="" class="topbar-box-3-img">
              <span><strong>REGISZTRÁCIÓ</strong></span>
            </div>
          </div>
        </div>

      </div>

      <div class="header">
        <div class="header-box-1">
          <img src="http://localhost/ref_project_4/wp-content/uploads/2019/09/logo.png" alt="" class="logo">
        </div>
        <div class="header-box-2">
          <span>Lámpabolt és <br> lámpa webáruház</span>
        </div>
        <div class="header-box-4">
          <img src="http://localhost/ref_project_4/wp-content/uploads/2019/09/shopping-bag2.png" alt="" class="cart-icon">
        </div>
        <div class="header-box-5">
          <span class="header-box-5-span-1">Kosár tartalma</span>
          <span class="header-box-5-span-2">0 termék a kosárban  >></span>
        </div>
      </div>

      <div class="navigation">
          <span>Termékeink</span>
      </div>


      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
