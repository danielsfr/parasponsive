<?php
global $smof_data;
global $i;
?>
<!-- ========== CONTACT US ========== -->

            <li id="contact_us" class="section<?php echo $i; ?>">
                <?php if ($smof_data['contact_switch'] == 1) { ?>

    <section class="contact_us_intro intro"

        <?php if ($smof_data['contact_intro_img']) { ?>

            style="background-image: url(<?php echo $smof_data['contact_intro_img']; ?>);"

        <?php } ?>>
        <div class="black_over">
            <div class="container text_center">
                <div class="intro_pad">
                    <?php if ($smof_data['contact_intro_h1']) { ?>
                        <h1><?php printf(__($smof_data['contact_intro_h1'])); ?></h1>
                    <?php } ?>
                    <?php if ($smof_data['contact_intro_h2']) { ?>
                        <h2><?php printf(__($smof_data['contact_intro_h2'])); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<section class="contact_us_main man_box">
    <div class="contact_us_top top_box"></div>
    <div class="contact_us_mid mid_box">
        <div class="container">
            <?php if ($smof_data['contact_title']) { ?>
                <h3 class="<?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['contact_title'])); ?></h3>
            <?php } ?>
            <?php if ($smof_data['contact_subtitle']) { ?>
                <div
                    class="lines sub_title <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['contact_subtitle'])); ?></div>
            <?php
            }
            if ($smof_data['map_layout'] != 'Container width')
                echo "</div>";

            ?>

            <?php if ($smof_data['contact_map'] == 1 && $smof_data['map_layout'] !== 'In one row with contact form') { ?>

                <div class="google_map">
                    <div class="gmap" id="gmap"></div>
                </div>

            <?php
            }
            if ($smof_data['map_layout'] != 'Container width')
                echo '<div class="container">';
            ?>

            <div class="section_exc"><?php
                if ($smof_data['contact_excerpt'] != "Select page") {
                    $page = get_posts(array('name' => $smof_data['contact_excerpt'], 'post_type' => 'page'));
                    if ($page) {
                        echo do_shortcode($page[0]->post_content);
                    }
                }
                ?>
            </div>

            <?php if ($smof_data['contact_form_det'] == 1) {
                ?>

                <div class="form">
                    <div class="row-fluid">
                        <?php if ($smof_data['map_layout'] == 'In one row with contact form') { ?>
                            <div class="span4">
                                <?php if ($smof_data['contact_map'] == 1 && $smof_data['map_layout'] == 'In one row with contact form') { ?>

                                    <div class="google_map">
                                        <div class="gmap" id="gmap"></div>
                                    </div>

                                <?php
                                } ?>

                            </div>
                        <?php } ?>
                        <div
                            class="<?php if ($smof_data['map_layout'] == 'In one row with contact form') echo "span4"; else echo "span8"; ?>">
                            <h4 class="bold"><?php printf(__($smof_data['cf_title'])); ?></h4>
                            <?php echo do_shortcode($smof_data['email']); ?>
                        </div>
                        <div class="span4">
                            <h4 class="bold"><?php printf(__($smof_data['det_title'])); ?></h4>

                            <div class="more_info_box">
                                <?php printf(__($smof_data['contact_info'])); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    <div class="contact_us_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
    </div>
</section>
</li>