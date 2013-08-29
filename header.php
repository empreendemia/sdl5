<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    
    <!-- START google dfp -->
    <script type='text/javascript'>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function() {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') + 
            '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>
    
    <script type='text/javascript'>
        googletag.cmd.push(function() {
            googletag.defineSlot('/36701243/SaiaDoLugar_Topo_728x90', [728, 90], 'div-gpt-ad-1377715617475-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
        googletag.cmd.push(function() {
            googletag.defineSlot('/36701243/SaiaDoLugar_Sidebar_300x250', [300, 250], 'div-gpt-ad-1377711891856-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
        googletag.cmd.push(function() {
            googletag.defineSlot('/36701243/SaiaDoLugar_Sidebar_Vertical', [[120, 600], [160, 600], [300, 250], [300, 600]], 'div-gpt-ad-1377715010885-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
    <!-- END google dfp -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <div class="wrapper">
                <div class= "header-top">
                    <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Saia do Lugar" rel="home">
                        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </a>
    
                    <div id="ad-top-leaderboard">
                        <!-- SaiaDoLugar_Topo_728x90 -->
                        <div id='div-gpt-ad-1377715617475-0' style='width:728px; height:90px;'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1377715617475-0'); });
                            </script>
                        </div>
                    </div>
                </div>

                <div id="navbar" class="navbar">
                    <?php include "navbar.php" ?>
                </div><!-- #navbar -->
            </div><!-- .wrapper -->
        </header><!-- #masthead -->

        <div id="main" class="site-main">
