<?php
/**
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<div id="secondary" role="complementary">
    <div class="sidebar-inner">
        <div class="widget-area">
		
            <aside class="widget widget_ad_300x250">
		        <h3 class="widget-title">Publicidade</h3>
		    	<div class="ad-sidebar-rectangle">
                    <!-- SaiaDoLugar_Sidebar_300x250 -->
                    <div id='div-gpt-ad-1377711891856-0' style='width:300px; height:250px;'>
                    <script type='text/javascript'>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1377711891856-0'); });
                    </script>
                    </div>
                </div>
            </aside>
            <aside class="widget widget_facebook">
		        <h3 class="widget-title">Curta a gente no Facebook!</h3>
                <div class="facebook_likes">
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FEmpreendemia&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23ffffff&amp;stream=false&amp;header=false&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px; background-color:#fff;"></iframe>
                </div>
            </aside>
            <aside class="widget widget_ad">
		        <h3 class="widget-title">Publicidade</h3>
		    	<div class="ad-sidebar-vertical">
		    	    <!-- SaiaDoLugar_Sidebar_Vertical -->
		    	    <div id='div-gpt-ad-1377715010885-0' style='min-height:250px;'>
		    	        <script type='text/javascript'>
		    	            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1377715010885-0'); });
		    	        </script>
		    	    </div>
                </div>
            </aside>
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        </div><!-- .widget-area -->
    </div><!-- .sidebar-inner -->
</div><!-- #secundary -->