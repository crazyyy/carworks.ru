<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="//www.google-analytics.com/" rel="dns-prefetch">
  <link href="//fonts.googleapis.com" rel="dns-prefetch">
  <link href="//cdnjs.cloudflare.com" rel="dns-prefetch">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&amp;subset=cyrillic" rel="stylesheet">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container-fluid">
        <div class="row">
          <nav class="header-nav col-xl-12" role="navigation">
            <?php wpeHeadNav(); ?>
          </nav><!-- /nav -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

    <div class="container">
      <div class="row">

        <div class="header-logo col-xl-12 col-lg-12">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            <a href="<?php echo home_url(); ?>">
          <?php } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->

        <div class="header-buttons col-xl-3 col-lg-3 offset-xl-5 offset-lg-5">
          <a href="#" class="header-buttons--order">Online заявка</a>
        </div>
        <!-- /.header-buttons col-xl-4 offset-xl-2 col-lg-4 offset-lg-2 -->

        <div class="header-contacts col-xl-4 col-lg-4">
          <a href="tel:84993911844">8 (499) 391-18-44</a>
          <a href="tel:89296386854">8 (929) 638-68-54</a>
          <p>Время работы: ПН-ВС 10.00 до 21.00</p>
          <p>Работаем по предварительной записи</p>
          <p>г. Москва, ул. Болотниковская 47 соор. 1</p>
        </div>
        <!-- /.header-contacts col-xl-4 offset-xl-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->

  </header><!-- /header -->

  <section role="main">
