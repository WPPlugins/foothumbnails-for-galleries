<script>
	jQuery("ftg-<?php echo $ftg_id; ?>").click(function($){
		 window.location=$(this).find("a").attr("href"); 
		 return false;
	});
</script>