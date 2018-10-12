<?php if(!is_page()) { ?>
</div><!--/#primary-->
</div><!--/.col-lg-12-->
</div><!--/.row-->
</div><!--/.container.-->
</section><!--/#main-->
<?php } ?>

<div class="content-footer">

  <div class="container">

    <div class="row">

      <div class="flat-contact-footer">
        <ul class="list-info">
          <li>
            <i class="icon icon-envelope text-center"></i>
            <span>support@themesflat.com</span>
          </li>

          <li>
            <i class="icon icon-phone text-center"></i>
            <span>+61 3 8376 6284</span>
          </li>

          <li>
            <i class="icon icon-map-marker text-center"></i>
            <span>Rua Contria, 1157 - Gutierrez - 30.431-028 - BH/MG</span>
          </li>
        </ul>
      </div>
  </div>


  <section class="bg-transparent bottom widgets-bottom">
    <div class="container">
      <div class="row">      
          <?php dynamic_sidebar('bottom'); ?>      
      </div>
    </div>
  </section>

  <footer class="footer bg-transparent">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-left">
         <div class="copyright-align">
            <?php show_footer();?>
          
            </div>
         </div>

        </div>
      </div>
    </div>
  </footer><!--/#footer-->

  <?php if(zee_option('zee_theme_layout')=='boxed'){ ?>
  </div><!--/#boxed-->
<?php } ?>
</div>
<?php google_analytics();?>

<?php wp_footer(); ?>



</body>
</html>