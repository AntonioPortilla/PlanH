	<div class="clear"></div>
</div><!-- .container /-->
<?php tie_banner('banner_bottom' , '<div class="ads-bottom">' , '</div>' ); ?>

<?php get_sidebar( 'footer' ); ?>				
<div class="clear"></div>
<div class="footer-bottom">
	<div class="container">
		<div class="alignright">
			<?php
				$footer_vars = array('%year%' , '%site%' , '%url%');
				$footer_val  = array( date('Y') , get_bloginfo('name') , home_url() );
				$footer_two  = str_replace( $footer_vars , $footer_val , tie_get_option( 'footer_two' ));
				echo htmlspecialchars_decode( $footer_two );?>
		</div>
		<?php if( tie_get_option('footer_social') ) tie_get_social('yes',16); ?>
		
		<div class="alignleft">
			<?php
				$footer_one  = str_replace( $footer_vars , $footer_val , tie_get_option( 'footer_one' ));
				echo htmlspecialchars_decode( $footer_one );?>
		</div>
		<div class="clear"></div>
	</div><!-- .Container -->
</div><!-- .Footer bottom -->
<?php if( tie_get_option('footer_top') ): ?>
	<div id="topcontrol" class="tieicon-up-open" title="<?php _e('Scroll To Top' , 'tie'); ?>"></div>
<?php endif; ?>
<div id="fb-root"></div>
<?php wp_footer();?>
<!--Downloaded from 96down.com -->
<script>
	var ruta = '<?php echo home_url(); ?>'
	jQuery('.cat-posts a').eq(1).attr('href',ruta+'/category/espectaculos/');

	jQuery(function(){
		jQuery('#sidebar').find('.widget-top').hide();
		jQuery('#sidebar').find('.widget').css('margin-bottom','10px');
		jQuery('#sidebar').find('div.widget-container').css({'padding':'0px','border':'0px','box-shadow':'none'});
		
		var ruta_original = '<?php echo home_url(); ?>/';
		if (window.location.href == ruta_original) {
			jQuery('.cat-box-content').find('div.recent-item').eq(3).css('height','139px');
			jQuery('.cat-box-content').find('div.recent-item').eq(4).css('height','139px');
			jQuery('.cat-box-content').find('div.recent-item').eq(5).css('height','139px');
			jQuery('.cat-box-content').eq(0).css({'border':'none','box-shadow':'none'});
			jQuery('.cat-box-content').eq(1).css({'border':'none','box-shadow':'none'});
			jQuery('header#theme-header').css({'margin-bottom':'0px','padding-bottom':'0px'});
			jQuery('#main-content').css('margin-top','0px');
			jQuery('.videosPlanH').find('li.other-news').css('padding','2px 15px');
			jQuery('#video_first').css({'padding':'10px 0px 0px 0px','width':'336px'});
			jQuery('#video_first div.post-thumbnail').css({'width':'332px','padding-bottom':'0px','margin-bottom':'0px'});
			jQuery('#video_first img').css('height','260px');
			jQuery('.two_coulumns').css({'border':'0px','box-shadow':'none'});
			jQuery('.two_coulumns ul>li>h3>a').css('font-weight','bold');
			jQuery('.planh-tv h3>a').css({'font-weight':'bold','font-size':'13px'});
			jQuery('.jCarouselLite').closest('.cat-box-content').css('padding','10px 0px 0px 0px');
		}
	});

	window.onload = function(){
		jQuery('.jCarouselLite ul').width('2250px');
		jQuery('.jCarouselLite').width('100%');
	}

	/*imagen de fondo*/
	jQuery('.background-cover').removeAttr('href').removeAttr('target');	

</script>
<?php 

	//class Myclass{
		/**
		 * [xd description]
		 * @param  [type] $sabe  [description]
		 * @param  [type] $chota [description]
		 * @return [type]        [description]
		 */
		/*public function xd($sabe, $chota){
			return 'xddddddd';
		}
	}*/
?>



<script type="text/javascript" src="http://planhperu.com/wp-content/themes/planH/js/jcarousellite_1.0.1.pack.js"></script>

<div class="carousel auto galeria_imagenes oculto">
	<div class="jCarouselLite">
		<ul>
			<li class="widthIMG"><img  src="http://planhperu.com/wp-content/themes/planH/images/carrusel/chica1.jpg" border="4px"/></li>
			<li class="widthIMG"><img  src="http://planhperu.com/wp-content/themes/planH/images/carrusel/chica2.jpg" border="4px"/></li>
			<li class="widthIMG"><img  src="http://planhperu.com/wp-content/themes/planH/images/carrusel/chica3.jpg" border="4px"/></li>
			<li class="widthIMG"><img  src="http://planhperu.com/wp-content/themes/planH/images/carrusel/chica4.jpg" border="4px"/></li>
			<li class="widthIMG"><img  src="http://planhperu.com/wp-content/themes/planH/images/carrusel/chica5.jpg" border="4px"/></li>
		</ul>
	</div>
</div>
<script type="text/javascript">


var ruta_principal = '<?php echo home_url(); ?>/';
	if (ruta_principal == window.location.href){
		jQuery('.galeria_imagenes').removeClass('oculto');
		
		jQuery(".auto .jCarouselLite").jCarouselLite({
		    auto: 300,
		    speed: 2000,
			visible:4
		});

	jQuery('.cat-box-content').eq(5).html(jQuery('.galeria_imagenes'));
	jQuery('.cat-box-content').eq(5).closest('section').find('div.stripe-line').addClass('stripe-line-noticias cat-posts galeriaChicas').removeClass('stripe-line');
	var linkGaleria = '<a href="http://planhperu.com/category/musica/">VER TODOS</a>';
	jQuery('.galeriaChicas').html(linkGaleria);
	
}else{
	console.warn('cuidadop rutas desiguales xD');
}

</script>
<style>
	#main-content{
		margin: auto !important;
	}
</style>

</body>
</html>




