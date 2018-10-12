<?php
/**
* Template Name: Frontpage
*/
get_header();
?>


<?php
$args = array( 'post_type'=>'zee_slider', 'orderby' => 'menu_order','order' => 'ASC' );
$sliders = get_posts( $args );
$total_sliders = count($sliders);
?>
<section id="main-slider" style="margin: 0; padding: 0;">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="15000">
    <div class="carousel-inner">
      <?php foreach ($sliders as $key => $slider) { 

        $full_img           =   wp_get_attachment_image_src( get_post_thumbnail_id( $slider->ID ), 'full');

        $slider_position    =   get_post_meta($slider->ID, 'slider_position', true );

        $boxed              =   (get_post_meta($slider->ID, 'slider_boxed', true )=='yes') ? 'boxed' : '';

        $has_button         =   (get_post_meta($slider->ID, 'slider_button_text', true )=='') ? false : true;

        $button             =   get_post_meta($slider->ID, 'slider_button_text', true );

        $button_url         =   get_post_meta($slider->ID, 'slider_button_url', true );

        $video_url          =   get_post_meta($slider->ID, 'slider_video_link', true );

        $video_type         =   get_post_meta($slider->ID, 'slider_video_type', true );

        $bg_image_url       =   get_post_meta($slider->ID, 'slider_background_image', true );

        $background_image   =   'background-image: url('.wp_get_attachment_url($bg_image_url).')';

        $columns            =   false;



        if( !empty($image_url) or !empty($video_url) ){

          $columns        =   true;
        }


        if( $video_type=='youtube' ) {

          $embed_code = '<iframe width="640" height="480" src="//www.youtube.com/embed/' . get_video_ID( $video_url ) . '?rel=0" frameborder="0" allowfullscreen></iframe>';

        } elseif( $video_type=='vimeo' ) {
          $embed_code = '<iframe src="//player.vimeo.com/video/' . get_video_ID( $video_url ) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>';
        }

        if( $full_img ){

          $embed_code     = '<img src="' . $full_img[0] . '" alt="">';
          $columns        =   true;
        }


        ?>
        <div class="carousel-item <?php echo ($key==0) ? 'active' : '' ?>" style="<?php echo ( $bg_image_url ) ? $background_image : '' ?>">
          <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
              <div class="col-12 text-center">
                
                <h2 class="<?php echo $boxed ?> animation animated-item-1">
                  <?php echo $slider->post_title ?>
                </h2>

                <p class="<?php echo $boxed ?> animation animated-item-2">
                  <?php echo do_shortcode( $slider->post_content ) ?>
                </p>
                
                <?php if( $has_button ){ ?>
                  <br>
                  <a class="btn btn-md animation animated-item-3" href="<?php echo $button_url ?>"><?php echo $button ?></a>
                <?php } ?>
                
              </div>

              <?php if($columns){ ?>

                <div class="col-sm-6 hidden-xs animation animated-item-4">
                  <div class="centered" style="margin-top: 129px;">
                    <div class="embed-container">
                      <?php echo $embed_code; ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          
        </div>
      <?php } // endforeach ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<?php the_post(); ?>
<?php the_content(); ?>

<section class="our-project">
  <div class="container">
    <div class="row">
      <h2 class="projects-title">Condomínios parceiros</h2>
    </div>
  </div>
  <!-- .container -->
  <br>
  <div class="container"> 
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm-4">
                <div class="project-columns">
                  <img class="d-block img-fluid" src="<?php bloginfo('template_url') ?>/assets/images/img/image1.png" alt="First slide">
                  <div class="middle">
                    <div class="text">
                      <h2>Nome do condomínio</h2>
                      <span>lorem texto</span>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-sm-4">
               <div class="project-columns">
                <img class="d-block img-fluid" src="<?php bloginfo('template_url') ?>/assets/images/img/image2.png">
                <div class="middle">
                  <div class="text">
                    <h2>Nome do condomínio</h2>
                    <span>lorem texto</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
             <div class="project-columns">
              <img class="d-block img-fluid" src="<?php bloginfo('template_url') ?>/assets/images/img/image3.jpg">
              <div class="middle">
                <div class="text">
                  <h2>Nome do condomínio</h2>
                  <span>lorem texto</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-4">
            <div class="project-columns">
             <img class="d-block img-fluid" src="<?php bloginfo('template_url') ?>/assets/images/img/image1.png" alt="First slide">
             <div class="middle">
              <div class="text">
                <h2>Nome do condomínio</h2>
                <span>lorem texto</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
         <div class="project-columns">
          <img class="d-block img-fluid" src="<?php bloginfo('template_url') ?>/assets/images/img/image2.png">
          <div class="middle">
            <div class="text">
              <h2>Nome do condomínio</h2>
              <span>lorem texto</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="project-columns">
         <img class="d-block img-fluid" src="<?php bloginfo('template_url') ?>/assets/images/img/image3.jpg">
         <div class="middle">
          <div class="text">
            <h2>Nome do condomínio</h2>
            <span>lorem texto</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
<div class="btn-carousel-project">
  <a class="carousel-control-prev prev-carousel" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon prev-carousel-icon project-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next next-carousel" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon next-carousel-icon project-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
</section>

<section class="receive-call">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="contact-receive text-right">
          <h2 class="title">Fazer um orçamento</h2>
          <p class="">Se você precisar nos falar sobre uma consulta geral, preencha o formulário abaixo e entraremos em contato dentro do mesmo dia útil.</p>
        </div>
      </div>

      <div class="col-lg-8 ">
        <div class="form-receive text-left">
         <form action="" class="">
          <div class="top-inputs d-flex align-items-center">

            <div class="col-lg-6">
              <div class="seletc-option-receive">
                <label for="" class="label-select">Qual serviço você precisa? *</label>
                <select class="form-control form-control-lg">
                  <option>Administração de condomínios</option>
                  <option>Conservação e limpeza</option>
                  <option>Síndico profissional</option>
                  <option>Assessoria jurídica</option>
                  <option>Assessoria administrativa</option>
                  <option>Financeiro e contábil</option>
                </select>

              </div>
            </div>

            <div class="col-lg-6">
             <div class="email-receive">
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
          </div>

        </div>

        <div class="bottom-inputs d-flex align-items-center">
          <div class="col-lg-6">
            <div class="phone-receive">
             <input type="tel" class="form-control" placeholder="Type your number">
           </div>
         </div>

         <div class="col-lg-3">
          <div class="btn-receive">
            <button type="submit" class="btn btn-primary">Envie agora</button>
          </div>
        </div>
      </div>

    </form>
  </div>
</div>
</div>
</div>
</section>

<section class="partners-area">
 <div id="ThumbnailCarousel" class="carousel slide col-xs-12" data-ride="carousel">
  <div class="container">
    <div class="carousel-inner text-center">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-3 col-sm-6"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo1.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
          </div>
          <div class="col-md-3 col-sm-6"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo2.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
          </div>
          <div class="col-md-3"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo3.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
          </div>
          <div class="col-md-3"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo4.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
          </div>

        </div>
      </div>
      <div class="carousel-item">
       <div class="row">
        <div class="col-md-3 col-sm-6"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo4.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-md-3 col-sm-6"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo3.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-md-3"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo2.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-md-3"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo1.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>

      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-md-3 col-sm-6"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo1.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-md-3 col-sm-6"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo2.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-md-3"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo3.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-md-3"><a href="#x" class="thumbnail"><img src="<?php bloginfo('template_url') ?>/assets/images/img/logo4.jpg" alt="Image" class="img-fluid img-thumbnail"></a>
        </div>

      </div>
    </div>
  </div>
</div>
<a class="carousel-control-prev partners-prev" href="#ThumbnailCarousel" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon  partners-prev-icon aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next partners-next" href="#ThumbnailCarousel" role="button" data-slide="next">
  <span class="carousel-control-next-icon  partners-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

</section>

<?php
get_footer();