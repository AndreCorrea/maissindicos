<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/respond.min.js"></script>
<![endif]-->       
<?php zee_favicon();?>
<?php wp_head(); ?>
</head><!--/head-->

<body <?php body_class() ?> class="bg-default">
  <?php if(zee_option('zee_theme_layout')=='boxed'){ ?>
    <div id="boxed">
    <?php } ?>


    
    <!-- ******************* The Navbar Area ******************* -->

    <!-- Fixed top bar -->
    <div class="fixed-top-bar">
      <div class="container"> 
        <div class="row d-flex align-items-center">  <!-- ALIGN VERTICAL ELEMENTS -->
          <div class=" col-sm-12  col-md-6 text-left">
            <div class="top-bar-contact">
             <ul class="custom-info">
              <li class="number"><i class="icon-phone"></i>Ligue para nós: +61 3 8376 6284</li>
              <li><i class="icon-envelope"></i>Email: support24-7@gmail.com</li>
            </ul>
          </div>           
        </div>

        <div class="col-sm-12 col-md-6 text-right">
          <div class="top-bar-budget">
           <ul>
            <li class=""><i class="icon-question-sign"></i>Tem alguma pergunta?</li>
            <li><a href="">Obter um compromisso</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>

<header>
 <div class="navmenu-top">
  <div id="wrapper-navbar" class="wrapper-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-dark">


      <div class="container" >

        <?php logo();?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),

          )
        ); ?>

        <?php if ( 'container' == $container ) : ?>
        </div><!-- .container -->
      <?php endif; ?>

    </nav><!-- .site-navigation -->
  </div><!-- #wrapper-navbar end -->
</div>
</header>

<?php get_template_part( 'sub', 'title' ); ?>

<?php if( ! is_page() ) { ?>
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="primary" class="content-area">
          <?php } ?>

