/**
 * Created with JetBrains PhpStorm.
 * User: bORm
 * Date: 28.08.13
 * Time: 21:24
 * To change this template use File | Settings | File Templates.
 */
jQuery.noConflict();

/** Fire up jQuery - let's dance!
 */
jQuery(document).ready(function($){
    var select = $('#head_menu_style');
    var selected = select.find(':selected').val();
    var patch = $('#head_menu_style_prev').val();
    var preview = $('#section-head_menu_style_prev');
    preview.append('<img id="img_header_preview" src="'+patch+selected+'.jpg" />');
    select
        .change(function () {
            selected = $(this).find(':selected').val();
            $('#img_header_preview').attr('src',patch+selected+".jpg");
        })
        .change();

});