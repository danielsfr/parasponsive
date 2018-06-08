<?php
global $smof_data;
?>
<section class="footer_bottom">
    <div class="row-fluid">
        <div class="span4 flogo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo $smof_data['flogo']; ?>" alt=""/></a>
        </div>
        <div class="span4 copyright">
            <?php if (!empty($smof_data['footer_copyright'])) {
                printf(__($smof_data['footer_copyright']));
            } ?>
        </div>
        <div class="span4 powered">
            <?php if (!empty($smof_data['footer_powered'])) {
                printf(__($smof_data['footer_powered']));
            } ?>
        </div>
    </div>
</section>