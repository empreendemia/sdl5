/**
 * Functionality specific to Twenty Thirteen.
 *
 * Provides helper functions to enhance the theme experience.
 */

var selectFeaturedPost = function () {
    return false
};
var slideInterval;
       
( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window ),
            slide = true;

	/**
	 * Adds a top margin to the footer if the sidebar widget area is higher
	 * than the rest of the page, to help the footer always visually clear
	 * the sidebar.
	 */
	$( function() {
		if ( body.is( '.sidebar' ) ) {
			var sidebar   = $( '#secondary .widget-area' ),
			    secondary = ( 0 == sidebar.length ) ? -40 : sidebar.height(),
			    margin    = $( '#tertiary .widget-area' ).height() - $( '#content' ).height() - secondary;

			if ( margin > 0 && _window.innerWidth() > 999 )
				$( '#colophon' ).css( 'margin-top', margin + 'px' );
		}
	} );

	/**
	 * Enables menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav )
			return;

		button = nav.find( '.menu-toggle' );
		if ( ! button )
			return;

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.twentythirteen', function() {
			nav.toggleClass( 'toggled-on' );
		} );
	} )();

	/**
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.twentythirteen', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
				element.tabIndex = -1;

			element.focus();
		}
	} );

	/**
	 * Arranges footer widgets vertically.
	 */
	if ( $.isFunction( $.fn.masonry ) ) {
		$( '#recent_posts' ).masonry( {
			itemSelector: '.recent_post',
			gutterWidth: 5
		} );
	}
	setTimeout(function () {
		if ( $.isFunction( $.fn.masonry ) ) {
			$( '#recent_posts' ).masonry( {
				itemSelector: '.recent_post',
				gutterWidth: 5
			} );
		}
	}, 1000);
        
        
	/**
	 * Slideshow de featured posts
	 */
	var selectedFeatured = 0;
	selectFeaturedPost = function(i, slide) {
		// interrompe o slide show quando clicado
		if (!slide) {
			clearInterval(slideInterval);
			$('#featured-posts-bar .progress').addClass('off');
		}
		
		// limpa os anteriores
		$('#featured-posts-bar .progress').removeClass('show-reset');
		for (var j = 0; j < 5; j++) {
			$('#featured-posts-bar .progress').removeClass('show-'+j);
			$('#featured-post-selector-'+j).removeClass('selected');
		}
		
		// mostra o selecionado
		$('#featured-posts-list').css('margin-top', -(370)*i);
		$('#featured-posts-bar .progress').addClass('show-'+i);
		$('#featured-posts-bar .progress').addClass('show-'+i);
		$('#featured-post-selector-'+i).addClass('selected');
		
		// fim do loop
		if (slide) {
			if (i === 4) setTimeout(function () {
				$('#featured-posts-bar .progress').removeClass('show-4');
				$('#featured-posts-bar .progress').addClass('show-reset');
			}, 3900);
		}
	}
	var slideFeaturedPosts = function() {
		selectedFeatured = (selectedFeatured + 1)%5;
		selectFeaturedPost(selectedFeatured, true);
	}
	setTimeout(function () {
		$('#featured-posts-bar .progress').removeClass('show-none');
		$('#featured-posts-bar .progress').addClass('show-0'),
		$('#featured-post-selector-0').addClass('selected');
		slideInterval = setInterval(slideFeaturedPosts, 4000);
	}, 50);
			
			
	/* menu superior */
	$(window).scroll(function() {
		if ($(window).scrollTop() > 130) {
			$('#float-navigation').fadeIn(200);
			$('#ads_sides').addClass('float');
		}
		else {
			$('#float-navigation').fadeOut(200);
			$('#ads_sides').removeClass('float');
		}
	});
	
	/* fade in */
	setTimeout(function () {
		$('.fade-in-start').removeClass('fade-in-start');
	}, 500);
	
	/* author */
	$('.entry-header .author-name a').click(function() {$('.entry-header .author-description').toggle(200)});
	$('.entry-header .author-thumb').click(function() {$('.entry-header .author-description').toggle(200)});
	$('.entry-footer .author-name a').click(function() {$('.entry-footer .author-description').toggle(200)});
	$('.entry-footer .author-thumb').click(function() {$('.entry-footer .author-description').toggle(200)});
	
	
	
	/* facebook */
	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=285597901457818";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	
	/* plus */
	(function() {
	  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	  po.src = 'https://apis.google.com/js/plusone.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
	
} )( jQuery );