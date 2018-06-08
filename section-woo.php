<?php
global $smof_data;
global $woocommerce;
global $i;
?>

<!-- ========== WOO SECTION ========== -->

<li id="woo" class="section<?php echo $i; ?>">
<?php if ($smof_data['woo_switch'] == 1) { ?>

    <section class="woo_intro intro"
        <?php if ($smof_data['woo_intro_img']) { ?>
            style="background-image: url(<?php echo $smof_data['woo_intro_img']; ?>);"
        <?php } ?>>

        <div class="black_over">
            <div class="container text_center">
                <div class="intro_pad">
                    <?php if ($smof_data['woo_intro_h1']) { ?>
                        <h1><?php printf(__($smof_data['woo_intro_h1'])); ?></h1>
                    <?php } ?>
                    <?php if ($smof_data['woo_intro_h2']) { ?>
                        <h2><?php printf(__($smof_data['woo_intro_h2'])); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<section class="woo_main man_box">

    <!-- ==== BORDERTOP ==== -->
    <div class="woo_top top_box"></div>

    <div class="woo_mid section-mid mid_box">
        <div class="container">
            <?php if ($smof_data['woo_title']) { ?>
                <h1 class="<?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?> text-up"><?php printf(__($smof_data['woo_title'])); ?></h1>
            <?php } ?>
            <?php if ($smof_data['woo_subtitle']) { ?>
                <div
                    class="lines sub_title <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['woo_subtitle'])); ?></div>
            <?php } ?>

            <div class="section_exc">
                <?php
                if ($smof_data['woo_excerpt'] != "Select page") {
                    $page = get_posts(array('name' => $smof_data['woo_excerpt'], 'post_type' => 'page'));
                    if ($page) {
                        echo do_shortcode($page[0]->post_content);
                    }
                }
                ?>
            </div>

            <div id="woo" class="woocommerce">

                <?php
                if (!function_exists('is_woocommerce_activated')) {
                    function is_woocommerce_activated()
                    {
                        if (class_exists('woocommerce')) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
                if (is_woocommerce_activated() == true) {
                    if (!empty($smof_data['woo_post_number'])) {
                        $number = $smof_data['woo_post_number'];
                    }
                    if (!empty($smof_data['woo_type'])) {
                        if ($smof_data['woo_type'] === "Featured") {
                            $query_args = array('posts_per_page' => $number, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product');

                            $query_args['meta_query'] = $woocommerce->query->get_meta_query();
                            $query_args['meta_query'][] = array(
                                'key' => '_featured',
                                'value' => 'yes'
                            );

                            $r = new WP_Query($query_args);

                            if ($r->have_posts()) : ?>

                                <ul class="mycarousel3 product_list_widget">
                                    <?php while ($r->have_posts()) : $r->the_post();
                                        global $product; ?>

                                        <li><a class="image-clear"
                                               href="<?php echo esc_url(get_permalink($r->post->ID)); ?>"
                                               title="<?php echo esc_attr($r->post->post_title ? $r->post->post_title : $r->post->ID); ?>">
                                                <?php echo $product->get_image("medium"); ?>
                                                <?php if ($r->post->post_title) echo get_the_title($r->post->ID); else echo $r->post->ID; ?>
                                            </a> <?php echo $product->get_price_html(); ?></li>

                                    <?php endwhile; ?>
                                </ul>

                            <?php endif;

                            wp_reset_postdata();
                        } elseif ($smof_data['woo_type'] === "Top Rated") {
                            add_filter('posts_clauses', array($woocommerce->query, 'order_by_rating_post_clauses'));

                            $query_args = array('posts_per_page' => $number, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product');

                            $query_args['meta_query'] = $woocommerce->query->get_meta_query();

                            $top_rated_posts = new WP_Query($query_args);

                            if ($top_rated_posts->have_posts()) :                                            ?>
                                <ul class="mycarousel3 product_list_widget">
                                    <?php while ($top_rated_posts->have_posts()) : $top_rated_posts->the_post();
                                        global $product;
                                        ?>
                                        <li><a class="image-clear"
                                               href="<?php echo esc_url(get_permalink($top_rated_posts->post->ID)); ?>"
                                               title="<?php echo esc_attr($top_rated_posts->post->post_title ? $top_rated_posts->post->post_title : $top_rated_posts->post->ID); ?>">
                                                <?php echo $product->get_image("medium"); ?>
                                                <?php if ($top_rated_posts->post->post_title) echo get_the_title($top_rated_posts->post->ID); else echo $top_rated_posts->post->ID; ?>
                                            </a> <?php echo $product->get_rating_html(); ?><?php echo $product->get_price_html(); ?>
                                        </li>

                                    <?php endwhile; ?>
                                </ul>
                            <?php
                            endif;

                            wp_reset_query();
                            remove_filter('posts_clauses', array($woocommerce->query, 'order_by_rating_post_clauses'));
                        } elseif ($smof_data['woo_type'] === "Recent") {
                            $query_args = array('posts_per_page' => $number, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product');

                            $query_args['meta_query'] = array();

                            $query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();
                            $query_args['meta_query'] = array_filter($query_args['meta_query']);

                            $r = new WP_Query($query_args);

                            if ($r->have_posts()) {

                                echo '<ul class="mycarousel3 product_list_widget">';

                                while ($r->have_posts()) {
                                    $r->the_post();
                                    global $product;

                                    echo '<li>
                                                            <a class="image-clear" href="' . get_permalink() . '">
                                                                ' . (has_post_thumbnail() ? get_the_post_thumbnail($r->post->ID, 'medium') : woocommerce_placeholder_img('shop_thumbnail')) . ' ' . get_the_title() . '
                                                            </a> ' . $product->get_price_html() . '
                                                        </li>';
                                }

                                echo '</ul>';

                            }

                            wp_reset_postdata();
                        } elseif ($smof_data['woo_type'] === "Random") {
                            $query_args = array(
                                'post_type' => 'product',
                                'post_status' => 'publish',
                                'posts_per_page' => $number,
                                'orderby' => 'rand',
                                'no_found_rows' => 1
                            );

                            $query_args['meta_query'] = array();


                            $query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();
                            $query_args['meta_query'] = array_filter($query_args['meta_query']);

                            $query = new WP_Query($query_args);

                            if ($query->have_posts()) {

                                ?>

                                <ul class="mycarousel3 product_list_widget">
                                    <?php while ($query->have_posts()) : $query->the_post();
                                        global $product; ?>
                                        <li>
                                            <a class="image-clear" href="<?php the_permalink() ?>">
                                                <?php
                                                if (has_post_thumbnail())
                                                    the_post_thumbnail('shop_thumbnail');
                                                else
                                                    echo woocommerce_placeholder_img('shop_thumbnail');
                                                ?>
                                                <?php the_title() ?>
                                            </a>
                                            <?php echo $product->get_price_html() ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>

                            <?php
                            }

                            wp_reset_postdata();
                        }
                    }

                }
                ?>
            </div>


            <?php
            echo '<div class="section_exc">';
            if ($smof_data['woo_excerpt2'] != "Select page") {
                $page = get_posts(array('name' => $smof_data['woo_excerpt2'], 'post_type' => 'page'));
                if ($page) {
                    echo do_shortcode($page[0]->post_content);
                }
            }
            echo '</div>';
            ?>
        </div>
    </div>

    <!-- ==== BORDERBOTTOM ==== -->
    <div class="woo_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>

</section>
</li>