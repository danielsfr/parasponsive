<?php
global $smof_data;

if ($smof_data['footer_social'] == 1) { // if social icons in footer enabled
    ?>

    <ul class="social_line">
        <?php if ($smof_data['footer_soc_skype']) { ?>
            <li><a target="_blank" href="tel:<?php echo $smof_data['footer_soc_skype']; ?>" title="Skype"
                   class="fsoc">S</a></li>
        <?php
        }
        if ($smof_data['footer_soc_tumblr']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_tumblr']; ?>" title="Tumblr"
                   class="fsoc">t</a></li>
        <?php
        }
        if ($smof_data['footer_soc_digg']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_digg']; ?>" title="Digg"
                   class="fsoc">></a></li>
        <?php
        }
        if ($smof_data['footer_soc_linkedin']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_linkedin']; ?>" title="LinkedIn"
                   class="fsoc">L</a></li>
        <?php
        }
        if ($smof_data['footer_soc_facebook']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_facebook']; ?>" title="Facebook"
                   class="fsoc">f</a></li>
        <?php
        }
        if ($smof_data['footer_soc_twitter']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_twitter']; ?>" title="Twitter"
                   class="fsoc">T</a></li>
        <?php
        }
        if ($smof_data['footer_soc_youtube']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_youtube']; ?>" title="YouTube"
                   class="fsoc">U</a></li>
        <?php
        }
        if ($smof_data['footer_soc_vimeo']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_vimeo']; ?>" title="Vimeo"
                   class="fsoc">V</a></li>
        <?php
        }
        if ($smof_data['footer_soc_rss']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_rss']; ?>" title="RSS"
                   class="fsoc">R</a></li>
        <?php
        }
        if ($smof_data['footer_soc_google']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_google']; ?>" title="Google Plus"
                   class="fsoc">+</a></li>
        <?php
        }
        if ($smof_data['footer_soc_flickr']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_flickr']; ?>" title="Flickr"
                   class="fsoc">F</a></li>
        <?php
        }
        #Update 1-06-2013
        if ($smof_data['footer_soc_dribbble']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_dribbble']; ?>" title="Dribbble"
                   class="fsoc">D</a></li>
        <?php
        }
        if ($smof_data['footer_soc_email']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_email']; ?>" title="Email"
                   class="fsoc">]</a></li>
        <?php
        }
        if ($smof_data['footer_soc_blogger']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_blogger']; ?>" title="Blogger"
                   class="fsoc">B</a></li>
        <?php
        }
        if ($smof_data['footer_soc_flattr']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_flattr']; ?>" title="Flattr"
                   class="fsoc">%</a></li>
        <?php
        }
        if ($smof_data['footer_soc_github']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_github']; ?>" title="Github"
                   class="fsoc">è</a></li>
        <?php
        }
        if ($smof_data['footer_soc_instagram']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_instagram']; ?>" title="Instagram"
                   class="fsoc">Ü</a></li>
        <?php
        }
        if ($smof_data['footer_soc_myspace']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_myspace']; ?>" title="MySpace"
                   class="fsoc">_</a></li>
        <?php
        }
        if ($smof_data['footer_soc_pinterest']) {
            ?>

            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_pinterest']; ?>" title="Pinterest"
                   class="fsoc">1</a></li>
        <?php
        }
        if ($smof_data['footer_soc_reddit']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_reddit']; ?>" title="Reddit"
                   class="fsoc"></a></li>
        <?php
        }
        if ($smof_data['footer_soc_soundcloud']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_soundcloud']; ?>" title="SoundCloud"
                   class="fsoc">s</a></li>
        <?php
        }
        if ($smof_data['footer_soc_stumbleupon']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_stumbleupon']; ?>"
                   title="Stumbleupon" class="fsoc">/</a></li>
        <?php
        }
        if ($smof_data['footer_soc_vk']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_vk']; ?>" title="VK"
                   class="fsoc">N</a></li>
        <?php
        }
        if ($smof_data['footer_soc_yahoo']) {
            ?>
            <li><a target="_blank" href="<?php echo $smof_data['footer_soc_yahoo']; ?>" title="Yahoo"
                   class="fsoc">Y</a></li>
        <?php } ?>
    </ul>

<?php } ?>