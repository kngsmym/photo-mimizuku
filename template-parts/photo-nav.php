<?php  
$next_post = get_next_post();  
if (!empty( $next_post )):
$next_url = get_permalink( $next_post->ID );  
endif;  
$prev_poxt = get_previous_post();  
if (!empty( $prev_poxt  )):  
$prev_url = get_permalink( $prev_poxt->ID );  
endif;  
?>

<?php /*if(!is_home()): ?>
<div class="_p-globalnav">
	<ul class="_p-globalnav__list">
		<li class="_p-globalnav__item">
			<a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
		</li>
	</ul>
</div>
<?php endif;*/ ?>

<div class="_p-globalnav">
	<ul class="_p-globalnav__list">
	<?php if(!is_archive()): ?>
		<li class="_p-globalnav__item">
			<a href="<?php echo $next_url; ?>"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
		</li>
	<?php endif; ?>
		<li class="_p-globalnav__item">
			<a href="#" class="_p-overlay__trigger"><i class="fa fa-th" aria-hidden="true"></i></a>
		</li>
	<?php if(!is_archive()): ?>
		<li class="_p-globalnav__item">
			<a href="<?php echo $prev_url; ?>"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
		</li>
	<?php endif; ?>
	</ul>
</div>

