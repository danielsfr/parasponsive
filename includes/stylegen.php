<?php

/*Generation of css file*/
add_action('of_save_options_after', 'create_style_css');

function compress($buffer) {
//     remove comments
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
//     remove tabs, spaces, newlines, etc.
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
}

function create_style_css($smof_data_in){
ob_start();
$smof_data = $smof_data_in['data'];

//=============

/* your css files */ ///*


//$dir = ABSPATH . 'wp-content/plugins/';
/*include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( file_exists( $dir.'contact-form-7/includes/css/styles.css' ) && is_plugin_active( $dir.'contact-form-7/wp-contact-form-7.php') ) {
    include( $dir.'contact-form-7/includes/css/styles.css' );
}

if ( file_exists( $dir.'LayerSlider/css/layerslider.css' ) && is_plugin_active( 'LayerSlider/layerslider.php') ) {
    include( $dir.'LayerSlider/css/layerslider.css' );
}

if ( file_exists( $dir.'wooslider/assets/css/flexslider.css' ) && is_plugin_active( 'wooslider/wooslider.php') ) {
    include( $dir.'wooslider/assets/css/flexslider.css' );
}
if ( file_exists( $dir.'wooslider/assets/css/style.css' ) && is_plugin_active( 'wooslider/wooslider.php') ) {
    include( $dir.'wooslider/assets/css/style.css' );
}

if ( file_exists( $dir.'wp-paginate/wp-paginate.css' ) && is_plugin_active( 'wp-paginate/wp-paginate.php') ) {
    include( $dir.'wp-paginate/wp-paginate.css' );
}*/


if($smof_data['first_intro'] == 1){
    echo '.section2 .intro {display: block !important;}';
} ?>
    /*update 1-07-2013*/
<?php if($smof_data['intro_bg'] == 1){?>
    .black_over {
    background: url(<?php echo get_template_directory_uri();?>/images/blackpx.png) repeat;
    height: 100%;
    }
<?php } ?>
<?php if($smof_data['header_shadow'] == 1){?>
    header {
    <?php if (has_nav_menu('top_navigation', 'GoGetThemes')) {?>
        background: url(<?php echo get_template_directory_uri();?>/images/header_bg.png) repeat-x 34px;
    <?php } else { ?>
        background: url(<?php echo get_template_directory_uri();?>/images/header_bg.png) repeat-x top;
    <?php } ?>
    }
<?php } ?>
<?php if($smof_data['port_hover'] != 1){?>
    .over_box {
    display: none;
    }
<?php } ?>
<?php if($smof_data['team_hover'] != 1){?>
    .team_photo .mask, .team_photo .content {
    display: none;
    }
<?php } ?>
    #logo img {
    margin: <?php echo $smof_data['logo_pad_t'];?>px 0 0 <?php echo $smof_data['logo_pad_l'];?>px;
    }
<?php if($smof_data['header_bg'] == 1){?>
    header {
    background-color: <?php echo $smof_data['header_bg_col'];?>;
    }
<?php } ?>
<?php if($smof_data['logo_min'] == 1){?>
    header.affix-top #logo img {
    width: 100%;
    height: auto;
    transition: all .5s;
    }
    header.affix #logo img {
    width: 75%;
    height: auto;
    transition: all .5s;
    }
<?php } ?>
    /*END*/
    .plug {
    background: <?php if (!empty($smof_data['bg_body'])) { echo $smof_data['bg_body'];} ?>;
    }
    #services .plug {
    background: <?php echo $smof_data['serv_color'];?>;
    }
    #portfolio .plug {
    background: <?php echo $smof_data['port_color'];?>;
    }
    #pricing_table .plug, #pricing_table .c_quot .plug {
    background: <?php echo $smof_data['price_color'];?>;
    }
    #about_us .plug {
    background: <?php echo $smof_data['about_color'];?>;
    }
    #contact_us .plug {
    background: <?php echo $smof_data['contact_color'];?>;
    }
    #woo .plug {
    background: <?php echo $smof_data['woo_colors_bg'];?>;
    }
    nav a.menu_1 {
    border-top: <?php echo $smof_data['home_hover_color'];?> solid 2px;
    }
    nav a.menu_2 {
    border-top: <?php echo $smof_data['serv_color'];?> solid 2px;
    }
    nav a.menu_3 {
    border-top: <?php echo $smof_data['port_color'];?> solid 2px;
    }
    nav a.menu_4 {
    border-top: <?php echo $smof_data['price_color'];?> solid 2px;
    }
    nav a.menu_5 {
    border-top: <?php echo $smof_data['about_color'];?> solid 2px;
    }
    nav a.menu_6 {
    border-top: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?> solid 2px;
    }
    nav a.menu_7 {
    border-top: <?php echo $smof_data['contact_color'];?> solid 2px;
    }
    nav a.menu_8 {
    border-top: <?php echo $smof_data['woo_colors_bg'];?> solid 2px;
    }
    nav a.menu_9 {
    border-top: <?php echo $smof_data['blank1_color'];?> solid 2px;
    }
    nav a.menu_10 {
    border-top: <?php echo $smof_data['blank2_color'];?> solid 2px;
    }
    nav a.menu_11 {
    border-top: <?php echo $smof_data['blank3_color'];?> solid 2px;
    }
    .mob_nav ul li a.menu_1 {
    background: <?php echo $smof_data['home_hover_color'];?>;
    }
    .mob_nav ul li a.menu_2 {
    background: <?php echo $smof_data['serv_color'];?>;
    }
    .mob_nav ul li a.menu_3 {
    background: <?php echo $smof_data['port_color'];?>;
    }
    .mob_nav ul li a.menu_4 {
    background: <?php echo $smof_data['price_color'];?>;
    }
    .mob_nav ul li a.menu_5 {
    background: <?php echo $smof_data['about_color'];?>;
    }
    .mob_nav ul li a.menu_6 {
    background: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?>;
    }
    .mob_nav ul li a.menu_7 {
    background: <?php echo $smof_data['contact_color'];?>;
    }
    .mob_nav ul li a.menu_8 {
    background: <?php echo $smof_data['woo_colors_bg'];?>;
    }
    .mob_nav ul li a.menu_9 {
    background: <?php echo $smof_data['blank1_color'];?>;
    }
    .mob_nav ul li a.menu_10 {
    background: <?php echo $smof_data['blank2_color'];?>;
    }
    .mob_nav ul li a.menu_11 {
    background: <?php echo $smof_data['blank3_color'];?>;
    }

    nav a.menu_1 span.hover {
    background: <?php echo $smof_data['home_hover_color'];?>;
    }
    nav a.menu_1 .arr {
    border-color: <?php echo $smof_data['home_hover_color'];?> transparent transparent transparent;
    }
    nav a.menu_2 span.hover {
    background: <?php echo $smof_data['serv_color'];?>;
    }
    nav a.menu_2 .arr {
    border-color: <?php echo $smof_data['serv_color'];?> transparent transparent transparent;
    }
    nav a.menu_3 span.hover {
    background: <?php echo $smof_data['port_color'];?>;
    }
    nav a.menu_3 .arr {
    border-color: <?php echo $smof_data['port_color'];?> transparent transparent transparent;
    }
    nav a.menu_4 span.hover {
    background: <?php echo $smof_data['price_color'];?>;
    }
    nav a.menu_4 .arr {
    border-color: <?php echo $smof_data['price_color'];?> transparent transparent transparent;
    }
    nav a.menu_5 span.hover {
    background: <?php echo $smof_data['about_color'];?>;
    }
    nav a.menu_5 .arr {
    border-color: <?php echo $smof_data['about_color'];?> transparent transparent transparent;
    }
    nav a.menu_6 span.hover {
    background: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?>;
    }
    nav a.menu_6 .arr {
    border-color: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?> transparent transparent transparent;
    }
    nav a.menu_7 span.hover {
    background: <?php echo $smof_data['contact_color'];?>;
    }
    nav a.menu_7 .arr {
    border-color: <?php echo $smof_data['contact_color'];?> transparent transparent transparent;
    }
    nav a.menu_8 span.hover {
    background: <?php echo $smof_data['woo_colors_bg'];?>;
    }
    nav a.menu_9 span.hover {
    background: <?php echo $smof_data['blank1_color'];?>;
    }
    nav a.menu_9 .arr {
    border-color: <?php echo $smof_data['blank1_color'];?> transparent transparent transparent;
    }
    nav a.menu_10 span.hover {
    background: <?php echo $smof_data['blank2_color'];?>;
    }
    nav a.menu_10 .arr {
    border-color: <?php echo $smof_data['blank2_color'];?> transparent transparent transparent;
    }
    nav a.menu_11 span.hover {
    background: <?php echo $smof_data['blank3_color'];?>;
    }
    nav a.menu_11 .arr {
    border-color: <?php echo $smof_data['blank3_color'];?> transparent transparent transparent;
    }

    li.current .menu_1 span{
    color: <?php echo $smof_data['paralax_hover_home'];?>;
    }
    li.current .menu_2 span{
    color: <?php echo $smof_data['paralax_hover_serv'];?>;
    }
    li.current .menu_3 span{
    color: <?php echo $smof_data['paralax_hover_port'];?>;
    }
    li.current .menu_4 span{
    color: <?php echo $smof_data['paralax_hover_price'];?>;
    }
    li.current .menu_5 span{
    color: <?php echo $smof_data['paralax_hover_about'];?>;
    }
    li.current .menu_6 span{
    color: <?php echo $smof_data['paralax_hover_blog'];?>;
    }
    li.current .menu_7 span{
    color: <?php echo $smof_data['paralax_hover_contact'];?>;
    }
    li.current .menu_8 span{
    color: <?php echo $smof_data['paralax_hover_woo'];?>;
    }
    li.current .menu_9 span{
    color: <?php echo $smof_data['paralax_hover_blank1'];?>;
    }
    li.current .menu_10 span{
    color: <?php echo $smof_data['paralax_hover_blank2'];?>;
    }
    li.current .menu_11 span{
    color: <?php echo $smof_data['paralax_hover_blank3'];?>;
    }
    nav a.menu_1:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_home'];?>;
    }
    nav a.menu_2:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_serv'];?>;
    }
    nav a.menu_3:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_port'];?>;
    }
    nav a.menu_4:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_price'];?>;
    }
    nav a.menu_5:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_about'];?>;
    }
    nav a.menu_6:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_blog'];?>;
    }
    nav a.menu_7:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_contact'];?>;
    }
    nav a.menu_8:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_woo'];?>;
    }
    nav a.menu_9:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_blank1'];?>;
    }
    nav a.menu_10:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_blank2'];?>;
    }
    nav a.menu_11:hover .menu_name{
    color: <?php echo $smof_data['paralax_hover_blank3'];?>;
    }
    #services .back2top {
    border: <?php echo $smof_data['serv_color'];?> solid 1px;
    color: <?php echo $smof_data['serv_color'];?> !important;
    }
    #woo .back2top {
    border: <?php echo $smof_data['woo_colors_bg'];?> solid 1px;
    color: <?php echo $smof_data['woo_colors_bg'];?>  !important;
    }

    #blank1 .back2top {
    border: <?php echo $smof_data['blank1_color'];?> solid 1px;
    color: <?php echo $smof_data['blank1_color'];?>  !important;
    }
    #blank2 .back2top {
    border: <?php echo $smof_data['blank2_color'];?> solid 1px;
    color: <?php echo $smof_data['blank2_color'];?>  !important;
    }
    #blank3 .back2top {
    border: <?php echo $smof_data['blank3_color'];?> solid 1px;
    color: <?php echo $smof_data['blank3_color'];?>  !important;
    }
    .serv_mid {
    background: <?php echo $smof_data['serv_color'];?>;
    padding: 30px 0;
    clear: both;
    }
    .serv_corusel{
    position:relative;
    }
    .serv_corusel #loaderImage{
    position:absolute;
    width:32px;height:32px;
    top:50%;left:50%;
    margin:-16px auto auto -16px;
    }
    .serv_corusel #loaderImage:before{
    -webkit-animation-name: spin;
    -webkit-animation-duration: 400ms;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: spin;
    -moz-animation-duration: 400ms;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    -ms-animation-name: spin;
    -ms-animation-duration: 400ms;
    -ms-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;

    animation-name: spin;
    animation-duration: 4000ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    font-size:20px;
    }

    @-ms-keyframes spin {
    from { -ms-transform: rotate(0deg); }
    to { -ms-transform: rotate(360deg); }
    }
    @-moz-keyframes spin {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
    }
    @-webkit-keyframes spin {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
    }
    @keyframes spin {
    from {
    transform:rotate(0deg);
    }
    to {
    transform:rotate(360deg);
    }
    }
    .serv_corusel li i {
    /* margin: 25px 0; */
    -webkit-transition: all 400ms linear;
    -moz-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    -ms-transition: all 400ms linear;
    transition: all 400ms linear;
    font-size: 140px;
    }
    .serv_corusel li img {
    /* margin: 25px 0; */
    -webkit-transition: all 400ms linear;
    -moz-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    -ms-transition: all 400ms linear;
    transition: all 400ms linear;
    font-size: 140px;
    }
    i[class^="icon-"], i[class*=" icon-"] {
    display: inline-block;
    }
    .serv_corusel li img{
    display: inline-block;
    }
    .serv_corusel li:hover i {
<?php if($smof_data['serv_icon_anim'] == 1) { ?>
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
<?php } ?> cursor: pointer;
    }
    .serv_corusel li:hover img {
<?php if($smof_data['serv_icon_anim'] == 1) { ?>
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
<?php } ?> cursor: pointer;
    }
    .portfolio_pop:hover {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
    color: <?php echo $smof_data['port_color'];?>;
    }
    #portfolio .back2top {
    border: <?php echo $smof_data['port_color'];?> solid 1px;
    color: <?php echo $smof_data['port_color'];?>  !important;
    }
    .portfolio_mid {
    background: <?php echo $smof_data['port_color'];?>;
    padding: 30px 0;
    }
    .isotope-item img {
    max-width: 280px;
    height: auto;
    webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.3s cubic-bezier(.63, .08, .35, .92);
    -moz-transition: all 0.3s cubic-bezier(.63, .08, .35, .92);
    -o-transition: all 0.3s cubic-bezier(.63, .08, .35, .92);
    -ms-transition: all 0.3s cubic-bezier(.63, .08, .35, .92);
    transition: all 0.3s cubic-bezier(.63, .08, .35, .92);
    }
    .isotope-item:hover img {
<?php if($smof_data['port_img_anim'] == 1) { ?> -webkit-transform: scale(2);
    -moz-transform: scale(2);
    -o-transform: scale(2);
    -ms-transform: scale(2);
    transform: scale(2);
<?php } ?>
    }
    #pricing_table .back2top {
    border: <?php echo $smof_data['price_color'];?> solid 1px;
    color: <?php echo $smof_data['price_color'];?>  !important;
    }
    .pricing_table_mid {
    padding: 30px 0;
    background: <?php echo $smof_data['price_color'];?>;
    }
    .about_us_mid {
    padding: 30px 0;
    background: <?php echo $smof_data['about_color'];?>;
    }
    #about_us .back2top {
    border: <?php echo $smof_data['about_color'];?> solid 1px;
    color: <?php echo $smof_data['about_color'];?> !important;
    }
    .contact_us_mid {
    background: <?php echo $smof_data['contact_color'];?>;
    padding: 30px 0;
    }
    #contact_us .back2top {
    border: <?php echo $smof_data['contact_color'];?> solid 1px;
    color: <?php echo $smof_data['contact_color'];?> !important;
    }
    footer {
    margin: -60px 0 0;
    background: <?php echo $smof_data['footer_color'];?>;
    padding: 80px 0 30px;
    }
    #blog {
    background: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?>;
    margin-bottom: 60px;
    padding: 100px 0 0;
    }
    #blog .plug {
    background: <?php if (!empty($smof_data['blog_color'])) { echo $smof_data['blog_color'];} ?>;
    }
    /* TYPOGRAPHY */
<?php if (!empty($smof_data['google_font'])) {if($smof_data['google_font'] == 1) { ?>
    body {
    font-family: <?php if (!empty($smof_data['google_body_font'])) { echo $smof_data['google_body_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_body_font_w'])) { echo $smof_data['google_body_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_body_font_s'])) { echo strtolower($smof_data['google_body_font_s']);} ?>;
    }
    nav a {
    font-family: <?php if (!empty($smof_data['google_menu_font'])) { echo $smof_data['google_menu_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_menu_font_w'])) { echo $smof_data['google_menu_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_menu_font_s'])) { echo strtolower($smof_data['google_menu_font_s']);} ?>;
    }
    h1,.h1 {
    font-family: <?php if (!empty($smof_data['google_h1_font'])) { echo $smof_data['google_h1_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h1_font_w'])) { echo $smof_data['google_h1_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h1_font_s'])) { echo strtolower($smof_data['google_h1_font_s']);} ?>;
    line-height: 72px;
    margin: 0 0 15px;
    }
    h2,.h2 {
    font-family: <?php if (!empty($smof_data['google_h2_font'])) { echo $smof_data['google_h2_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h2_font_w'])) { echo $smof_data['google_h2_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h2_font_s'])) { echo strtolower($smof_data['google_h2_font_s']);} ?>;
    line-height: 52px;
    margin: 0 0 15px;
    }
    h3,.h3 {
    font-family: <?php if (!empty($smof_data['google_h3_font'])) { echo $smof_data['google_h3_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h3_font_w'])) { echo $smof_data['google_h3_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h3_font_s'])) { echo strtolower($smof_data['google_h3_font_s']);} ?>;
    margin: 0 0 12px;
    }
    h4,.h4 {
    font-family: <?php if (!empty($smof_data['google_h4_font'])) { echo $smof_data['google_h4_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h4_font_w'])) { echo $smof_data['google_h4_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h4_font_s'])) { echo strtolower($smof_data['google_h4_font_s']);} ?>;
    margin: 0 0 10px;
    line-height: 34px;
    }
    h5,.h5{
    font-family: <?php if (!empty($smof_data['google_h5_font'])) { echo $smof_data['google_h5_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h5_font_w'])) { echo $smof_data['google_h5_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h5_font_s'])) { echo strtolower($smof_data['google_h5_font_s']);} ?>;
    margin: 0 0 0.5em 0;
    }
    h6,.h6 {
    font-family: <?php if (!empty($smof_data['google_h6_font'])) { echo $smof_data['google_h6_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_h6_font_w'])) { echo $smof_data['google_h6_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_h6_font_s'])) { echo strtolower($smof_data['google_h6_font_s']);} ?>;
    font-size: 14px;
    margin: 10px 0;
    }
<?php } } else {?>
    body {
    font-family: <?php echo $smof_data['std_body_font']['face'];?>;
    <?php if ($smof_data['std_body_font']['style'] == 'bold' || $smof_data['std_body_font']['style'] == 'normal') {
        echo 'font-weight: '. $smof_data['std_body_font']['style'] . ';';
    }
    if($smof_data['std_body_font']['style'] == 'italic'){
        echo 'font-style: '. $smof_data['std_body_font']['style'] . ';';
    }?>
    }
    nav a {
    font-family: <?php echo $smof_data['std_menu_font']['face'];?>;
    <?php if ($smof_data['std_menu_font']['style'] == 'bold' || $smof_data['std_menu_font']['style'] == 'normal') {
        echo 'font-weight: '. $smof_data['std_menu_font']['style'] . ';';
    }
    if($smof_data['std_menu_font']['style'] == 'italic'){
        echo 'font-style: '. $smof_data['std_menu_font']['style'] . ';';
    }?>
    }
    h1, h2, h3, h4, h5, h6,.h1,.h2,.h3,.h4,.h5,.h6 {
    font-family: <?php echo $smof_data['std_h1_font']['face'];?>;
    <?php if ($smof_data['std_h1_font']['style'] == 'bold' || $smof_data['std_h1_font']['style'] == 'normal') {
        echo 'font-weight: '. $smof_data['std_h1_font']['style'] . ';';
    }
    if($smof_data['std_h1_font']['style'] == 'italic'){
        echo 'font-style: '. $smof_data['std_h1_font']['style'] . ';';
    }?>
    }
<?php } ?>
    body {
    font-size: <?php if (!empty($smof_data['font_size_body'])) { echo $smof_data['font_size_body'];} ?>px;
    color: <?php if (!empty($smof_data['font_color_body'])) { echo $smof_data['font_color_body'];} ?>;
    background: <?php if (!empty($smof_data['bg_body'])) { echo $smof_data['bg_body'];} ?>;
    }
    nav a {
    font-size: <?php if (!empty($smof_data['font_size_menu'])) { echo $smof_data['font_size_menu'];} ?>px;
    }
    h1,.h1 {
    font-size: <?php if (!empty($smof_data['font_size_h1'])) { echo $smof_data['font_size_h1'];} ?>px;
    line-height: <?php if (!empty($smof_data['font_size_h1'])) { echo $smof_data['font_size_h1'];} ?>px;
    }
    h2,.h2 {
    font-size: <?php if (!empty($smof_data['font_size_h2'])) { echo $smof_data['font_size_h2'];} ?>px;
    line-height: <?php if (!empty($smof_data['font_size_h2'])) { echo $smof_data['font_size_h2'];} ?>px;
    }
    h3,.h3 {
    font-size: <?php if (!empty($smof_data['font_size_h3'])) { echo $smof_data['font_size_h3'];} ?>px;
    }
    h4,.h4 {
    font-size: <?php if (!empty($smof_data['font_size_h4'])) { echo $smof_data['font_size_h4'];} ?>px;
    line-height: <?php if (!empty($smof_data['font_size_h4'])) { echo $smof_data['font_size_h4']+3;} ?>px;
    }
    h5,.h5 {
    font-size: <?php if (!empty($smof_data['font_size_h5'])) { echo $smof_data['font_size_h5'];} ?>px;
    }
    h6,.h6 {
    font-size: <?php if (!empty($smof_data['font_size_h6'])) { echo $smof_data['font_size_h6'];} ?>px;
    }
    h1, h2, h3, h4, h5, h6,.h1,.h2,.h3,.h4,.h5,.h6 {

    color: <?php if (!empty($smof_data['font_color_headlines'])) { echo $smof_data['font_color_headlines'];} ?>;
    }
    a {
    color: <?php if (!empty($smof_data['font_color_a'])) { echo $smof_data['font_color_a'];} ?>;
    }
    a:hover {
    color: <?php if (!empty($smof_data['font_color_a_h'])) { echo $smof_data['font_color_a_h'];} ?>;
    }
    .tooltip-inner {
    max-width: 200px;
    padding: 8px;
    color: #ffffff;
    text-align: center;
    text-decoration: none;
    background-color: <?php if (!empty($smof_data['font_color_tooltip'])) { echo $smof_data['font_color_tooltip'];} ?>;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    }
    .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    }
    .tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: <?php if (!empty($smof_data['font_color_tooltip'])) { echo $smof_data['font_color_tooltip'];} ?>;
    }
    h1,.h1 {
    margin: 0 0 15px;
    }
    h2,.h2 {
    margin: 0 0 15px;
    }
    h3,.h3 {
    margin: 0 0 12px;
    }
    h4,.h4 {
    margin: 0 0 10px;
    }
    h5,.h5 {
    margin: 0 0 0.5em 0;
    }
    h6,.h6 {
    margin: 10px 0;
    }
    #menu_back {
    background: <?php if (!empty($smof_data['smenu_bg'])) { echo $smof_data['smenu_bg'];} ?>;
    }
    .top_navigation {
    text-align: center;
    padding: 5px 0;
    margin: 0;
    }
    .top_navigation > li {
    display: inline-block;
    margin: 0 5px;
    }
    .top_navigation li a {
    display: block;
    text-transform: uppercase;
    font-size: <?php if (!empty($smof_data['font_size_smenu'])) { echo $smof_data['font_size_smenu'];} ?>px;
    line-height: 20px;
    color: <?php if (!empty($smof_data['smenu_fline_text'])) { echo $smof_data['smenu_fline_text'];} ?>;
    text-decoration: none;
    font-family: <?php if (!empty($smof_data['google_smenu_font'])) { echo $smof_data['google_smenu_font'];} ?>, Arial, Helvetica, sans-serif;
    font-weight: <?php if (!empty($smof_data['google_smenu_font_w'])) { echo $smof_data['google_smenu_font_w'];} ?>;
    font-style: <?php if (!empty($smof_data['google_smenu_font_s'])) { strtolower($smof_data['google_smenu_font_s']);} ?>;
    }
    .top_navigation > li:hover > a {
    color: <?php if (!empty($smof_data['smenu_fline_text_h'])) { echo $smof_data['smenu_fline_text_h'];} ?>;
    background: <?php if (!empty($smof_data['smenu_fline_bg_h'])) { echo $smof_data['smenu_fline_bg_h'];} ?>;
    }
    .top_navigation > li:hover > a {
    }
    /*** ESSENTIAL STYLES ***/
    .top_navigation, .top_navigation * {
    margin: 0;
    padding: 0;
    list-style: none;
    }
    .top_navigation li {
    position: relative;
    padding: 0 !important;
    z-index: 9999;
    }
    .top_navigation ul {
    position: absolute;
    display: none;
    top: 100%;
    left: 0;
    z-index: 999;
    }
    .top_navigation > li {
    float: left;
    }
    .top_navigation li:hover > ul,
    .top_navigation li.sfHover > ul {
    display: block;
    }
    .top_navigation a {
    display: block;
    position: relative;
    }
    .top_navigation ul ul {
    top: 0;
    left: 100%;
    }
    /*** DEMO SKIN ***/
    .top_navigation {
    float: left;
    margin-bottom: 0em;
    }
    .top_navigation ul {
    min-width: 12em; /* allow long menu items to determine submenu width */
    *width: 12em; /* no auto sub width for IE7, see white-space comment below */
    }
    .top_navigation > li > a {
    text-transform: uppercase;
    color: <?php if (!empty($smof_data['smenu_fline_text'])) { echo $smof_data['smenu_fline_text'];} ?>;
    }
    .top_navigation > li {
    background: none !important;
    }
    .top_navigation a {
    padding: .55em 1em;
    text-decoration: none;
    zoom: 1; /* IE7 */
    }
    .top_navigation ul a {
    color: <?php if (!empty($smof_data['submenu_link'])) { echo $smof_data['submenu_link'];} ?>;
    }
    .top_navigation li {
    /*background: #BDD2FF;*/
    white-space: nowrap; /* no need for Supersubs plugin */
    *white-space: normal; /* ...unless you support IE7 (let it wrap) */
    -webkit-transition: background .2s;
    transition: background .2s;
    }
    .top_navigation ul li {
    background: <?php if (!empty($smof_data['submenu_link_bg'])) { echo $smof_data['submenu_link_bg'];} ?>;
    border-bottom: #666666 solid 1px;
    text-transform: uppercase;
    text-align: left;
    }
    .top_navigation ul ul li {
    background: #000;
    }
    .top_navigation li:hover {
    background: <?php if (!empty($smof_data['submenu_link_bg_h'])) { echo $smof_data['submenu_link_bg_h'];} ?>;
    /* only transition out, not in */
    -webkit-transition: none;
    transition: none;
    }
    .top_navigation li li:hover > a {
    color: <?php if (!empty($smof_data['submenu_link_h'])) { echo $smof_data['submenu_link_h'];} ?>;
    }
    /*** arrows (for all except IE7) **/
    .sf-arrows .sf-with-ul {
    padding-right: 2.5em;
    *padding-right: 1em; /* no CSS arrows for IE7 (lack pseudo-elements) */
    }
    /* styling for both css and generated arrows */
    .sf-arrows .sf-with-ul:after {
    position: absolute;
    top: 8px;
    right: 1em;
    content: "\f0d7";
    font-family: fontawesome;
    }
    /*.man_box, .intro {
    opacity: 0;
    }*/
<?php 
if(array_key_exists('homepage_blocks', $smof_data)){
if(array_key_exists('enabled', $smof_data['homepage_blocks'])){
$i = 0;
foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
    $i++;
    switch ($block) {
        case 'Service': if ($i == 2){?>
            .serv_top {
            border-color: transparent transparent <?php echo $smof_data['serv_color'];?> transparent;
            }
            .serv_bot {
            border-color: transparent <?php echo $smof_data['serv_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .serv_top {
            border-color: transparent transparent transparent <?php echo $smof_data['serv_color'];?>;
            }
            .serv_bot {
            border-color: <?php echo $smof_data['serv_color'];?> transparent transparent transparent;
            }
        <?php } break;
        case 'Portfolio': if ($i == 2){?>
            .portfolio_top {
            border-color: transparent transparent <?php echo $smof_data['port_color'];?> transparent;
            }
            .portfolio_bot {
            border-color: transparent <?php echo $smof_data['port_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .portfolio_top {
            border-color: transparent transparent transparent <?php echo $smof_data['port_color'];?>;
            }
            .portfolio_bot {
            border-color: <?php echo $smof_data['port_color'];?> transparent transparent transparent;
            }


        <?php } break;
        case 'Blank1': if ($i == 2){?>
            .blank1_top {
            border-color: transparent transparent <?php echo $smof_data['blank1_color'];?> transparent;
            }
            .blank1_mid .sub_title .plug{
            background: <?php echo $smof_data['blank1_color'];?>;
            }
            .blank1_bot {
            border-color: transparent <?php echo $smof_data['blank1_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .blank1_top {
            border-color: transparent transparent transparent <?php echo $smof_data['blank1_color'];?>;
            }
            .blank1_mid .sub_title .plug{
            background: <?php echo $smof_data['blank1_color'];?>;
            }
            .blank1_bot {
            border-color: <?php echo $smof_data['blank1_color'];?> transparent transparent transparent;
            }
        <?php } break;
        case 'Blank2': if ($i == 2){?>
            .blank2_top {
            border-color: transparent transparent <?php echo $smof_data['blank2_color'];?> transparent;
            }
            .blank2_mid .sub_title .plug{
            background: <?php echo $smof_data['blank2_color'];?>;
            }
            .blank2_bot {
            border-color: transparent <?php echo $smof_data['blank2_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .blank2_top {
            border-color: transparent transparent transparent <?php echo $smof_data['blank2_color'];?>;
            }
            .blank2_mid .sub_title .plug{
            background: <?php echo $smof_data['blank2_color'];?>;
            }
            .blank2_bot {
            border-color: <?php echo $smof_data['blank2_color'];?> transparent transparent transparent;
            }
        <?php } break;
        case 'Blank3': if ($i == 2){?>
            .blank3_top {
            border-color: transparent transparent <?php echo $smof_data['blank3_color'];?> transparent;
            }
            .blank3_mid .sub_title .plug{
            background: <?php echo $smof_data['blank3_color'];?>;
            }
            .blank3_bot {
            border-color: transparent <?php echo $smof_data['blank3_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .blank3_top {
            border-color: transparent transparent transparent <?php echo $smof_data['blank3_color'];?>;
            }
            .blank3_mid .sub_title .plug{
            background: <?php echo $smof_data['blank3_color'];?>;
            }
            .blank3_bot {
            border-color: <?php echo $smof_data['blank3_color'];?> transparent transparent transparent;
            }
        <?php } break;
        case 'Pricing Table': if ($i == 2){?>
            .pricing_table_top {
            border-color: transparent transparent <?php echo $smof_data['price_color'];?> transparent;
            }
            .pricing_table_bot {
            border-color: transparent <?php echo $smof_data['price_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .pricing_table_top {
            border-color: transparent transparent transparent <?php echo $smof_data['price_color'];?>;
            }
            .pricing_table_bot {
            border-color: <?php echo $smof_data['price_color'];?> transparent transparent transparent;
            }
        <?php } break;
        case 'About Us': if ($i == 2){?>
            .about_us_top {
            border-color: transparent transparent <?php echo $smof_data['about_color'];?> transparent;
            }
            .about_us_bot {
            border-color: transparent <?php echo $smof_data['about_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .about_us_top {
            border-color: transparent transparent transparent <?php echo $smof_data['about_color'];?>;
            }
            .about_us_bot {
            border-color: <?php echo $smof_data['about_color'];?> transparent transparent transparent;
            }
        <?php } break;
        case 'Contact Us': if ($i == 2){?>
            .contact_us_top {
            border-color: transparent transparent <?php echo $smof_data['contact_color'];?> transparent;
            }
            .contact_us_bot {
            border-color: transparent <?php echo $smof_data['contact_color'];?> transparent transparent;
            }
        <?php } else { ?>
            .contact_us_top {
            border-color: transparent transparent transparent <?php echo $smof_data['contact_color'];?>;
            }
            .contact_us_bot {
            border-color: <?php echo $smof_data['contact_color'];?> transparent transparent transparent;
            }
        <?php } break;
        case 'WooSection': if ($i == 2){?>
            .woo_top {
            border-color: transparent transparent <?php echo $smof_data['woo_colors_bg'];?> transparent;
            }
            .woo_bot {
            border-color: transparent <?php echo $smof_data['woo_colors_bg'];?> transparent transparent;
            }
        <?php } else { ?>
            .woo_top {
            border-color: transparent transparent transparent <?php echo $smof_data['woo_colors_bg'];?>;
            }
            .woo_bot {
            border-color: <?php echo $smof_data['woo_colors_bg'];?> transparent transparent transparent;
            }
        <?php } break;
        default:
            break;
    }
    if($i == 2){
        $i = 0;
    }}
	}
	} // end if
	?>
    .woo_main .section-mid{
    background: <?php echo $smof_data['woo_colors_bg'];?>;
    color: <?php echo $smof_data['woo_colors_text'];?>;
    }
    .woo_main h1,
    .woo_main h2,
    .woo_main h3,
    .woo_main h4,
    .woo_main h5,
    .woo_main h6,
    .woo_main .sub_title {
    color: <?php echo $smof_data['woo_colors_text'];?>;
    }
    #woo a {
    color: <?php echo $smof_data['woo_colors_link']; ?>;
    }
    #woo a:hover {
    color: <?php echo $smof_data['woo_colors_link_h']; ?>;
    }
    #woo .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['woo_colors_link']; ?> solid 2px;
    }
    .woocommerce a.button.alt, .woocommerce-page a.button.alt, .woocommerce button.button.alt, .woocommerce-page button.button.alt, .woocommerce input.button.alt, .woocommerce-page input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce-page #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page #content input.button.alt {
    background: <?php echo $smof_data['woo_btn']; ?>;
    }
    .woocommerce a.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page #content input.button.alt:hover {
    background: <?php echo $smof_data['woo_btn_h']; ?>;
    }
    .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button {
    background: <?php echo $smof_data['woo_pbtn']; ?>;
    }
    .woocommerce a.button:hover, .woocommerce-page a.button:hover, .woocommerce button.button:hover, .woocommerce-page button.button:hover, .woocommerce input.button:hover, .woocommerce-page input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce-page #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page #content input.button:hover {
    background: <?php echo $smof_data['woo_pbtn_h']; ?>;
    }
    .service_box .section-mid{

    color: <?php echo $smof_data['serv_colors_text'];?>;
    }
    .service_box h1,
    .service_box h2,
    .service_box h3,
    .service_box h4,
    .service_box h5,
    .service_box h6,
    .service_box .sub_title {
    color: <?php echo $smof_data['serv_colors_text'];?>;
    }
    #service a {
    color: <?php echo $smof_data['serv_colors_link']; ?>;
    }
    #service a:hover {
    color: <?php echo $smof_data['serv_colors_link_h']; ?>;
    }
    #service .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['serv_colors_link']; ?> solid 2px;
    }
    .portfolio_main .section-mid{

    color: <?php echo $smof_data['port_colors_text'];?>;
    }

    #single-portfolio,
    #single-portfolio .plug{
        background-color: <?php echo $smof_data["port_single_color"]; ?>;
    }

    .portfolio_main h1,
    .portfolio_main h2,
    .portfolio_main h3,
    .portfolio_main h4,
    .portfolio_main h5,
    .portfolio_main h6,
    .portfolio_main .sub_title {
    color: <?php echo $smof_data['port_colors_text'];?>;
    }
    #portfolio li a{
    color: <?php echo $smof_data['port_colors_link']; ?>;
    }
    #portfolio li a:hover{
    color: <?php echo $smof_data['port_colors_link_h']; ?>;
    }

    #portfolio a{
    color: <?php echo $smof_data['port_icon_colors_link']; ?>;
    }
    #portfolio a:hover {
    color: <?php echo $smof_data['port_icon_colors_link_h']; ?>;
    }
    #portfolio .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['port_colors_link']; ?> solid 2px;
    }

    .blank1_main .section-mid{

    color: <?php echo $smof_data['port_colors_text'];?>;
    }
    .blank1_main h1,
    .blank1_main h2,
    .blank1_main h3,
    .blank1_main h4,
    .blank1_main h5,
    .blank1_main h6,
    .blank1_main .sub_title {
    color: <?php echo $smof_data['blank1_colors_text'];?>;
    }
    #blank1 a {
    color: <?php echo $smof_data['blank1_colors_link']; ?>;
    }
    #blank1 a:hover {
    color: <?php echo $smof_data['blank1_colors_link_h']; ?>;
    }
    #blank1 .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['blank1_colors_link']; ?> solid 2px;
    }
    .blank1_mid {
    background: <?php echo $smof_data['blank1_color'];?>;
    padding: 30px 0;
    }
    .blank2_main .section-mid{

    color: <?php echo $smof_data['port_colors_text'];?>;
    }
    .blank2_main h1,
    .blank2_main h2,
    .blank2_main h3,
    .blank2_main h4,
    .blank2_main h5,
    .blank2_main h6,
    .blank2_main .sub_title {
    color: <?php echo $smof_data['blank2_colors_text'];?>;
    }
    #blank2 a {
    color: <?php echo $smof_data['blank2_colors_link']; ?>;
    }
    #blank2 a:hover {
    color: <?php echo $smof_data['blank2_colors_link_h']; ?>;
    }
    #blank2 .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['blank2_colors_link']; ?> solid 2px;
    }
    .blank2_mid {
    background: <?php echo $smof_data['blank2_color'];?>;
    padding: 30px 0;
    }
    .blank3_main .section-mid{

    color: <?php echo $smof_data['port_colors_text'];?>;
    }
    .blank3_main h1,
    .blank3_main h2,
    .blank3_main h3,
    .blank3_main h4,
    .blank3_main h5,
    .blank3_main h6,
    .blank3_main .sub_title {
    color: <?php echo $smof_data['blank3_colors_text'];?>;
    }
    #blank3 a {
    color: <?php echo $smof_data['blank3_colors_link']; ?>;
    }
    #blank3 a:hover {
    color: <?php echo $smof_data['blank3_colors_link_h']; ?>;
    }
    #blank3 .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['blank3_colors_link']; ?> solid 2px;
    }
    .blank3_mid {
    background: <?php echo $smof_data['blank3_color'];?>;
    padding: 30px 0;
    }
    .pricing_table_main .section-mid{

    color: <?php echo $smof_data['price_colors_text'];?>;
    }
    .pricing_table_main h1,
    .pricing_table_main h2,
    .pricing_table_main h3,
    .pricing_table_main h4,
    .pricing_table_main h5,
    .pricing_table_main h6,
    .pricing_table_main .sub_title {
    color: <?php echo $smof_data['price_colors_text'];?>;
    }
    #pricing_table a {
    color: <?php echo $smof_data['price_colors_link']; ?>;
    }
    #pricing_table a:hover {
    color: <?php echo $smof_data['price_colors_link_h']; ?>;
    }
    #pricing_table .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['price_colors_link']; ?> solid 2px;
    }
    .about_us_main .section-mid{

    color: <?php echo $smof_data['about_colors_text'];?>;
    }
    .about_us_main h1,
    .about_us_main h2,
    .about_us_main h3,
    .about_us_main h4,
    .about_us_main h5,
    .about_us_main h6,
    .about_us_main .sub_title {
    color: <?php echo $smof_data['about_colors_text'];?>;
    }
    #about_us a {
    color: <?php echo $smof_data['about_colors_link']; ?>;
    }
    #about_us a:hover {
    color: <?php echo $smof_data['about_colors_link_h']; ?>;
    }
    #about_us .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['about_colors_link']; ?> solid 2px;
    }
    .contact_us_main .section-mid{

    color: <?php echo $smof_data['contact_colors_text'];?>;
    }
    .contact_us_main h1,
    .contact_us_main h2,
    .contact_us_main h3,
    .contact_us_main h4,
    .contact_us_main h5,
    .contact_us_main h6,
    .contact_us_main .sub_title {
    color: <?php echo $smof_data['contact_colors_text'];?>;
    }
    #contact_us a {
    color: <?php echo $smof_data['contact_colors_link']; ?>;
    }
    #contact_us .bx-wrapper .bx-controls-direction a {
    border: <?php echo $smof_data['contact_colors_link']; ?> solid 2px;
    }
    #contact_us a:hover {
    color: <?php echo $smof_data['contact_colors_link_h']; ?>;
    }
    .product_list_widget .image-clear img{
    width: auto !important;
    display: block !important;
    margin: 0 auto !important;
    max-width: 150px !important;
    float: none !important;
    }
    @media (max-width: 1024px) {
    .intro {
    background-attachment: scroll;
    background-size: cover;
    background-repeat: no-repeat;
    }
    }
    @media (min-width: 769px) and (max-width: 979px) {
    /*#logo {
    float: none;
    clear: both;
    }
    .nav {
    float: none;
    clear: both;
    width: 100%;
    }*/
    .container {
    width: 768px;
    }
    }
    @media (max-width: 979px){
    div.nav {
    display: none !important;
    }
    .mob_nav {
    display: block !important;
    margin: 0 auto;
    width: auto;
    float: right;
    position: relative;
    z-index: 999;
    }
    .mob_nav ul {
    list-style: none;
    padding: 0;
    display: none;
    margin: 0;
    position: absolute;
    right: 0;
    z-index: 999;
    }
    .mob_nav ul li a {
    display: block;
    padding: 7px 7px 7px 15px;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    }
    .trigger {
    margin-right: 10px;
    margin-top: 3px;
    cursor: pointer;
    display: inline-block;
    background: url(<?php echo get_template_directory_uri();?>/images/mob_menu.png) no-repeat center;
    color: #fff;
    width: 30px;
    height: 30px;
    }
    }
    @media (min-width: 481px) and (max-width: 768px) {
    /*body {
    margin-top: 78px;
    }*/
    /*.nav {
    float: none;
    }
    .logo {
    text-align: center;
    margin: 0 -100px;
    background: #000;
    float: none !important;
    height: 100px;
    }
    nav {
    float: none;
    clear: both;
    width: 100%;
    text-align: center;
    }
    nav li {
    float: none;
    display: inline-block;
    }*/
    .container {
    width: 90%;
    }
    .speed_box {
    width: 40%;
    margin: 0 5%;
    }
    .speed_box.ipad {
    clear: both;
    }
    nav a {
    }
    nav a span.arr {
    border-width: 7px 42.5px 0;
    }
    h1 {
    font-size: 50px;
    line-height: 50px;
    }
    h2 {
    font-size: 36px;
    line-height: 36px;
    }
    h3 {
    font-size: 36px;
    }
    h4 {
    font-size: 24px;
    line-height: 24px;
    }
    h5 {
    font-size: 15px;
    }
    .pricing_table .span4 {
    margin-bottom: 10px;
    }
    .footer_bottom {
    text-align: center;
    }
    header {
    background: none;
    }
    .top_box_left,
    .top_box_right {
    margin-bottom: -1px;
    }
    .bot_box_left,
    .bot_box_right {
    margin-top: -1px;
    }
    nav a span.arr {
    margin-top: 34.5px;
    }
    .isotope-item {
    margin: 0 10px 10px 0;
    }
    nav li.current a span.hover {
    transition: all .5s;
    top: -1px;
    }
    nav li:hover a span.hover {
    transition: all .5s;
    top: -1px;
    }
    body {
    padding: 0;
    }
    .paralax {
    position: absolute;
    top: 0px;
    bottom: auto;
    left: 0;
    width: 100%;
    height: auto;
    z-index: -1;
    }
    .tinynav {
    display: block;
    appearance: none;
    background: #000;
    color: #fff;
    text-align: center;
    font-size: 16px;
    line-height: 16px;
    width: 50%;
    border: none;
    }
    .top_navigation {
    display: none;
    }
    }
    @media (max-width: 480px) {
    .google_map {
    display: none;
    }
    .col {
    width: auto !important;
    float: none;
    clear: both;
    margin-bottom: 10px;;
    }
    .one_third {
    overflow: hidden;
    }
    .reading-box p {
    margin: 15px 0px 0 0 !important;
    }
    .top_navigation {
    display: none;
    }
    .tinynav {
    width: 100%;
    border: none;
    display: block !important;
    appearance: none;
    background: #000;
    color: #fff;
    text-align: center;
    font-size: 16px;
    line-height: 16px;
    }
    .slide_text .title3 {
    font-size: 14px;
    font-weight: 300;
    line-height: 18px;
    margin-bottom: 15px;
    width: 48%;
    }
    .serv_corusel li:hover i {
    transition: none;
    -webkit-transform: none;
    -moz-transform: none;
    -o-transform: none;
    -ms-transform: none;
    transform: none;
    }
    .isotope-item:hover img {
    -webkit-transform: none;
    -moz-transform: none;
    -o-transform: none;
    -ms-transform: none;
    transform: none;
    }
    .pricing_table .span4 {
    margin-bottom: 10px;
    }
    .container {
    width: 290px;
    }

    h1 {
    font-size: 26px;
    line-height: 26px;
    }
    h2 {
    font-size: 20px;
    line-height: 22px;
    }
    .team_photo h2 {
    line-height: 52px;
    }
    h3 {
    font-size: 22px;
    }
    h4 {
    font-size: 18px;
    line-height: 18px;
    }
    h5 {
    font-size: 13px;
    }
    .footer_bottom {
    text-align: center;
    }
    .speed_box {
    width: auto;
    margin: 0 0 15px;
    float: none;
    clear: both;
    }
    header {
    background: #000 !important;
    height: auto;
    padding: 5px !important;
    height: 70px !important;
    }
    #logo {
    text-align: center;
    float: left;
    height: auto;
    padding: 5px 0;
    }
    #logo img {
    margin: 0px 0 0 !important;
    }
    body {
    font-size: 12px;
    margin-top: 80px;
    }
    .sub_title {
    margin-top: 0;
    margin-bottom: 25px;
    background: none;
    font-size: 16px;
    }
    .sub_title .plug {
    background: none;
    display: block;
    }
    .back2top {
    bottom: -20px;
    }
    .service_box {
    margin-top: -25px;
    }
    .intro {
    margin: -25px 0 0;
    height: 250px;
    background-attachment: scroll;
    background-size: cover;
    background-repeat: no-repeat;
    }
    .section2 .man_box {
    margin-top: -25px;
    }
    .section2 .intro {
    display: none;
    }
    .section3 .man_box {
    margin-top: -25px;
    }
    .section4 .man_box {
    margin-top: -25px;
    }
    .section5 .man_box {
    margin-top: -25px;
    }
    .section6 .man_box {
    margin-top: -25px;
    }
    .intro_pad .man_box {
    padding: 65px 0 0;
    }
    .section2 .top_box, .section4 .top_box, .section6 .top_box, .section8 .top_box {
    border-style: solid solid solid dashed;
    border-width: 0 0 20px 480px;
    }
    .section3 .top_box, .section5 .top_box, .section7 .top_box, .section9 .top_box {
    border-width: 20px 0 0 480px;
    border-style: solid dashed solid solid;
    }
    .section2 .bot_box, .section4 .bot_box, .section6 .bot_box, .section8 .bot_box {
    border-width: 0 480px 20px 0;
    border-style: solid dashed solid solid;
    }
    .section3 .bot_box, .section5 .bot_box, .section7 .bot_box, .section9 .bot_box {
    border-width: 20px 480px 0 0;
    border-style: solid dashed solid solid;
    }
    footer {
    margin: -25px 0 0;
    }
    .post {
    margin: 30px 0;
    padding-bottom: 30px;
    }
    .entry {
    font-size: 13px;
    }
    #blog {
    margin-bottom: 25px;
    padding: 25px 0 0;
    }
    .top_box {
    margin-bottom: -1px;
    }
    .bot_box {
    margin-top: -1px;
    }
    .paralax {
    position: absolute;
    top: 0px;
    bottom: auto;
    left: 0;
    width: 100%;
    height: auto;
    z-index: -1;
    }
    }
    @media (max-width: 400px) {
    .intro {
    margin: -25px 0;
    height: 200px;
    }
    .intro_pad {
    padding: 60px 0 0;
    }
    }
<?php
if(!empty($smof_data['custom_css'])){ if ($smof_data['custom_css']) {
    echo $smof_data['custom_css'];
}}?>

    .footer_widgets {
    padding-bottom: 40px;
    border-bottom: <?php if($smof_data['connect_with_us_switch'] == 0 ) {?>none;<?php } else {?>#2f2f2f solid 1px;<?php } ?>
    margin-bottom: 60px;
    }
    
    #portfolio_box .entry{
   		color:<?php echo $smof_data['port_lb_text_color'];?> !important;
    }
    
    #portfolio_box a{
   		color:<?php echo $smof_data['port_lb_link_color'];?>;
    }
    
    #portfolio_box a:hover{
   		color:<?php echo $smof_data['port_lb_link_color_h'];?>;
    }
<?php if($smof_data['lightbox_switch']==1) { ?>
    .mfp-wrap{
    background: #fff;
    }
    #portfolio_box {
    max-width: 100%;
    width: 100%;
    height: 100%;
    margin: 0 auto;
    color: #000 !important;
    position: relative;
    overflow: hidden;
    }
    #portfolio_box .entry {
    padding: 0 20px 20px;
    position: relative;
    height: 100%;
    margin-bottom: 0;
    padding-bottom: 0;
    }
    #portfolio_box .entry{
   		color:<?php echo $smof_data['port_lb_text_color'];?> !important;
    }
    
    #portfolio_box a{
   		color:<?php echo $smof_data['port_lb_link_color'];?>;
    }
    
    #portfolio_box a:hover{
   		color:<?php echo $smof_data['port_lb_link_color_h'];?>;
    }
    .mfp-wrap{
    width: <?php echo $smof_data['port_light_width']?>%;
    left: 50%;
    margin-left: -<?php echo (int)$smof_data['port_light_width'] / 2?>%;
    height: <?php echo $smof_data['port_light_height']?>%;
    }
    .mfp-content{
    width: 100%;
    height: 100%;
    }
    #portfolio_box .cycle-slideshow{
    height: 100%;
    width: 60%;
    /*margin-right: 5%;*/
    float: left;
    }
    @media (min-width:768px) {
    #portfolio_box .cycle-slideshow,
    #portfolio_box .entry{
    overflow-y: auto;
    }
    }
    @media (max-width:768px) {
    .mfp-wrap{
    width: 100%;
    left: 0;margin: 0 auto;
    min-height: 100%;
    height: auto;
    }
    #portfolio_box{
    overflow-y: auto !important;
    }
    #portfolio_box .cycle-slideshow{
    width: 100%;
    height: auto;
    margin-right: 0;
    }
    .cycle-prev, .cycle-next{
    top: 50px;
    bottom: 0;
    margin: 0;
    opacity: 1;
    }
    .cycle-controls .cycle-next{
    right: 0 !important;
    }
    #portfolio_box .mfp-close{
    position: fixed;
    }
    }
    #portfolio_box .cycle-slideshow img{
    width: 100%;
    }
    .cycle-controls .cycle-next{
    /*right: 30%;*/
    }
    #portfolio_box:hover .cycle-prev,
    #portfolio_box:hover .cycle-next{
    opacity: 1;
    }
<?php } ?>

    #services a {
    color: <?php echo $smof_data['serv_colors_link']; ?>;
    }
    #services a:hover {
    color: <?php echo $smof_data['serv_colors_link_h']; ?>;
    }

    #contact_us .form p{
    color:<?php echo $smof_data['cf_text_color']; ?>;
    }
    .widgettitle{
    color:<?php echo $smof_data['widget_title_color']; ?>;
    }
    .social_line li a {

    font-size: 20px;
    margin: 0 5px;
    color: <?php echo $smof_data['footer_social_color']; ?>;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    }

    .social_line li a:hover {

    color: <?php echo $smof_data['footer_social_color_h']; ?>;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    }
    .footer_bottom{
    color:<?php echo $smof_data['footer_text_color']; ?>;
    }
    .footer_bottom a{
    color:<?php echo $smof_data['footer_link_color']; ?>;
    }
    .footer_bottom a:hover{
    color:<?php echo $smof_data['footer_link_color_h']; ?>;
    }
<?php $rgba = gg_HEXvRGB($smof_data['price_table_bg']);?>
    .pt_title {

    font-size: 24px;
    font-weight: 300;
    text-transform: uppercase;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', .'.($smof_data['price_title_op']);?>);
    padding: 20px 0;
    color:<?php echo $smof_data['price_tit_feat_color']; ?>;
    }

    .pt_price {

    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', .'.($smof_data['price_price_op']);?>);
    color: <?php echo $smof_data['price_price_color']; ?>;
    font-size: 24px;
    font-weight: 300;
    padding: 20px 0;
    }

    .pt_feature {

    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', .'.($smof_data['price_features_op']);?>);
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 300;
    padding: 20px 0;
    border-bottom: rgba(0, 0, 0, 0.3) solid 1px;
    color:<?php echo $smof_data['price_tit_feat_color']; ?>;
    }

    .pt_pay {

    font-size: 28px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 40px 0;
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', .'.($smof_data['price_footer_op']);?>);
    }

    .pricing_table .span4:hover,
    .pricing_table .span3:hover{
    transition: all .5s;
    -webkit-transition: all .5s;
    border: <?php echo $smof_data['price_border_h']; ?> solid 10px;
    }

    .pricing_table .span4:hover .pt_price,
    .pricing_table .span3:hover .pt_price{

    color: <?php echo $smof_data['price_border_h']; ?>;
    }
    .margin-left-30 .pt_pay, .margin-left-30 .pt_feature, .margin-left-30 .pt_price, .margin-left-30 .pt_title{
    padding-left:30px;
    }

    .margin-left-15 .pt_pay, .margin-left-15 .pt_feature, .margin-left-15 .pt_price, .margin-left-15 .pt_title{
    padding-left:15px;
    }
<?php if($smof_data['text_uppercase'] == 1) { ?>
    h1, h2, h3, h4, h5, h6,.h1,.h2,.h3,.h4,.h5,.h6,.text-left,.text-center {
    text-transform: uppercase;
    }
<?php } ?>
    #contact_us input[type="text"],#contact_us input[type="email"],#contact_us textarea{

    padding: 10px;

    font-size: 16px;

    line-height: 24px;

    margin-bottom: 15px;

    -moz-box-sizing: border-box;

    -webkit-box-sizing: border-box;

    -o-box-sizing: border-box;

    color: <?php echo $smof_data['cf_input_text']; ?>;

    font-weight: 300;

    display: inline-block;

    margin-right: 1%;

    width: 99%;

<?php if(!empty($smof_data['cf_bg_color'])){
    $rgba = gg_HEXvRGB($smof_data['cf_bg_color']);?>
    background: rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', .'.($smof_data['cf_bg_color_op']);?>);
<?php }else{ ?>
    background: rgba(255, 255, 255, 0.1);
<?php } ?>

<?php if(!empty($smof_data['cf_input_border'])){
    $rgba = gg_HEXvRGB($smof_data['cf_input_border']);?>
    border: 1px solid rgba(<?php echo $rgba[0].', '.$rgba[1].', '.$rgba[2].', .'.($smof_data['cf_input_border_op']);?>);
<?php }else{ ?>
    border: 1px solid rgba(255, 255, 255, 0.3);
<?php } ?>


    border-radius: 25px;

    }
.team_photo .content h2{
	color:<?php echo $smof_data['about_colors_position_color']; ?>;
}
#portfolio_box h1, #portfolio_box h2, #portfolio_box h3, #portfolio_box h4, #portfolio_box h5, #portfolio_box h6{
	padding:0px !important;
}
<?php if($smof_data['lightbox_switch']==1){?>
.mfp-wrap{
	top:<?php echo (100-(int)$smof_data['port_light_height'])/2 ?>%;
}
<?php } ?>

#tabs .active a, a.button.white{
	color:<?php echo $smof_data['tab_active_white_btn']; ?> !important;
}

a.button.white:hover{
	background:<?php echo $smof_data['tab_active_white_btn']; ?> !important;
    color:<?php echo $smof_data['font_color_a_h']; ?> !important;
}

<?php if($smof_data['contact_map_type']==1){?>
#gmap{
<?php if ($smof_data['map_layout']=='Full width'){?>

background:url('http://maps.googleapis.com/maps/api/staticmap?center=<?php echo str_replace(' ','+',$smof_data['contact_gmap']); ?>&zoom=<?php echo $smof_data['contact_gmap_zoom']; ?>&size=640x640&scale=4&format=jpg&sensor=false') no-repeat;

<?php } else { ?>
 background:url('http://maps.googleapis.com/maps/api/staticmap?center=<?php echo str_replace(' ','+',$smof_data['contact_gmap']); ?>&zoom=<?php echo $smof_data['contact_gmap_zoom']; ?>&size=640x640&scale=4&format=jpg&&markers=size:mid%7Ccolor:red%7C<?php echo str_replace(' ','+',$smof_data['contact_gmap']); ?>&sensor=false') no-repeat;
<?php } ?>
background-position:center center;
background-size:cover;
}
<?php } ?>

#filters{padding:0;}
<?php



//==============

$style = ob_get_clean();
$style = compress($style);
file_put_contents((get_template_directory() . '/css/all-styles.css'), $style);
}

/*End of generation of css file*/


?>