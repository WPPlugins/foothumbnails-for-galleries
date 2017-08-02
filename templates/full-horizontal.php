<style>
.ftg-fullhor.ftg-<?php echo $ftg_id; ?> {<?php echo $ftg_wrap; ?> cursor: pointer; width: <?php echo $ftgwidth[1]  * 2.5 ; ?>px; }
<?php echo strip_tags($ftg_css); ?>
</style>

<div class="ftg-fullhor ftg-<?php echo $ftg_id; ?>">
<h2><?php echo $ftg_title ; ?></h2>
	<div class="ftg-content">
		<a href="#ftg_<?php echo $ftg_id; ?>" class="foobox ftgtrigger" data-modal-class="ftg_<?php echo $ftg_id; ?>"><?php echo $ftg_thumb ; ?></a>
		<p><?php echo $ftg_description ; ?></p>
	</div>
</div>

<?php 
	include ( FTG_PATH . 'templates/div-click.php');
	include ( FTG_PATH . 'templates/hidden-div.php');
?>