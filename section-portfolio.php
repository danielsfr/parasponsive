<?php
global $smof_data;
global $i;
?>

<!-- ========== PORTFOLIO SECTION ========== -->

            <li id="portfolio" class="section<?php echo $i; ?>">
                <?php if ($smof_data['port_switch'] == 1) { ?>

    <section class="portfolio_intro intro"

        <?php if ($smof_data['port_intro_img']) { ?>

            style="background-image: url(<?php echo $smof_data['port_intro_img']; ?>);"

        <?php } ?>>
        <div class="black_over">
            <div class="container text_center">
                <div class="intro_pad">
                    <?php if ($smof_data['port_intro_h1']) { ?>
                        <h1><?php printf(__($smof_data['port_intro_h1'])); ?></h1>
                    <?php } ?>
                    <?php if ($smof_data['port_intro_h2']) { ?>
                        <h2><?php printf(__($smof_data['port_intro_h2'])); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<section class="portfolio_main man_box">
    <div class="portfolio_top top_box"></div>
    <div class="portfolio_mid mid_box">
        <div class="container">
            <?php if ($smof_data['port_title']) { ?>
                <h3 class="<?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['port_title'])); ?></h3>
            <?php } ?>
            <?php if ($smof_data['port_subtitle']) { ?>
                <div
                    class="lines sub_title <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['port_subtitle'])); ?></div>
            <?php } ?>

            <div class="section_exc">
                <?php
                if ($smof_data['port_excerpt'] != "Select page") {
                    $page = get_posts(array('name' => $smof_data['port_excerpt'], 'post_type' => 'page'));
                    if ($page) {
                        echo do_shortcode($page[0]->post_content);
                    }
                }
                ?>
            </div>
            <section id="options" class="clearfix">
                <ul id="filters" class="option-set clearfix" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*"
                           class="selected"><?php printf(__('show all', 'GoGetThemes')); ?></a></li>

                    <?php
                    if ($smof_data['port_categories_switch'] == '0') {
                        $taxonomies = get_terms('project-type', 'orderby=count&hide_empty=0');
                        foreach ($taxonomies as $tax) {
                            echo '<li><a href="#filter" data-option-value=".' . $tax->slug . '">' . $tax->name . '</a></li>';
                        }
                    } else {
                        foreach ($smof_data['port_categories_sorter']['enabled'] as $port_category_slug => $port_category) {
                            if ($port_category == 'placebo') {
                                continue;
                            }
                            echo '<li><a href="#filter" data-option-value=".' . $port_category_slug . '">' . $port_category . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </section>
            <div id="container" class="loading">
                <?php $port_args = array(
                    'post_type' => 'portfolio',
                    'showposts' => $smof_data['port_posts_num']
                );
                $the_query = new WP_Query($port_args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();?>
                    <div <?php post_class(); ?>>
                        <div class="iso_inner" data-id="<?php the_ID(); ?>">
                            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            $url = $thumb['0'];
                            ?>
                            <a class="portfolio_img_pop" href="<?php the_permalink(); ?>"><img
                                    src="<?php echo $url; ?>" alt="" width="280" height="280"/></a>

                            <div class="over_box">
                                <div class="over_box_pad">
                                    <div class="over_box_inner">
                                        <?php if ($smof_data['port_item_title_mod'] == 1) { ?>
                                            <span class="portfolio_name"><?php the_title(); ?></span>
                                        <?php } ?>
                                        <?php if ($smof_data['port_item_desc_mod'] == 1) { ?>
                                            <span
                                                class="portfolio_desc"><?php the_time('F d, Y'); ?></span>
                                        <?php } ?>
                                        <?php if ($smof_data['port_item_pp_mod'] == 1) { ?>
                                            <?php if (isset($smof_data['lightbox_switch']) && $smof_data['lightbox_switch'] == 1):
                                                // use prettyPhoto instead of popup
                                                ?>
                                                <?php if (function_exists("get_field") && get_field("youtube_link")):
                                                // for Youtube/Vimeo, set appropriate links
                                                ?>
                                                <a class="portfolio_pop"
                                                   rel="prettyPhoto[portfolio]"
                                                   href="<?php the_field("youtube_link"); ?>"><i
                                                        class="icon-search"></i></a>
                                            <?php else:
                                                // or just use featured image
                                                ?>
                                                <a class="portfolio_pop"
                                                   rel="prettyPhoto[portfolio]"
                                                   href="<?php echo $url; ?>"><i
                                                        class="icon-search"></i></a>
                                            <?php endif; ?>

                                            <?php else:
                                                // ajax popup
                                                if ( get_option('permalink_structure') ) {
                                                    $ajax_string = "?sender=prettyphoto";
                                                }
                                                else{
                                                    $ajax_string = "&sender=prettyphoto";
                                                }
                                                ?>
                                                <a class="portfolio_pop"
                                                   href="<?php the_permalink(); ?><?php echo $ajax_string; ?>"><i
                                                        class="icon-search"></i></a>
                                            <?php endif; ?>

                                        <?php }
                                        else{ // portfolio popup disabled, just echo permalink
                                            ?>
                                            <a class="portfolio_pop"
                                               href="<?php the_permalink(); ?>">
                                                <i class="icon-link"></i>
                                            </a>
                                        <?php

                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
            <?php if (!empty($smof_data['port_ajax'])) {
                if ($smof_data['port_ajax'] == 1) { ?>
                    <div class="text_center">
                        <a id="portfolio_more" href="<?php echo get_template_directory_uri() . '/ajax.php'; ?>"
                           class="load_more"><?php printf(__('Load more', 'GoGetThemes')); ?><br/><i
                                class="icon-chevron-down"></i></a>
                    </div>
                <?php }
            } ?>

            <?php if ($smof_data['lightbox_switch'] == 1) { ?>
                <script>
                    (function ($) {
                        $(document).ready(function () {
                            $(".over_box a").prettyPhoto({default_width: 1200, default_height: 720});
                        })
                    })(jQuery);
                </script>
            <?php } ?>

        </div>
    </div>
    <div class="portfolio_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
    </div>
</section>
</li>