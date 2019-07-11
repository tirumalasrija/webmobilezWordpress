 
  <?php 

  /* Template Name: Contact Us
    */
  get_header();
  ?>
 
    <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Contact <span class="t_color3">WebMobileZ</span> </h1>
                    <p class="f_400 w_color f_size_16 l_height26">Your big opportunity may be right where you are now.</p>
                </div>
            </div>
        </section>
  
    <section class="contact_info_area sec_pad bg_color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pr-0">
                        <div class="contact_info_item">
                            <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Office Address</h6>
                            <p class="f_400 f_size_15"> USA: 32985 Hamilton Ct Farmington hills, MI 48334</p>
                        </div>
                        <div class="contact_info_item">
                            <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Contact Info</h6>
                            <p class="f_400 f_size_15"><span class="f_400 t_color3">Phone:</span> <a href="tel:3024437488">(224) 703-3561</a></p>
                            <p class="f_400 f_size_15"><span class="f_400 t_color3">Email:</span> <a href="mailto:hello@webmobilez.com">hello@webmobilez.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="contact_form">
                            <form action="contact_process.php" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group text_box">
                                            <input type="text" id="name" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group text_box">
                                            <input type="text" name="email" id="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text_box">
                                            <input type="text" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text_box">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message . . ."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn_three">Send Message</button>
                            </form>
                            <div id="success">Your message succesfully sent!</div>
                            <div id="error">Opps! There is something wrong. Please try again</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php 
  
  get_footer();
  ?>