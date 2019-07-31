<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="noindex, nofollow">
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?> </title>
    <meta name="description" content="サイトの説明文">
    <link rel="shortcut icon" href=favicon.ico>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143930112-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143930112-1');
    </script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="topLogoCont">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="BONYU">
      </div>

      <ul class="topMenu">
        <li>
          <p class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/topMenuClose.jpg" alt="MENU">
          </p>
          <ul class="inner">
            <!-- <li class="content1-1">
              <a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/topMenuOpne.jpg" alt="MENU">
            </li> -->
            <li class="content1-2">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menuTitle1.jpg" alt=" NEWS">

            </li>
            <li class="content1-2">
              <a href="https://bonyu.shop/about" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menuTitle2.jpg" alt="わたしたちのBONYUについて">
              </a>
            </li>
            <li class="content1-2">
              <a href="https://docs.google.com/forms/d/1kNldFpdYBYe8D2EdHf4L2Kp-76mokTWPXLS1U6wkiUI/viewform?edit_requested=true">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menuTitle3-2.jpg" alt="母乳アンケート">
              </a>
            </li>
            <li class="content1-2">
              <a href="/bonyu-check/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menuTitle5.jpg" alt="BONYU CHECK">
              </a>
            </li>
            <li class="content1-2">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menuTitle6-2.jpg" alt="「おっぱいばなしコラム」">

            </li>
            <li class="content1-2">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menuTitle7-2.jpg" alt="おっぱいQ&A">

            </li>
            <li class="content1-2">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menuTitle8.jpg" alt="おっぱい便利帳">

            </li>
          </ul>
        </li>
      </ul>
    </header>
