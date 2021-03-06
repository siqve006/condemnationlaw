<!DOCTYPE html>







<html <?php language_attributes(); ?>>







<head>















<title><?php wp_title(''); ?></title>















	<!--<title>







	<?php if ( is_tag() ) {







			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );







		} elseif ( is_archive() ) {







			wp_title(); echo ' Archive | '; bloginfo( 'name' );







		} elseif ( is_search() ) {







			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );







		} elseif ( is_home() ) {







			bloginfo( 'name' ); 







		}  elseif ( is_404() ) {







			echo 'Error 404 Not Found | '; bloginfo( 'name' );







		} else {







			echo wp_title( ' | ', false, right ); bloginfo( 'name' );







		} ?>







	</title>-->







	<!--<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />-->







	







	<meta charset="<?php bloginfo( 'charset' ); ?>" />







    <meta name="viewport" content="width=device-width, initial-scale=1.0">







<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->







<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->







<!--[if lte IE 7]><script src="http://condemnation-law.com/test1/wp-content/themes/stacy/js/respond.min.js"></script><![endif]-->















<!--[if lte IE 8]><script src="<?php bloginfo( 'template_url' );?>/js/respond.min.js"></script><![endif]-->







<!--[if gte IE 9]><style type="text/css">.gradient{filter: none;}</style><![endif]-->







	<link rel="profile" href="http://gmpg.org/xfn/11" />







	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />







  <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />







 <!-- <link rel="icon" href="<?php // echo get_option('mytheme_favicon'); ?>" type="image/x-icon" />-->







	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />







	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />







	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />







        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->







    <!--[if lt IE 9]>







      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>







      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>







    <![endif]-->







	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->







	<!--[if lt IE 9]>







		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>







	<![endif]-->







  <!--[if lt IE 7]>







    <div style=' clear: both; text-align:center; position: relative;'>







        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" &nbsp;alt="" /></a>







    </div>







  <![endif]-->







  <!--[if gte IE 9]>







  <style type="text/css">







    .gradient {







       filter: none;







    }







  </style>







<![endif]-->







    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->







    <!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/ie.css"><![endif]-->







   







	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />







	<?php







		/* We add some JavaScript to pages with the comment form







		 * to support sites with threaded comments (when in use).







		 */







		if ( is_singular() && get_option( 'thread_comments' ) )







			wp_enqueue_script( 'comment-reply' );







	







		/* Always have wp_head() just before the closing </head>







		 * tag of your theme, or you will break many plugins, which







		 * generally use this hook to add elements to <head> such







		 * as styles, scripts, and meta tags.







		 */







		wp_head();







	?>







<!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/ie.css"><![endif]-->







<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/ie7.css"><![endif]-->







  <!--[if lt IE 9]>







  <style type="text/css">







    #sidebar,







	#sidebar-right,







	.post_cycle li .post-date,







	.button,







	h1#page-title {







      behavior:url(<?php bloginfo('stylesheet_directory'); ?>/PIE.php)







      }







  </style>







  <![endif]-->







  















  







  <!-- Custom CSS -->







  <?php $computer_custom_css = get_option('computer_custom_css'); ?>







	<?php if($computer_custom_css){?>







  <style type="text/css">







  	<?php echo get_option('computer_custom_css'); ?>







  </style>







  <?php }?>







 



 <script type="text/javascript">



jQuery(document).ready(function($) {



$('.accordian_menu_head').click(function() {



$('.accordian_menu_head').removeClass('on');



$('.accordian_menu_content').slideUp('normal');



if($(this).next().is(':hidden') == true) {



$(this).addClass('on');



$(this).next().slideDown('normal');



}



});



$('.accordian_menu_head').mouseover(function() {



$(this).addClass('over');



}).mouseout(function() {



$(this).removeClass('over');



});



$('.accordian_menu_content').hide();







});







</script>





</head>













<body>

















    <div class="col-xs-12 black-bg">







        <div class="container">







            <div class="row">







                <?php 







                            wp_nav_menu( array(







                                      'container'       => 'ul', 







                                      'menu_class'      => 'sitemap', 







                                      'menu_id'         => '',







                                      'depth'           => 0,







                                      'theme_location' => 'top_header_menu'







                                  )); 







                            ?>  







            </div>







        </div>







    </div>



















    <div class="col-xs-12 header-bg">







        <div class="container">







            <div class="row">







                <div class="header-up">







                    <div class="header-in-up clearfix">







                        <div class="col-sm-4">







                            <div class="logo">







                                <a href="<?php bloginfo("home"); ?>"><img src="<?php echo get_option('stacy_logo'); ?>" class="img-responsive no-block" alt="logo"></a>







                            </div>







                        </div>







                        <div class="col-sm-8">







                            <div class="free">







                               <?php if ( ! dynamic_sidebar( 'Free Consultaton')) : ?>







                               







                     <?php endif; ?>







                                <div class="clearfix"></div>







                            </div>







                        </div>







                    </div>







                    <div class="clearfix"></div>







                    <div class="header-in-shadow">







                        <!--<img src="<?php echo get_bloginfo('template_url');?>/img/head-up-bg2.png" class="img-responsive no-block" alt="head-up-bg2" style="display: initial;" >-->







                    </div>







                </div>







                <div class="header-down">







                    <div class="navbar navibar">







                      <div class="container">







                        <div class="navbar-header">







                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">







                            <span class="icon-bar lines"></span>







                            <span class="icon-bar lines"></span>







                            <span class="icon-bar lines"></span>







                          </button>







                          <a class="navbar-brand home" href="#">Menu</a>







                       </div>







                        <div class="collapse navbar-collapse">







                          <?php 







                            wp_nav_menu( array(







                                      'container'       => 'ul', 







                                      'menu_class'      => 'nav navbar-nav', 







                                      'menu_id'         => 'navi',







                                      'depth'           => 0,







                                      'theme_location' => 'header_menu',







                                      'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',







                                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',







                                      'walker'         => new wp_bootstrap_navwalker()







                                  )); 







                            ?>  







                        </div><!--/.nav-collapse -->







                      </div>







                    </div>







                </div>







            </div>







        </div>







    </div>







