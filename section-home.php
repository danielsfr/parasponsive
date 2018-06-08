<?php
global $smof_data;

$slider_flag = $smof_data['slider_switch'] == 1 && !empty($smof_data['slider_sc']);
$section_class = $slider_flag ? " slider-on" : "slider-off";
?>
<!-- ========== HOME SECTION ========== -->
<li id="home" class="<?php echo $section_class; ?>">
    <section class="slider">
        <?php if ($slider_flag) {
            echo do_shortcode('[layerslider id="' . $smof_data['slider_sc'] . '"]');
        } ?>
    </section>
</li>