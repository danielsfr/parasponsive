<?php
global $smof_data;
global $i;
?>
<!-- ========== PRICING TABLE ========== -->

<li id="pricing_table" class="section<?php echo $i; ?>">
<?php if ($smof_data['price_switch'] == 1) { ?>

    <section class="pricing_table_intro intro"

        <?php if ($smof_data['price_intro_img']) { ?>

            style="background-image: url(<?php echo $smof_data['price_intro_img']; ?>);"

        <?php } ?>>
        <div class="black_over">
            <div class="container text_center">
                <div class="intro_pad">
                    <?php if ($smof_data['price_intro_h1']) { ?>
                        <h1><?php printf(__($smof_data['price_intro_h1'])); ?></h1>
                    <?php } ?>
                    <?php if ($smof_data['price_intro_h2']) { ?>
                        <h2><?php printf(__($smof_data['price_intro_h2'])); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<section class="pricing_table_main man_box">
<div class="pricing_table_top top_box"></div>
<div class="pricing_table_mid mid_box">
<div class="container">
<?php if ($smof_data['price_title']) { ?>
    <h3 class="<?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['price_title'])); ?></h3>
<?php } ?>
<?php if ($smof_data['price_subtitle']) { ?>
    <div
        class="lines sub_title <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['price_subtitle'])); ?></div>
<?php } ?>

<div class="section_exc">
    <?php
    if ($smof_data['price_excerpt'] != "Select page") {
        $page = get_posts(array('name' => $smof_data['price_excerpt'], 'post_type' => 'page'));
        if ($page) {
            echo do_shortcode($page[0]->post_content);
        }
    }
    ?>
</div>

<?php

$the_query = new WP_Query(array(
    'post_type' => 'page', /* overrides default 'post' */
    'meta_key' => '_wp_page_template',
    'meta_value' => 'pt3-page.php'
));

while ($the_query->have_posts()) :

    $the_query->the_post();

    $price = get_field('money_value');
    if ($price) {
        $new_price = explode('.', $price);
        $top_price = $new_price[0];
        if (!empty($new_price[1])) {
            $sup_price = $new_price[1];
        } else {
            $sup_price = '00';
        }
    }

    $price2 = get_field('money_value2');
    if ($price2) {
        $new_price2 = explode('.', $price2);
        $top_price2 = $new_price2[0];
        if (!empty($new_price2[1])) {
            $sup_price2 = $new_price2[1];
        } else {
            $sup_price2 = '00';
        }
    }

    $price3 = get_field('money_value3');
    if ($price3) {
        $new_price3 = explode('.', $price3);
        $top_price3 = $new_price3[0];
        if (!empty($new_price3[1])) {
            $sup_price3 = $new_price3[1];
        } else {
            $sup_price3 = '00';
        }
    }

    $price_per = get_field('price_per');
    $price_per2 = get_field('price_per2');
    $price_per3 = get_field('price_per3');

    ?>



    <div class="pricing_table row-fluid">
        <div
            class="span4 <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left margin-left-30"; ?>">
            <div class="pt_title"><?php the_field('column_title'); ?></div>
            <div class="pt_price">
                <span><?php the_field('currency'); ?><?php echo $top_price; ?></span><sup><?php echo $sup_price; ?></sup><?php if ($price_per != 'one') {
                    echo '/' . $price_per;
                } ?>
            </div>

            <?php $rows = get_field('plan_features');

            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                }
            }?>

            <div class="pt_pay"><a
                    href="<?php the_field('button_link'); ?>"><?php __(the_field('button_text')); ?></a>
            </div>
        </div>
        <div
            class="span4 <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left margin-left-30"; ?>">
            <div class="pt_title"><?php __(the_field('column_title2')); ?></div>
            <div class="pt_price">
                <span><?php __(the_field('currency2')); ?><?php echo $top_price2; ?></span><sup><?php echo $sup_price2; ?></sup><?php if ($price_per2 != 'one') {
                    echo '/' . $price_per2;
                } ?>
            </div>

            <?php $rows = get_field('plan_features2');

            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                }
            }?>

            <div class="pt_pay"><a
                    href="<?php __(the_field('button_link2')); ?>"><?php __(the_field('button_text2')); ?></a>
            </div>
        </div>
        <div
            class="span4 <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left margin-left-30"; ?>">
            <div class="pt_title"><?php __(the_field('column_title3')); ?></div>
            <div class="pt_price">
                <span><?php __(the_field('currency3')); ?><?php echo $top_price3; ?></span><sup><?php echo $sup_price3; ?></sup><?php if ($price_per3 != 'one') {
                    echo '/' . $price_per3;
                } ?>
            </div>

            <?php $rows = get_field('plan_features3');

            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                }
            }?>

            <div class="pt_pay"><a
                    href="<?php the_field('button_link3'); ?>"><?php __(the_field('button_text3')); ?></a>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php

$the_query = new WP_Query(array(
    'post_type' => 'page', /* overrides default 'post' */
    'meta_key' => '_wp_page_template',
    'meta_value' => 'pt4-page.php'
));

while ($the_query->have_posts()) :

    $the_query->the_post();

    $price = get_field('money_value');
    if ($price) {
        $new_price = explode('.', $price);
        $top_price = $new_price[0];
        if (!empty($new_price[1])) {
            $sup_price = $new_price[1];
        } else {
            $sup_price = '00';
        }
    }

    $price2 = get_field('money_value2');
    if ($price2) {
        $new_price2 = explode('.', $price2);
        $top_price2 = $new_price2[0];
        if (!empty($new_price2[1])) {
            $sup_price2 = $new_price2[1];
        } else {
            $sup_price2 = '00';
        }
    }

    $price3 = get_field('money_value3');
    if ($price3) {
        $new_price3 = explode('.', $price3);
        $top_price3 = $new_price3[0];
        if (!empty($new_price3[1])) {
            $sup_price3 = $new_price3[1];
        } else {
            $sup_price3 = '00';
        }
    }

    $price4 = get_field('money_value4');
    if ($price4) {
        $new_price4 = explode('.', $price4);
        $top_price4 = $new_price4[0];
        if (!empty($new_price4[1])) {
            $sup_price4 = $new_price4[1];
        } else {
            $sup_price4 = '00';
        }
    }

    ?>

    <div class="pricing_table row-fluid">
        <div
            class="span3 <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left margin-left-15"; ?>">
            <div class="pt_title"><?php __(the_field('column_title')); ?></div>
            <div class="pt_price">
                <span><?php __(the_field('currency')); ?><?php echo $top_price; ?></span><sup><?php echo $sup_price; ?></sup>/<?php the_field('price_per'); ?>
            </div>

            <?php $rows = get_field('plan_features');

            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                }
            }?>

            <div class="pt_pay"><a
                    href="<?php the_field('four_button_url1'); ?>"><?php __(the_field('button_text')); ?></a>
            </div>
        </div>
        <div
            class="span3 <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left margin-left-15"; ?>">
            <div class="pt_title"><?php __(the_field('column_title2')); ?></div>
            <div class="pt_price">
                <span><?php __(the_field('currency2')); ?><?php echo $top_price2; ?></span><sup><?php echo $sup_price2; ?></sup>/<?php the_field('price_per2'); ?>
            </div>

            <?php $rows = get_field('plan_features2');

            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                }
            }?>

            <div class="pt_pay"><a
                    href="<?php the_field('four_button_url2'); ?>"><?php __(the_field('button_text2')); ?></a>
            </div>
        </div>
        <div
            class="span3 <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left margin-left-15"; ?>">
            <div class="pt_title"><?php __(the_field('column_title3')); ?></div>
            <div class="pt_price">
                <span><?php __(the_field('currency3')); ?><?php echo $top_price3; ?></span><sup><?php echo $sup_price3; ?></sup>/<?php the_field('price_per3'); ?>
            </div>

            <?php $rows = get_field('plan_features3');

            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                }
            }?>

            <div class="pt_pay"><a
                    href="<?php the_field('four_button_url3'); ?>"><?php __(the_field('button_text3')); ?></a>
            </div>
        </div>
        <div
            class="span3 <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left margin-left-15"; ?>">
            <div class="pt_title"><?php __(the_field('column_title4')); ?></div>
            <div class="pt_price">
                <span><?php __(the_field('currency4')); ?><?php echo $top_price4; ?></span><sup><?php echo $sup_price4; ?></sup>/<?php the_field('price_per4'); ?>
            </div>

            <?php $rows = get_field('plan_features4');

            if ($rows) {
                foreach ($rows as $row) {
                    echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                }
            }?>

            <div class="pt_pay"><a
                    href="<?php the_field('four_button_url4'); ?>"><?php __(the_field('button_text4')); ?></a>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php if ($smof_data['price_client'] == 1) { ?>

    <div class="c_title text_center"><?php printf(__($smof_data['price_client_title'])); ?></div>

    <div class="lines sub_title text_center c_quot">&quot;</div>

    <div class="hapy_boys cycle-slideshow" data-cycle-slides="> div"
         data-cycle-timeout="<?php echo $smof_data['happy_clients_delay']; ?>">
        <?php $client_args = array(
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array('post-format-quote')
                )
            ),
            'showposts' => $smof_data['price_client_num']
        );


        $the_query = new WP_Query($client_args);

        while ($the_query->have_posts()) :

            $the_query->the_post();?>


            <div class="c_block<?php if (has_post_thumbnail()) {
                echo " text_left";
            } else {
                echo " text_center";
            } ?>">
                <?php if (has_post_thumbnail()) {
                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                    $url = $thumb['0'];
                    ?>
                    <span class="testimonial_img pull-left">
                            	<img src="<?php echo $url; ?>" style="height:auto;">
                                <span class="c_author" style="width:100%;"><?php the_title(); ?></span>
                            </span>
                    <span class="c_entry pull-left">
                                <?php the_content(); ?>
                            </span>
                <?php } else { ?>
                    <span class="c_author" style="width:100%;"><?php the_title(); ?></span>
                    <span class="c_entry"><?php the_content(); ?></span>
                <?php } ?>
            </div>



        <?php endwhile; ?>
    </div>

<?php } ?>
</div>
</div>
<div class="pricing_table_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
</div>
</section>
</li>