<?php
global $smof_data;
?>

<section class="footer_widgets">
    <div class="row-fluid">

        <?php if ($smof_data['footer_widget'] == 1) { ?>

            <div class="span4 tweet">
                <h4 class="bold"><?php printf(__('RECENT TWEETS', 'GoGetThemes')); ?></h4>

                <div class="latest_tweet"></div>
                <a class="twitter-timeline"
                   href="https://twitter.com/<?php echo $smof_data['footer_widget_twitter']; ?>"
                   data-widget-id="<?php echo $smof_data['footer_widget_twitter_id']; ?>" data-theme=""
                   data-link-color="#cc0000" data-related="twitterapi,twitter" data-aria-polite="assertive" width="300"
                   height="500" lang="EN" data-tweet-limit="<?php echo $smof_data['footer_widget_twitter_num']; ?>"
                   data-chrome="nofooter transparent noheader noborders noscrollbar"></a>

                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>

            </div>

            <div class="span4 blog_feed">
                <h4 class="bold"><?php printf(__('RECENT POSTS', 'GoGetThemes')); ?></h4>

                <div class="latest_posts">
                    <?php

                    $category_id = get_cat_ID($smof_data['footer_widget_cat']);
                    $post_args = array(
                        'post_type' => 'post',
                        'cat' => $category_id,
                        'showposts' => $smof_data['footer_widget_post_num']
                    );
                    $the_query = new WP_Query($post_args);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();?>
                        <div class="fpost">
                            <span class="date"><?php the_time($smof_data['footer_widget_date_format']); ?></span>
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="span4 flickr_feed">
                <h4 class="bold"><?php printf(__('PHOTO STREAM', 'GoGetThemes')); ?></h4>

                <div class="latest_photos">
                    <!-- Start of Flickr Badge -->
                    <div id="flickr_badge_uber_wrapper">
                        <div id="flickr_badge_wrapper">
                            <script type="text/javascript"
                                    src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $smof_data['footer_widget_flickr_num']; ?>&amp;display=latest&amp;size=s&amp;layout=v&amp;source=user&amp;user=<?php echo urlencode($smof_data['footer_widget_flickr']); ?>"></script>
                        </div>
                    </div>
                    <!-- End of Flickr Badge -->
                </div>
            </div>

        <?php
        } else {
            dynamic_sidebar('footer_type_1');
            dynamic_sidebar('footer_type_2');
            dynamic_sidebar('footer_type_3');
        }?>
    </div>
</section>