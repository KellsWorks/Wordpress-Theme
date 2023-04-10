<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">

</head>
<body <?php body_class(); ?>>

<!-- <header id="header" class="site-header">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <nav class="site-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
</header> -->
<header class="bg-black text-white">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img class="w-auto h-8 object-cover mr-2" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/logo_v2.png"/>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900">AI Mentor</a>
      <a class="mr-5 hover:text-gray-900">AI Analytics</a>
      <a class="mr-5 hover:text-gray-900">TAI Skills</a>
      <a class="mr-5 hover:text-gray-900">AI Studio</a>
      <a class="mr-5 hover:text-gray-900">About</a>
    </nav>
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Contact Us
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>
