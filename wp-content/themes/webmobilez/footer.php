 <div class="new_footer_top">
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
    
        <section class="seo_call_to_action_area sec_pad">
            <div class="container">
                <div class="seo_call_action_text">
                    <h2>Grow your business the smart way with digital World</h2>
                 
                </div>
            </div>
        </section>
 <footer class="payment_footer_area payment_footer_area_two">
            <div class="footer_top_six">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-4 col-sm-6">
                            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            <?php endif; ?>
                        </div>
						<div class="col-lg-4 col-sm-6 text-center">
                            <div class="f_widget company_widget">
                                <a href="<?php echo site_url(''); ?>" class="f-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo"></a>
                                <p class="mt_40">Copyright © 2017 <a href="<?php echo site_url(''); ?>"> WebmobileZ</a>  Technologies  All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget about-widget text-right">
                                 <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

                            <?php dynamic_sidebar( 'sidebar-3' ); ?>
                            <?php endif; ?>
                               
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                 <h2>Let's Build Something Great Together</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
				<div class="calendly-inline-widget" data-url="https://calendly.com/srija/webmobilez-team-meeting" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->
            <?php //echo do_shortcode('[contact-form-7 id="548" title="Get Start"]');
				?>
            </div>
				
			    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>	
				
        </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/propper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/wow/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/isotope/isotope-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/stellar/jquery.stellar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
 <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.11/dist/jquery-input-mask-phone-number.js"></script>
<script>
	  $(document).ready(function () {
                $('.phone_us').usPhoneFormat({
                    format: '(xxx) xxx-xxxx',
                });
	  });
	  $(function () {
      $('.alpha').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
 
 $(".wpcf7-submit").click(function(){
  setTimeout(function(){
  $('.bd-example-modal-l').modal('hide')
}, 4000);
});
</script>
<?php wp_footer(); ?>

</body>
</html>
