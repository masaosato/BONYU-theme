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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bonyu-check.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- additinal font-->
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
    <header class="header headerChild">
      <nav class="global-nav">
        <ul class="global-nav__list">
          <li class="global-nav__item"><a href="https://bonyu.shop/about" target="_blank">BONYU.Labとは</a></li>
          <li class="global-nav__item"><a href="/faq" target="_blank">おっぱいQ&A</a></li>
          <li class="global-nav__item"><a href="#">母乳コラム</a>
            <ul class="menuListsUnderLists">
              <li>
                <a href="#">はじめて授乳した日</a>
              </li>
              <li>
                <a href="#">おっぱいじゃなくても</a>
              </li>
            </ul>
          </li>
          <li class="global-nav__item"><a href="#">BONYUからのメッセージ</a></li>
          <li class="global-nav__item"><a href="https://bonyu.shop/about" target="_blank">BONYU.Labで出来ること</a>
            <ul class="menuListsUnderLists">
              <li>
                <a href="#">10年後の我が子へ</a>
              </li>
              <li>
                <a href="#">母乳のナゾとき</a>
              </li>
              <li>
                <a href="#">おっぱい指数</a>
              </li>
              <li>
                <a href="https://bonyu.shop/items/5d2ae44b66d86c77b7e06b29" target="_blank">母乳CHECK</a>
              </li>
            </ul>
          </li>
          <li class="global-nav__item"><a href="#">おっぱいのうわさ</a></li>
          <li class="global-nav__item"><a href="https://forms.gle/bz9rfZjBPpTbf3m87" target="_blank">BONYU.CHECK問診票<br>（購入済みのお客様）</a></li>
        </ul>
      </nav>
      <div class="topLogoLeft">
        <a href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="BONYU">
        </a>
      </div>
      <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>
        <span class="hamburger__line hamburger__line--4"></span>
      </div>
      <div class="black-bg" id="js-black-bg"></div>
    </header>
