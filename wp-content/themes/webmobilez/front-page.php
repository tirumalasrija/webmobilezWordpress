<?php get_header(); ?>
  <section class="company_banner_area">
            <div class="parallax-effect" style="background: url(<?php echo get_template_directory_uri(); ?>/img/new/company.jpg);">
                <video class="visible-desktop" poster="<?php echo get_template_directory_uri(); ?>/assets/web.png" autoplay loop="loop" muted>
                     <source type="video/webm" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_field("video_url_name"); ?>" type="video/webm"></source>
                     <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_field("video_url_name"); ?>"></source>
                 </video>
            </div>
            <div class="container">
                <div class="company_banner_content">
                    <h2><?php echo get_field("video_content"); ?></h2>
                    <button class="about_btn btn_hover" data-target=".bd-example-modal-lg" data-toggle="modal">Start Here</button>
                </div>
            </div>
        </section>
    
        <section class="features_area sec_pad">
            <div class="container">
                <div class="row feature_info">
                    <div class="col-lg-7">
                        <div class="feature_img f_img_one">
                            <img class="wow fadeInRight" data-wow-delay="0.1s" src="<?php echo get_template_directory_uri(); ?>/images/company.jpg" alt="">                   
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="f_content">
                           
                            <h2 class="f_600 f_size_30"><?php echo get_field("feature_title"); ?></h2>
                            <p class="f_400">
                             <?php echo get_field("feature_content"); ?> </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    
        <section class="app_featured_area">
            <div class="container">
                <div class="row flex-row-reverse app_feature_info">
                    <div class="col-lg-6">
                        <div class="app_fetured_item">
                            <div class="app_item item_one" data-parallax='{"x": 0, "y": 50}'>
                                <i class="ti-face-smile f_size_40 w_color"></i>
                                <h6 class="f_p f_400 f_size_16 w_color l_height45">Consultation</h6>
                            </div>
                            <div class="app_item item_two" data-parallax='{"x": 0, "y": -30}'>
                                <i class="ti-receipt f_size_40 w_color"></i>
                                <h6 class="f_p f_400 f_size_16 w_color l_height45">Design</h6>
                            </div>
                            <div class="app_item item_three" data-parallax='{"x": 50, "y": 10}'>
                                <i class="ti-face-smile f_size_40 w_color"></i>
                                <h6 class="f_p f_400 f_size_16 w_color l_height45">Development </h6>
                            </div>
                            <div class="app_item item_four" data-parallax='{"x": -10, "y": 30}'>
                                <i class="ti-tablet f_size_40 w_color"></i>
                                <h6 class="f_p f_400 f_size_16 w_color l_height45">Testing</h6>
                            </div>
                            <div class="app_item item_five" data-parallax='{"x": -30, "y": 60}'>
                                <i class="ti-tablet f_size_40 w_color"></i>
                                <h6 class="f_p f_400 f_size_16 w_color l_height45">Cloud Deploy</h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app_featured_content">
                            <h2 class="f_p f_size_30 f_700 t_color3 l_height45 pr_70 mb-30"><?php echo get_field("feature2_title"); ?></h2>
                            <p class="f_400"><?php echo get_field("feature2_content"); ?></b>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="service_promo_area service_promo_area_two bg_color">
            <div class="shape_top">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="shape shape_one">
                    <defs>
                        <linearGradient>
                            <stop offset="0%" stop-color="rgb(76,1,124)" stop-opacity="0.95" />
                            <stop offset="100%" stop-color="rgb(103,84,226)" stop-opacity="0.95" />
                        </linearGradient>
                    </defs>
                    <path d="M121.891,264.576 L818.042,11.198 C914.160,-23.786 1020.439,25.773 1055.424,121.890 L1308.802,818.041 C1343.786,914.159 1294.227,1020.439 1198.109,1055.422 L501.958,1308.801 C405.840,1343.785 299.560,1294.226 264.576,1198.108 L11.198,501.957 C-23.786,405.839 25.773,299.560 121.891,264.576 Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="shape shape_two">
                    <defs>
                        <linearGradient id="PSgrad_0">
                            <stop offset="0%" stop-color="rgb(76,1,124)" stop-opacity="0.95" />
                            <stop offset="100%" stop-color="rgb(103,84,226)" stop-opacity="0.95" />
                        </linearGradient>

                    </defs>
                    <path fill="url(#PSgrad_0)" d="M121.891,264.575 L818.042,11.198 C914.160,-23.786 1020.439,25.772 1055.424,121.890 L1308.802,818.040 C1343.786,914.159 1294.227,1020.439 1198.109,1055.423 L501.958,1308.801 C405.840,1343.785 299.560,1294.226 264.576,1198.107 L11.198,501.957 C-23.786,405.839 25.773,299.560 121.891,264.575 Z" />
                </svg>
            </div>
            <div class="s_service_section">
                <div class="container">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color text-center wow fadeInUp" data-wow-delay="0.3s"><?php echo get_field("services_title"); ?></h2>
                    <div class="row s_service_info mt_70">
                        <div class="col-lg-4 col-sm-6">
                            <div class="s_service_item wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="solid_overlay"></div>
                                <div class="icon icon_1">
                                    <i class="ti-user"></i>
                                </div>
                                <h5 class="f_p f_size_20 f_600 t_color">Web Development</h5>
                                    <ul class="list-unstyled f_list">
                                 <li>UX and UI Design</li>
                                 <li>Responsive Development</li>
                                 <li>CMS Development</li>
                                 <li>eCommerece Solutions</li>
                             </ul>
                                <a href="webdevelopment.html" class="learn_btn_two">Learn More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="s_service_item wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="solid_overlay"></div>
                                <div class="icon icon_2">
                                    <i class="ti-headphone-alt"></i>
                                </div>
                                <h5 class="f_p f_size_20 f_600 t_color">Mobile Development</h5>
                                <ul class="list-unstyled f_list">
                                 <li>Prototypes/Mockups</li>
                                 <li>Android Devlopment</li>
                                 <li>IOS Development</li>
                                 <li>React Native Devlopment</li>
                             </ul>
                                <a href="mobiledevelopment.html" class="learn_btn_two">Learn More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="s_service_item wow fadeInLeft" data-wow-delay="0.7s">
                                <div class="solid_overlay"></div>
                                <div class="icon icon_3">
                                    <i class="ti-paint-bucket"></i>
                                </div>
                                <h5 class="f_p f_size_20 f_600 t_color">Digital Marketing</h5>
                                 <ul class="list-unstyled f_list">
                                 <li>Digital Marketing</li>
                                 <li>SEO</li>
                                 <li>SMO</li>
                                 <li>Conetent Marketing</li>
                             </ul>
                                <a href="digitalmarketing.html" class="learn_btn_two">Learn More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--  <section class="saas_features_area_three bg_color sec_pad">
            <div class="container-fluid">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color">Our Work Proccess</h2>
                </div>
                <div class="row mb_30 new_service">
                    <div class="col-lg-2">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="number">1</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon1.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Consultation</h4>
                            </div>
                        </div>
                   
                    </div>
                    <div class="col-lg-2">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.5s">
                            
                            <div class="number">2</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon2.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Mock up and Designs</h4>
                            
                            </div>
                       
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                         
                            <div class="number">3</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon3.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Development</h4>
                              
                            </div>
                        
                        </div>
                    </div>
                        <div class="col-lg-2">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                            
                            <div class="number">4</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon3.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Testing</h4>
                              
                            </div>
                     
                        </div>
                    </div>
                     <div class="col-lg-2">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                            
                            <div class="number">5</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="img/home-10/icon3.png" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Deploy</h4>
                              
                            </div>
                     
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->
 
       
        <section class="partner_logo_area_five" >
            <div class="container">
                <h2 class="f_size_30 f_600 text-center t_color l_height45 mb_50"><?php echo get_field("technology_title"); ?></h2>
                <div class="developer_product_content d_product_content_two text-center p-0">
                            <ul class="nav nav-tabs develor_tab mb-30" id="myTab2" role="tablist">
                                   <?php
                                   $args = array(
                                               'taxonomy' => 'tech-category',
                                              
                                               'order'   => 'DESC',
                                           );

                                   $cats = get_categories($args);

                                $i=1;
                                   foreach($cats as $cat) { $string = strtolower(preg_replace('/\s+/', '', $cat->name));
                                                           if($i==1)
                                                           {
                                                               $active="active nav-link";
                                                           }else
                                                           {
                                                              $active="nav-link";
                                                           }
                                                         
                                ?>
                                <li class="nav-item">
                                    <?php 
                                        echo "<a class='$active' id=$string-tab data-toggle=tab href=#$string role=tab aria-controls=$string aria-selected=false>";
                                                           echo $cat->name;
                                                           echo "</a>";
                                                           
                                                           ?>
             
                                </li>
                                                                   
                                    <?php $i++;
                                       } ?>

                               
                            </ul>
                            <div class="tab-content developer_tab_content">

                                <?php   $j=1;    foreach($cats as $cat) {
                                   
                                    if($j==1)
                                    {
                                        $active="show active";
                                    }else
                                    {
                                         $active="";
                                    }
                                 $string = strtolower(preg_replace('/\s+/', '', $cat->name));
                                ?>
                            <div class="tab-pane fade <?php echo  $active; ?> " id=<?php echo $string; ?> role="tabpanel" aria-labelledby=<?php echo $string."-tab"; ?>>
                                 <ul class="list-unstyled tech_used">
                                    <?php 


                                                                      $args = array('post_type' => 'technologies','order'   => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'tech-category',
                                                'field' => 'slug',
                                                'terms' => $cat->slug,
                                            ),
                                        ),
                                     );

                                     $loop = new WP_Query($args);
                                     if($loop->have_posts()) {
                                     

                                        while($loop->have_posts()) : $loop->the_post(); 
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                            ?>
           <li class="tech-icon flex-column align-content-center">
                                        <div>
                                        <img src=<?php echo esc_url($featured_img_url); ?> alt="">
                                         <p><?php echo get_the_title();?></p>
                                        </div>
                                    </li>
            <?php 
        endwhile;
     } ?>
                                    
                                
                                </ul> 
                                </div>
                             <?php $j++; } ?>
                             
                               
                            </div>
                        </div>
  
            </div>
        </section>
            <section class="app_screenshot_area sec_pad" style="background-color:#eee;">
            <div class="container custom_container p0">
                <div class="sec_title text-center mb_70">
                    <h2 class="f_p f_size_30 l_height30 f_700 t_color3 mb_20 wow fadeInUp" data-wow-delay="0.2s">Case Studies of Mobile Development </h2>
                   <!--  <p class="f_400 f_size_16 wow fadeInUp" data-wow-delay="0.4s">Why I say old chap that is spiffing barney, nancy boy bleeder chimney<br> pot richard cheers the little rotter.!</p> -->
                </div>
                <div class="app_screen_info">
                    <div class="app_screenshot_slider owl-carousel">
                        <div class="item">
                            <div class="screenshot_img">
                                 <a href="<?php echo get_template_directory_uri(); ?>/images/App_View.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/App_View.png" alt=""></a> 
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                 <a href="<?php echo get_template_directory_uri(); ?>/images/Home.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/Home.png" alt=""></a> 
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                  <a href="<?php echo get_template_directory_uri(); ?>/images/SignIn.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/SignIn.png" alt=""></a> 
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                             <a href="<?php echo get_template_directory_uri(); ?>/images/progress.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/progress.png" alt=""></a>  
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                 <a href="<?php echo get_template_directory_uri(); ?>/images/exams.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/exams.png" alt=""></a>  
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                   <a href="<?php echo get_template_directory_uri(); ?>/images/chating.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/chating.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="app_screenshot_area sec_pad">
            <div class="container custom_container p0">
                <div class="sec_title text-center mb_70">
                    <h2 class="f_p f_size_30 l_height30 f_700 t_color3 mb_20 wow fadeInUp" data-wow-delay="0.2s"> Web Developmet</h2>
                   <!--  <p class="f_400 f_size_16 wow fadeInUp" data-wow-delay="0.4s">Why I say old chap that is spiffing barney, nancy boy bleeder chimney<br> pot richard cheers the little rotter.!</p> -->
                </div>
                <div class="app_screen_info">
                    <div class="app_screenshot_slider owl-carousel">
                        <div class="item">
                            <div class="screenshot_img">
                                 <a href="<?php echo get_template_directory_uri(); ?>/images/bongosAdventure.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/bongosAdventure.png" alt=""></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                  <a href="<?php echo get_template_directory_uri(); ?>/images/avs.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/avs.png" alt=""></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                 <a href="<?php echo get_template_directory_uri(); ?>/images/ccit.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/ccit.png" alt=""></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                 <a href="<?php echo get_template_directory_uri(); ?>/images/alpha.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/alpha.png" alt=""></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                  <a href="<?php echo get_template_directory_uri(); ?>/images/choice.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/choice.png" alt=""></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot_img">
                                  <a href="<?php echo get_template_directory_uri(); ?>/images/suryasai.png" class="image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/suryasai.png" alt=""></a>
                            </div>
                        </div>
                    
                    </div>
                    <div class="text-center">
                    <a href="#" class="price_btn">View All Work</a>
                </div>
                </div>
            </div>
        </section>
      <section class="agency_testimonial_area bg_color sec_pad">
        <div class="container">
            <h2 class="f_size_30 f_600 t_color3 l_height40 text-center mb_60">We've heard things like</h2>
            <div class="agency_testimonial_info">
                 <div class="testimonial_slider owl-carousel">
                    <div class="testimonial_item text-center left">
                        <div class="author_img"><img src="" alt=""></div>
                        <div class="author_description">
                            <h4 class="f_500 t_color3 f_size_18">Shilpa Patel</h4>
                            <h6>Founder of Bongos Adventure</h6>
                        </div>
                        <p>Working with WebmobileZ.com has been a really great experience that has taken my online business to a new level. From the moment I contacted their customer support, WebmobileZ service has been assisting me with exceptional services built around result driven campaigns. For anyone looking for a professional team to manage web marketing and PPC, get in touch with WebmobileZ.com because they will save your business time and money with their expertise and know-how. Look forward to doing very long term business! Marketing has paid off, thanks, guys!</p>
                    </div>
                    <div class="testimonial_item text-center center">
                        <div class="author_img"><img src="" alt=""></div>
                        <div class="author_description">
                            <h4 class="f_500 t_color3 f_size_18">Jennifer Crouch</h4>
                            <h6>CEO of MoosAngels</h6>
                        </div>
                        <p>I've fished several e-commerce platforms and marketplaces that could enter to my business model.The support team was helpful with everything.</p>
                    </div>
                    <div class="testimonial_item text-center right">
                        <div class="author_img"><img src="" alt=""></div>
                        <div class="author_description">
                            <h4 class="f_500 t_color3 f_size_18">Hanny</h4>
                            <h6>Founder of AlphaTechInc</h6>
                        </div>
                        <p>I would like to thank WebmobileZ team for the excellent work. The team  works superbly and technical support is very great. I encourage people to do business with this company!</p>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    
    
       <?php get_footer(); ?>