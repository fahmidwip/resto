<?php
$meta = $this->menu_m->select_meta()->row();
?>
<div class="page-footer">
	<div class="page-footer-inner">
		<?=date('Y'); ?> &copy; <?=$meta->meta_name;?> | Repost by <a href='#' title='#' target='_blank'>#</a>
		
	</div>
	<div class="scroll-to-top">
	    <i class="icon-arrow-up"></i>
	</div>
</div>