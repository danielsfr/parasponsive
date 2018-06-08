<?php
// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Footer Template
 *
 * @file           footer.php
 * @package        Parasponsive
 * @author         GoGetThemes
 * @copyright      2013 GoGetThemes
 * @license        license.txt
 * @version        Release: v1.0
 */

?>
<?php global $smof_data; ?>
<!-- ==========================FOOTER======================= -->
<footer>

<div class="container">
<?php if ($smof_data['connect_with_us_switch'] == 1) { ?>
    <section class="footer_intro">

        <?php if ($smof_data['footer_intro_h1']) { ?>
            <h1><?php printf(__($smof_data['footer_intro_h1'])); ?></h1>
        <?php } ?>
        <?php if ($smof_data['footer_intro_h2']) { ?>
            <h2><?php printf(__($smof_data['footer_intro_h2'])); ?></h2>
        <?php } ?>

        <?php get_template_part("part-footer-social"); ?>

    </section>
<?php } ?>

<?php get_template_part("part-footer-widget"); ?>
<?php get_template_part("part-footer-bottom"); ?>

</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>