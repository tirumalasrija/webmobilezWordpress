

<!doctype html>
<html <?php language_attributes(); ?>>


<head>
    <!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon">
    <title>Webmobilez</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/bootstrap-selector/css/bootstrap-select.min.css">
    <!--icon font css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/elagent/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/animation/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/nice-select.css">
    <!--<link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.min.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_four">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="<?php echo site_url(''); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
 <?php   global $post;
    $post_slug = $post->post_name; ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ml-auto">
                            <li class="nav-item <?php if ( is_front_page() ) echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                            </li>
							<li class="nav-item <?php if($post_slug=="about-us") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('about-us'); ?>">About Us</a>
                            </li>
							<li class="dropdown submenu nav-item <?php if($post_slug=="web-development" ||$post_slug=="mobile-development" || $post_slug=="digital-marketing" ) echo 'active'; ?>"><a title="Pages" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Services</a>
                                <ul role="menu" class=" dropdown-menu">
                                   
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('web-development'); ?>"> Web Development</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('mobile-development'); ?>">Mobile Development</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('digital-marketing'); ?>">Digital Marketing</a></li>
                                </ul>
                            </li>
							<li class="nav-item <?php if($post_slug=="our-work") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('our-work'); ?>">Our Work</a>
                            </li>
							<li class="nav-item <?php if($post_slug=="careers") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('careers'); ?>">Careers</a>
                            </li>
							<li class="nav-item <?php if($post_slug=="about-us") echo 'contact-us'; ?>">
                                <a class="nav-link" href="<?php echo site_url('contact-us'); ?>">Contact Us</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

