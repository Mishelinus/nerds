<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<script type="text/javascript"><!--
function stopError() {
  return true;
}
window.onerror = stopError;
//--></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>
	<?php
	if (is_home () ) { bloginfo('name').'com.ru'; } 
	elseif ( is_category() ) { single_cat_title(); echo 'Mamzel.com.ru'; }
 elseif (is_single() ) { single_post_title(); }
 elseif (is_page() ) {  echo 'Mamzel.com.ru '; single_post_title(); }
 else { wp_title('',true); } 
 ?>
 </title>
<link rel="stylesheet" type="text/css" media="all" href="https://mamzel.com.ru/wp-content/themes/mamzelik/style.css" />
	<link rel="alternate" type="application/rss+xml" title="Video RSS Feed" href="https://mamzel.com.ru/feed" />
	<link rel="alternate" type="application/atom+xml" title="Video Atom Feed" href="https://mamzel.com.ru/feed/atom" />
	<link rel="icon" href="https://mamzel.com.ru/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://mamzel.com.ru/favicon.png" type="image/png">
	<link rel='index' title='Женский сайт Mamzel.com.ru - все о красоте, здоровье, семье, стиле, карьере. ' href='https://mamzel.com.ru' />
	<?php wp_head(); ?>
	<!--begin of header code-->	
		<?php if(get_theme_mod('head_code_status') == "Yes") echo stripslashes(get_theme_mod('head_code')); ?>
	<!--end of header code-->
	<!--[if lt IE 7]>
	<style type="text/css"> 
		body {behavior:url("<?php bloginfo( 'template_url' ); ?>/js/csshover3.htc");}
	</style>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pngfix.js"></script>
	<script type="text/javascript">
			DD_belatedPNG.fix('#image-logo a, .cat-feedlink a,.pc-feedlink a, .sf-sub-indicator, .pc-next, .pc-prev, .backtotop');
	</script>
	<![endif]-->
<script type="text/javascript">
  function go(addr) {
    window.open(addr,"MyWin", "menubar=yes,width=1024,height=1024");
  }
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87909730, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87909730" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	</head>
<body <?php body_class(); ?>>
<?php if (is_home()) add_filter('img_caption_shortcode', create_function('$a, $b, $c','return $c;'), 10, 3); ?> 
<?php if (is_category()) add_filter('img_caption_shortcode', create_function('$a, $b, $c','return $c;'), 10, 3); ?> 
<div id="wrapper">
	<div id="top">
	<!--begin of top navigation-->	
		<div class="topnav">	
		<?php 
			$pagesNav = '';
			if (function_exists('wp_nav_menu')) {
				$pagesNav = wp_nav_menu( array( 'theme_location' => 'header-pages', 'menu_class' => 'topnav', 'menu_id' => 'page-nav', 'echo' => false, 'fallback_cb' => '' ) );};
			if ($pagesNav == '') { ?>
			<ul id="page-nav" class="topnav">
				<?php wp_list_pages('title_li='); ?>
			</ul>
		<?php }
			else echo($pagesNav); 
		?>
<!--end of topnavigation-->
<!--begin of top social links-->		
		<?php if (get_theme_mod('social_status') == 'Yes') { ?>
			<ul class="topnav top-social">
				<li><a class="top-rss" href="http://feeds.feedburner.com/<?php echo get_theme_mod('feedburner_id'); ?>" rel="nofollow" target="_blank"><?php _e('RSS', 'mamzelik') ?></a></li>
				<li><a class="top-twitter" href="http://twitter.com/<?php echo get_theme_mod('twitter_id'); ?>" rel="nofollow" target="_blank"><?php _e('Twitter', 'mamzelik') ?></a></li>
				<li><a class="top-facebook" href="http://www.facebook.com/<?php echo get_theme_mod('facebook_id'); ?>" rel="nofollow" target="_blank"><?php _e('Facebook', 'mamzelik') ?></a></li>
			</ul>
		<?php } ?>	
    	</div> <!--end .top-social-->
<!--end of top social links-->    	
    	</div> <!--end #top-->
    	<div id="header" >
		<?php 
			if(get_theme_mod('logo') == 'Image Logo') $logo_class = 'image-logo';
			if(get_theme_mod('logo') == 'Text Logo') $logo_class = 'text-logo';
		?>
		<?php if ( is_home() || is_front_page() ) echo '<h1 '; else echo '<div'; echo ' class="logo" >'; ?>
		<a <?php if(get_theme_mod('logo') == 'Image Logo' && get_theme_mod('logo_url')) {echo 'style="background:url('.get_theme_mod('logo_url').') no-repeat" ';} ?>href="<?php bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?> <!--  <span class="desc"><?php //bloginfo( 'description' ); ?></span>--></a> 
		<?php if ( is_home() || is_front_page() ) echo '</h1>'; else echo '</div>'; ?>
		<?php //if(get_theme_mod('header_ad_status') == "Yes") include(TEMPLATEPATH. '/ads/header-ad.php'); ?>
		<div class="clear"></div>
	</div><!-- #header -->
<?php 

// на главной странице баннеры в шапке не выводим
  if ( !is_home() ) { 
  if(get_theme_mod('header_ad_status') == "Yes") {
  
  
  ?>	
<!--  banner skidki i akcii -->
	<div id="ads_too_banners">
	
	     <div id="banner_left" >
	          <!--<a alt="Акции и скидки на Mamzel.com.ua" href="http://mamzel.com.ru/akcii-i-skidki/" target="_blank"> <img src="http://mamzel.com.ru/image/akcii-i-skidki.gif"> </a> --> 
              <!--<iframe src="http://tizer.flocker.com.ua/js/banner.php?id=2" name="banner" width="468" height="60" frameborder="0" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="no"></iframe> -->
<!--Временный баннер--><!--<img src="http://tizer.flocker.com.ua/images/banners/2_1420490677.jpg" border="0" alt="Маска молодости 1">-->
	     </div>
		 <?php // include(TEMPLATEPATH. '/ads/header-ad.php'); ?>
		</div><!--  end  banner skidki i akcii -->
  <?  }} 
//конец запрета вывода баннеров на главной

	?>
	<div id="cat-menu">
	    	<?php 
			$catNav = '';
			if (function_exists('wp_nav_menu')) {
				$catNav = wp_nav_menu( array( 'theme_location' => 'header-cats', 'menu_class' => 'nav', 'menu_id' => 'cat-nav', 'echo' => false, 'fallback_cb' => '' ) );};
			if ($catNav == '') { ?>
				<ul id="cat-nav" class="nav">
					<li class="first"><a href="<?php bloginfo('siteurl'); ?>"><?php _e('Главная', 'mamzelik'); ?></a></li>
					<?php wp_list_categories('title_li=&orderby=id&exclude=4'); ?>
<!--<li><a style="background: #FF6666; color:black;"href="http://mamzel.com.ru/akcii-i-skidki">Акции и скидки</a></li>-->
				</ul>
		<?php } else echo($catNav); ?>	 
        </div> <!--end #cat-nav-->
<div id="breadcrumb" class="clear">
		
		<!--<span class="current-time"><?php //echo mysql2date('d M Y',current_time('timestamp')); ?></span>-->
		<?php tj_breadcrumb(); ?>
	</div>
	<div id="main" class="clear">