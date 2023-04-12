<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body <?php body_class(); ?> class="">

<style>
  @import url('https://fonts.googleapis.com/css?family=Karla');
  *{
    font-family: 'Karla';
  }
</style>

<!-- <header id="header" class="site-header">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <nav class="site-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
</header> -->
<header class="bg-gradient-to-t from-black to-gray-900 border-b">
  <div class="mx-auto max-w-7xl justify-center flex flex-wrap p-5 flex-col md:flex-row items-center">
    
    <a class="flex title-font font-medium items-center text-gray-100 mb-4 md:mb-0">
      <img class="w-auto h-8 object-cover mr-2" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/logo_v2.png"/>
    </a>

    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="#" class="mr-5 text-gray-300 hover:text-gray-100 transition duration-150">AI Mentor</a>
      <a href="#" class="mr-5 text-gray-300 hover:text-gray-100 transition duration-150">AI Analytics</a>
      <a href="#" class="mr-5 text-gray-300 hover:text-gray-100 transition duration-150">TAI Skills</a>
      <a href="#" class="mr-5 text-gray-300 hover:text-gray-100 transition duration-150">AI Studio</a>
      <a href="#" class="mr-5 text-gray-300 hover:text-gray-100 transition duration-150">About</a>
    </nav>

    <div class="flex flex-wrap space-x-5">
      <a href="https://github.com/ibleducation">
        <img class="w-auto h-8 object-cover" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/github-1.png"/>
      </a>
      <a href="https://ibleducation.com/aws">
        <img class="w-auto h-8 object-cover" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/aws-logo-c.png"/>
      </a>
      <a href="#" class="inline-flex items-center border border-gray-300 text-gray-300 hover:border-gray-100 hover:text-gray-100 transition duration-150 rounded px-4 py-2">
        Contact Us
      </a>
    </div>
  </div>
</header>
