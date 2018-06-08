<?php
global $smof_data;
global $i;
?>
<!-- ========== ABOUT TEAM ========== -->

<li id="about_us" class="section<?php echo $i; ?>">
<?php if ($smof_data['about_switch'] == 1) { ?>

    <section class="about_us_intro intro"

        <?php if ($smof_data['about_intro_img']) { ?>

            style="background-image: url(<?php echo $smof_data['about_intro_img']; ?>);"

        <?php } ?>>
        <div class="black_over">
            <div class="container text_center">
                <div class="intro_pad">
                    <?php if ($smof_data['about_intro_h1']) { ?>
                        <h1><?php printf(__($smof_data['about_intro_h1'])); ?></h1>
                    <?php } ?>
                    <?php if ($smof_data['about_intro_h2']) { ?>
                        <h2><?php printf(__($smof_data['about_intro_h2'])); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<section class="about_us_main man_box">
<div class="about_us_top top_box"></div>
<div class="about_us_mid mid_box">
<div class="container">
<?php if ($smof_data['about_title']) { ?>
    <h3 class="<?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(_($smof_data['about_title'])); ?></h3>
<?php } ?>
<?php if ($smof_data['about_subtitle']) { ?>
    <div
        class="lines sub_title <?php if ($smof_data['titles_position'] == 1) echo "text_center"; else echo "text_left"; ?>"><?php printf(__($smof_data['about_subtitle'])); ?></div>
<?php } ?>

<div class="section_exc"><?php
    if ($smof_data['about_excerpt'] != "Select page") {
        $page = get_posts(array('name' => $smof_data['about_excerpt'], 'post_type' => 'page'));
        if ($page) {
            echo do_shortcode($page[0]->post_content);
        }
    }
    ?></div>
<?php if ($smof_data['about_cor'] == "1") { ?>
    <div class="team_corusel">
    <div class="mycont">
    <!-- Carousel items -->
    <ul class="mycarousel2">
    <?php $team_args = array(
        'post_type' => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => array('post-format-image')
            )
        ),
        'posts_per_page' => -1
    );


    $the_query = new WP_Query($team_args);

    while ($the_query->have_posts()) :

        $the_query->the_post();?>

        <li class="item text_center">
        <div class="team_photo">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {
                echo '<img src="' . get_template_directory_uri() . '/images/800x800.jpg" />';
            }?>

            <div class="mask mask-1"></div>
            <div class="mask mask-2"></div>
            <div class="content">
                <h2><?php __(the_field('person_position')); ?></h2>
            </div>
        </div>
        <div class="team_name"><?php the_title(); ?></div>
        <div class="team_entry">
            <?php the_content(); ?>
        </div>
        <div class="team_social">
        <?php if ($smof_data['about_social_icon'] == 1) {
            $fb = get_field("facebook_url");
            $twit = get_field("twitter");
            $gplus = get_field("google");
            $inst = get_field("instagram");
            $skype = get_field("skype");
            $tumblr = get_field("tumblr");
            $digg = get_field("digg");
            $linkedin = get_field("linkedin");
            $youtube = get_field("youtube");
            $vimeo = get_field("vimeo");
            $flickr = get_field("flickr");
            $dribbble = get_field("dribbble");
            $email = get_field("email");
            $blogger = get_field("blogger");
            $flattr = get_field("flattr");
            $github = get_field("github");
            $myspace = get_field("myspace");
            $pinterest = get_field("pinterest");
            $reddit = get_field("reddit");
            $soundcloud = get_field("soundcloud");
            $stumbleupon = get_field("stumbleupon");
            $vk = get_field("vk");
            $yahoo = get_field("yahoo");
            if ($twit) {
                ?>

                <a href="<?php echo $twit; ?>" class="soc_font" data-toggle="tooltip"
                   title="Twitter"><i class="icon-twitter"></i></a>

            <?php
            }
            if ($fb) {
                ?>

                <a href="<?php echo $fb; ?>" class="soc_font" data-toggle="tooltip"
                   title="Facebook"><i class="icon-facebook"></i></a>

            <?php
            }
            if ($gplus) {
                ?>

                <a href="<?php echo $gplus; ?>" class="soc_font" data-toggle="tooltip"
                   title="Google Plus"><i class="icon-google-plus"></i></a>

            <?php
            }
            if ($inst) {
                ?>

                <a href="<?php echo $inst; ?>" class="soc_font" data-toggle="tooltip"
                   title="Instagram"><i class="icon-instagram"></i></a>

            <?php
            }
            if ($skype) {
                ?>

                <a href="<?php echo $skype; ?>" class="soc_font" data-toggle="tooltip"
                   title="Skype"><i class="icon-skype"></i></a>

            <?php
            }
            if ($tumblr) {
                ?>

                <a href="<?php echo $tumblr; ?>" class="soc_font" data-toggle="tooltip"
                   title="Tumblr"><i class="icon-tumblr"></i></a>

            <?php
            }
            if ($digg) {
                ?>

                <a href="<?php echo $digg; ?>" class="fsoc" data-toggle="tooltip"
                   title="Digg">></a>

            <?php
            }
            if ($linkedin) {
                ?>

                <a href="<?php echo $linkedin; ?>" class="soc_font" data-toggle="tooltip"
                   title="Linkedin"><i class="icon-linkedin"></i></a>

            <?php
            }
            if ($youtube) {
                ?>

                <a href="<?php echo $youtube; ?>" class="soc_font" data-toggle="tooltip"
                   title="Youtube"><i class="icon-youtube"></i></a>

            <?php
            }
            if ($vimeo) {
                ?>

                <a href="<?php echo $vimeo; ?>" class="soc_font" data-toggle="tooltip"
                   title="Vimeo"><i class="icon-vimeo"></i></a>

            <?php
            }
            if ($flickr) {
                ?>

                <a href="<?php echo $flickr; ?>" class="soc_font" data-toggle="tooltip"
                   title="Flickr"><i class="icon-flickr"></i></a>

            <?php
            }
            if ($dribbble) {
                ?>

                <a href="<?php echo $dribbble; ?>" class="soc_font" data-toggle="tooltip"
                   title="Dribbble"><i class="icon-dribbble"></i></a>

            <?php
            }
            if ($email) {
                ?>

                <a href="mailto:<?php echo $email; ?>" class="fsoc" data-toggle="tooltip"
                   title="Email">]</a>

            <?php
            }
            if ($blogger) {
                ?>

                <a href="<?php echo $blogger; ?>" class="fsoc" data-toggle="tooltip"
                   title="Blogger">B</a>

            <?php
            }
            if ($flattr) {
                ?>

                <a href="<?php echo $flattr; ?>" class="fsoc" data-toggle="tooltip"
                   title="Flattr">%</a>

            <?php
            }
            if ($github) {
                ?>

                <a href="<?php echo $github; ?>" class="soc_font" data-toggle="tooltip"
                   title="Github"><i class="icon-github"></i></a>

            <?php
            }
            if ($myspace) {
                ?>

                <a href="<?php echo $myspace; ?>" class="fsoc" data-toggle="tooltip"
                   title="Myspace">_</a>

            <?php
            }
            if ($pinterest) {
                ?>

                <a href="<?php echo $pinterest; ?>" class="soc_font" data-toggle="tooltip"
                   title="Pinterest"><i class="icon-pinterest"></i></a>

            <?php
            }
            if ($reddit) {
                ?>

                <a href="<?php echo $reddit; ?>" class="soc_font" data-toggle="tooltip"
                   title="Reddit"><i class="icon-reddit"></i></a>

            <?php
            }
            if ($soundcloud) {
                ?>

                <a href="<?php echo $soundcloud; ?>" class="fsoc" data-toggle="tooltip"
                   title="Soundcloud">s</a>

            <?php
            }
            if ($stumbleupon) {
                ?>

                <a href="<?php echo $stumbleupon; ?>" class="fsoc" data-toggle="tooltip"
                   title="Stumbleupon">/</a>

            <?php
            }
            if ($vk) {
                ?>

                <a href="<?php echo $vk; ?>" class="soc_font" data-toggle="tooltip"
                   title="VK"><i class="icon-vk"></i></a>

            <?php
            }
            if ($yahoo) {
                ?>

                <a href="<?php echo $yahoo; ?>" class="fsoc" data-toggle="tooltip"
                   title="Yahoo">Y</a>

            <?php
            }


        } ?>
        </div>
        </li>

    <?php endwhile; ?>
    </ul>
    </div>
    </div>
<?php } ?>

<?php if ($smof_data['about_skills'] == 1) { ?>

    <div class="our_skills">
        <script>
            //<![CDATA[
            // KNOB
            jQuery(document).ready(function ($) {
                $('.knob-1').waypoint(function () {
                    $('.knob-1').knob();
                    if ($('.knob-1').val() == 0) {
                        $({
                            value: 0
                        }).animate({
                            value: $('.knob-1').attr("data-rel")
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function () {
                                $('.knob-1').val(Math.ceil(this.value)).trigger('change');
                            }
                        });
                    }
                }, {
                    triggerOnce: true,
                    offset: function () {
                        return $(window).height() - $(this).outerHeight();
                    }
                });
                $('.knob-2').waypoint(function () {
                    $('.knob-2').knob();
                    if ($('.knob-2').val() == 0) {
                        $({
                            value: 0
                        }).animate({
                            value: $('.knob-2').attr("data-rel")
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function () {
                                $('.knob-2').val(Math.ceil(this.value)).trigger('change');
                            }
                        });
                    }
                }, {
                    triggerOnce: true,
                    offset: function () {
                        return $(window).height() - $(this).outerHeight();
                    }
                });
                $('.knob-3').waypoint(function () {
                    $('.knob-3').knob();
                    if ($('.knob-3').val() == 0) {
                        $({
                            value: 0
                        }).animate({
                            value: $('.knob-3').attr("data-rel")
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function () {
                                $('.knob-3').val(Math.ceil(this.value)).trigger('change');
                            }
                        });
                    }
                }, {
                    triggerOnce: true,
                    offset: function () {
                        return $(window).height() - $(this).outerHeight();
                    }
                });
                $('.knob-4').waypoint(function () {
                    $('.knob-4').knob();
                    if ($('.knob-4').val() == 0) {
                        $({
                            value: 0
                        }).animate({
                            value: $('.knob-4').attr("data-rel")
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function () {
                                $('.knob-4').val(Math.ceil(this.value)).trigger('change');
                            }
                        });
                    }
                }, {
                    triggerOnce: true,
                    offset: function () {
                        return $(window).height() - $(this).outerHeight();
                    }
                });
                $('.knob-5').waypoint(function () {
                    $('.knob-5').knob();
                    if ($('.knob-5').val() == 0) {
                        $({
                            value: 0
                        }).animate({
                            value: $('.knob-5').attr("data-rel")
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function () {
                                $('.knob-5').val(Math.ceil(this.value)).trigger('change');
                            }
                        });
                    }
                }, {
                    triggerOnce: true,
                    offset: function () {
                        return $(window).height() - $(this).outerHeight();
                    }
                });
            });
            //]]>
        </script>
        <h4 class="text_center"><?php printf(__($smof_data['about_skill'])); ?></h4>

        <div class="speed_container">
            <div class="speed_box">
                <div class="knob_box">
                    <input data-displayPrevious="false" data-readonly="true" type="text"
                           data-bgColor="rgba(255,255,255,0.2)"
                           data-fgColor="<?php echo $smof_data['skill_color_1']; ?>" data-width="160"
                           data-height="100" class="knob-1"
                           data-rel="<?php echo $smof_data['about_skill_v_1']; ?>" value="0"
                           data-anglearc="180" data-angleoffset="-90" data-max="100">
                </div>
                <div class="knob_title">
                    <?php printf(__($smof_data['about_skill_t_1'])); ?>
                </div>
            </div>
            <div class="speed_box">
                <div class="knob_box">
                    <input data-displayPrevious="false" data-readonly="true" type="text"
                           data-bgColor="rgba(255,255,255,0.2)"
                           data-fgColor="<?php echo $smof_data['skill_color_2']; ?>" data-width="160"
                           data-height="100" class="knob-2"
                           data-rel="<?php echo $smof_data['about_skill_v_2']; ?>" value="0"
                           data-anglearc="180" data-angleoffset="-90" data-max="100">
                </div>
                <div class="knob_title">
                    <?php printf(__($smof_data['about_skill_t_2'])); ?>
                </div>
            </div>
            <div class="speed_box">
                <div class="knob_box">
                    <input data-displayPrevious="false" data-readonly="true" type="text"
                           data-bgColor="rgba(255,255,255,0.2)"
                           data-fgColor="<?php echo $smof_data['skill_color_3']; ?>" data-width="160"
                           data-height="100" class="knob-3"
                           data-rel="<?php echo $smof_data['about_skill_v_3']; ?>" value="0"
                           data-anglearc="180" data-angleoffset="-90" data-max="100">
                </div>
                <div class="knob_title">
                    <?php printf(__($smof_data['about_skill_t_3'])); ?>
                </div>
            </div>
            <div class="speed_box">
                <div class="knob_box">
                    <input data-displayPrevious="false" data-readonly="true" type="text"
                           data-bgColor="rgba(255,255,255,0.2)"
                           data-fgColor="<?php echo $smof_data['skill_color_4']; ?>" data-width="160"
                           data-height="100" class="knob-4"
                           data-rel="<?php echo $smof_data['about_skill_v_4']; ?>" value="0"
                           data-anglearc="180" data-angleoffset="-90" data-max="100">
                </div>
                <div class="knob_title">
                    <?php printf(__($smof_data['about_skill_t_4'])); ?>
                </div>
            </div>
            <div class="speed_box">
                <div class="knob_box">
                    <input data-displayPrevious="false" data-readonly="true" type="text"
                           data-bgColor="rgba(255,255,255,0.2)"
                           data-fgColor="<?php echo $smof_data['skill_color_5']; ?>" data-width="160"
                           data-height="100" class="knob-5"
                           data-rel="<?php echo $smof_data['about_skill_v_5']; ?>" value="0"
                           data-anglearc="180" data-angleoffset="-90" data-max="100">
                </div>
                <div class="knob_title">
                    <?php printf(__($smof_data['about_skill_t_5'])); ?>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
</div>
</div>
<div class="about_us_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a></div>
</section>
</li>