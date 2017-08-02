<style>
.ftg-thumbtitle.ftg-<?php echo $ftg_id; ?> {<?php echo $ftg_wrap; ?> max-width: <?php echo $ftgwidth[1];?>px; cursor: pointer; display: block; margin: 1em 0;}
<?php echo strip_tags($ftg_css); ?>
</style>

<div class="ftg-thumbtitle ftg-<?php echo $ftg_id; ?>">
	<a href="#ftg_<?php echo $ftg_id; ?>" class="foobox ftgtrigger" data-modal-class="ftg_<?php echo $ftg_id; ?>">
		<?php echo $ftg_thumb ; ?>
		<h2><?php echo $ftg_title ; ?></h2>
	</a>
</div>

<?php 
	include ( FTG_PATH . 'templates/div-click.php');
	include ( FTG_PATH . 'templates/hidden-div.php');
?>