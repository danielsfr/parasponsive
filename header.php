<!DOCTYPE HTML>
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<?php load_theme_textdomain("Paralax_page");?>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <?php global $smof_data; ?>
    <!-- ==SEO== -->
    <?php if (is_front_page()) {
        if ($smof_data['site_keywords']) {
            ?>
            <meta name="keywords" content="<?php echo $smof_data['site_keywords']; ?>"/>
        <?php } ?>
        <?php if ($smof_data['site_desc']) { ?>
            <meta name="description" content="<?php echo $smof_data['site_desc']; ?>"/>
        <?php } ?>
        <?php if ($smof_data['site_title']) { ?>
            <title><?php echo $smof_data['site_title']; ?></title>
        <?php } else { ?>
            <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <?php
        }
    } else {
        ?>
        <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php } ?>

    <!-- ==Favicon== -->

    <?php if ($smof_data['custom_favicon_ie']) { ?>

        <link rel="shortcut icon" href="<?php echo $smof_data['custom_favicon_ie']; ?>" type="image/x-icon"/>

    <?php } ?>

    <?php if ($smof_data['custom_favicon_mod']) { ?>

        <link rel="icon" href="<?php echo $smof_data['custom_favicon_mod']; ?>" type="image/png"/>

    <?php } ?>

    <?php if ($smof_data['custom_favicon_iphone']) { ?>

        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo $smof_data['custom_favicon_iphone']; ?>">

    <?php } ?>

    <?php if ($smof_data['custom_favicon_ipad']) { ?>

        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
              href="<?php echo $smof_data['custom_favicon_ipad']; ?>">

    <?php } ?>

    <?php if ($smof_data['custom_favicon_retina']) { ?>

        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
              href="<?php echo $smof_data['custom_favicon_retina']; ?>">

    <?php } ?>



    <!-- <link rel="profile" href="http://gmpg.org/xfn/11" /> -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<?php if(isset($smof_data['google_analytics'])){?>
    <script type="text/javascript">
    	//<![CDATA[
    		<?php  echo preg_replace('(<.script>)','',preg_replace('(<script.*?>)','',$smof_data['google_analytics']));?>
    	//]]>
	</script>
	<?php } ?>

    <?php wp_head(); ?>
</head>
<?php $smof_data['head_menu_style'] == "menu_dropdown" ? $headClass = 'dropdown' : $headClass = 'default'; ?>
<body data-smooth-scrolling="1" <?php body_class(); ?> id="<?php echo $headClass; ?>">

<!-- ==========================HEADER=========================== -->


<header data-spy="affix" data-offset-top="50" class="<?php echo $headClass; ?>">

    <?php
    function menu_back(){
        $menu_back =
            wp_nav_menu(array(
                    'container' => 'div',
                    'container_class' => 'container',
                    'fallback_cb' => false,
                    'menu_class' => 'top_navigation',
                    'theme_location' => 'top_navigation')
            );
        return $menu_back;
    }

    $logo = '<div id="logo">
                <a href="'.home_url().'"><img src="'.$smof_data['logo'].'" width="'.$smof_data["logo_retina_w"].'" height="'.$smof_data["logo_retina_h"].'" alt="logo"/></a>
            </div>';

    $url = '';$navClass = '';$menu_cur = 'home';$href = '#home';
    if( is_page_template('home-index.php') ) {
    	$navClass = ' js';
        $href = '#';
    }       else {
        $href = home_url().'/#';
    }
    $parallax_menu = '';
    //$parallax_menu = '<div id="menu_current" class="'.$menu_cur.'"><a href="'.$href.'" class="menu_1"><span class="menu_name">'.$smof_data["home_menu_name"].'</span><span class="hover"><span class="arr"></span></span></a></div>';
    
        $parallax_menu  .= '<ul>';
        $parallax_menu .= '<li class="i_home" class="current"><a href="'.$href.'home" class="menu_1"><span class="menu_name">'.$smof_data["home_menu_name"].'</span><span class="hover"><span class="arr"></span></span></a></li>';
        $smof_data['homepage_blocks'];
        foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
            switch ($block) {
                case 'Service':
                    $parallax_menu .= '<li class="i_services"><a href="'.$href.'services" class="menu_2"><span class="menu_name">' . __($smof_data["serv_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'Portfolio':
                    $parallax_menu .= '<li class="i_portfolio"><a href="'.$href.'portfolio" class="menu_3"><span class="menu_name">' . __($smof_data["port_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'Pricing Table':
                    $parallax_menu .= '<li class="i_pricing_table"><a href="'.$href.'pricing_table" class="menu_4"><span class="menu_name">' . __($smof_data["price_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'About Us':
                    $parallax_menu .= '<li class="i_about_us"><a href="'.$href.'about_us" class="menu_5"><span class="menu_name">' . __($smof_data["about_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'Contact Us':
                    $parallax_menu .= '<li class="i_contact_us"><a href="'.$href.'contact_us" class="menu_7"><span class="menu_name">' . __($smof_data["contact_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'Blank1':
                    $parallax_menu .= '<li class="i_blank1"><a href="'.$href.'blank1" class="menu_9"><span class="menu_name">' . __($smof_data["blank1_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'Blank2':
                    $parallax_menu .= '<li class="i_blank2"><a href="'.$href.'blank2" class="menu_10"><span class="menu_name">' . __($smof_data["blank2_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'Blank3':
                    $parallax_menu .= '<li class="i_blank3"><a href="'.$href.'blank3" class="menu_11"><span class="menu_name">' . __($smof_data["blank3_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'Blog':
                    $parallax_menu .= '<li class="i_blog"><a href="'.get_category_link( get_cat_ID($smof_data['blog_cat']) ).'" class="menu_3 external"><span class="menu_name">' . __($smof_data["blog_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                case 'WooSection' :
                    $parallax_menu .= '<li class="i_woo"><a href="'.$href.'woo" class="menu_8"><span class="menu_name">' . __($smof_data["woo_menu_name"]) . '</span><span class="hover"><span class="arr"></span></span></a></li>';
                    break;
                default:
                    break;
            }
        }
        $parallax_menu .= '</ul>';
    
    ?>


    <?php
    if ( $smof_data['head_menu_style'] == "menu_default" ){

        if ( has_nav_menu('top_navigation', 'GoGetThemes') ) {
            echo '<div id="menu_back">';
                menu_back();
            echo '</div>';
        }
            echo'<div class="container">'.$logo.'
                        <div class="nav'.$navClass.'">
                            <nav>
                                '.$parallax_menu.'
                            </nav>
                        </div>';
                        if(!is_page_template('home-index.php')){
                        	echo '<div class="mob_nav"><nav><span class="trigger"></span>'.$parallax_menu.'</nav></div>';
                        } else{
                       		echo '<div class="mob_nav js"><nav><span class="trigger"></span>'.$parallax_menu.'</nav></div>';
                        }
            echo        '</div>';

    }   else if ( $smof_data['head_menu_style'] == "menu_dropdown" ) {

        echo'<div class="container">'.$logo.'
                    <div class="nav'.$navClass.'">
                        <nav>
                            <div id="menu_current" class="'.$menu_cur.'">
                                <a href="'.$href.'" class="menu_1">
                                    <span class="menu_name">'.$smof_data["home_menu_name"].'</span><span class="hover"><span class="arr"></span></span>
                                </a>
                            </div>
                            '.$parallax_menu.'
                        </nav>
                    </div>
                    <div class="mob_nav js"><nav><span class="trigger"></span>'.$parallax_menu.'</nav></div>
                </div>';

        if ( has_nav_menu('top_navigation', 'GoGetThemes') ) {
            echo '<div id="menu_back">';
                menu_back();
            echo '</div>';
        }
        // Header Border
        echo'<div class="head_box bot_box"></div>';
    }
    ?>

</header>

