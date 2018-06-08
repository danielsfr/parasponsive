<?php
global $smof_data;
global $i;
?>

<!-- ========== SERVICES SECTION ========== -->

            <li id="services" class="section<?php echo $i; ?>">
                <?php if ($smof_data['serv_switch'] == 1) { ?>

    <section class="serv_intro intro"

        <?php if ($smof_data['serv_intro_img']) { ?>

            style="background-image: url(<?php echo $smof_data['serv_intro_img']; ?>);"

        <?php } ?>>
        <div class="black_over">
            <div class="container text_center">
                <div class="intro_pad">
                    <?php if ($smof_data['serv_intro_h1']) { ?>
                        <h1><?php printf(__($smof_data['serv_intro_h1'])); ?></h1>
                    <?php } ?>
                    <?php if ($smof_data['serv_intro_h2']) { ?>
                        <h2><?php printf(__($smof_data['serv_intro_h2'])); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<section class="service_box man_box">
    <div class="serv_top top_box"></div>
    <div class="serv_mid mid_box">
        <div class="container">
            <?php if ($smof_data['serv_title']) { ?>
                <h3 class="<?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['serv_title'])); ?></h3>
            <?php } ?>
            <?php if ($smof_data['serv_subtitle']) { ?>
                <div
                    class="lines sub_title <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['serv_subtitle'])); ?></div>
            <?php } ?>

            <div class="section_exc">
                <?php
                if ($smof_data['serv_excerpt'] != "Select page") {
                    $page = get_posts(array('name' => $smof_data['serv_excerpt'], 'post_type' => 'page'));
                    if ($page) {
                        echo do_shortcode($page[0]->post_content);
                    }
                } ?>
            </div>
            <?php if ($smof_data['serv_cor'] == "1") { ?>
                <div class="serv_corusel">
                    <div id="loaderImage" class="icon-rotate-right"></div>
                    <div class="mycont">
                        <!-- Carousel items -->
                        <ul class="mycarousel">
                            <?php $service_args = array(
                                'post_type' => 'post',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'post_format',
                                        'field' => 'slug',
                                        'terms' => array('post-format-link')
                                    )
                                ),
                                'showposts' => $smof_data['serv_posts_num']
                            );
                            $the_query = new WP_Query($service_args);
                            while ($the_query->have_posts()) :
                                $the_query->the_post();?>
                                <li class="item">
                                    <h4><?php the_title(); ?></h4>
                                    <?php $icon_url = get_field('icon_url');
                                    if (!empty($icon_url)) {
                                        echo '<a href="' . $icon_url . '" class="serv_link">';
                                    }
                                    $icon = get_field('icon_class');
                                    $icon_image = get_field('icon_image');
                                    if (!empty($icon)) {
                                        ?>
                                        <i class="<?php echo $icon; ?>"></i>
                                    <?php } else { ?>
                                        <img src="<?php echo $icon_image; ?>" alt=""/>
                                    <?php } ?>
                                    <?php if (!empty($icon_url)) {
                                        echo '</a>';
                                    } ?>
                                    <div class="serv_entry text_center">
                                        <?php
                                        $output = get_the_content(); // cache output
                                        if($smof_data['serv_excerpt_cut'] == 1 && strlen($output) > $smof_data['serv_excerpt_cut_num']){
                                            // if service trim is set and content length is longer, trim it
                                            echo substr($output, 0, $smof_data['serv_excerpt_cut_num']) . $smof_data['serv_excerpt_cut_text'];
                                        }
                                        else{
                                            // or just let it be
                                            echo $output;
                                        }
                                        ?>
                                    </div>
                                </li>

                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="serv_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
    </div>
</section>
</li>