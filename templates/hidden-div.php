<div id="ftg_<?php echo $ftg_id; ?>" style="display:none">
<?php
$ftg_gall = get_post_meta( get_the_id(), 'ftg_gallery', true );
echo do_shortcode($ftg_gall);
?>
</div>