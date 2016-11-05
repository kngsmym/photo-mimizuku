<div class="_p-overlay">

	<div class="_p-overlay__close">
		<a href="#" class="_p-overlay__closebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	</div>

    <card data='{ data }'></card>

<script src='http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/riot/2.5.0/riot+compiler.min.js'></script>
<script type="riot/tag">

	<card>

	<ul class="_p-tags__list _c-container">
		<li class="_p-tags__item"><a onClick={ tags_list } href="<?php echo home_url(); ?>/wp-json/wp/v2/posts?_embed&per_page=100">全て</a></li>
		<?php
		$posttags = get_tags();
		if ($posttags):foreach($posttags as $tag): ?>
		<li class="_p-tags__item"><a onClick={ tags_list } href="<?php echo home_url(); ?>/wp-json/wp/v2/posts?tags=<?php echo $tag->term_id; ?>&_embed"><?php echo $tag->name; ?></a></li>
		<?php endforeach;endif; ?>
	</ul>

		<ul class="_p-entries _c-container _c-row">
			<li each={ data } class="_p-entries__item _c-row__col _c-row__col--lg-1-8 _c-row__col--md-1-6 _c-row__col--1-3">
				<section class="_p-entry-summary">
					<a href="{ link }" >
						<div class="_p-entry-summary__thumbnail">
							<img src="{ _embedded["wp:featuredmedia"][0].media_details.sizes.thumbnail.source_url }" alt=""/>
						</div>

						<div class="_p-entry-summary__body">
							<h1 class="_p-entry-summary__title">{ title.rendered }</h1>
						</div>
					</a>
				</section>
			</li>
		</ul>

		var posts = this;
		var url = '<?php echo home_url(); ?>/wp-json/wp/v2/posts?_embed&per_page=100';

		tags_list(e){
			e.preventDefault();
			url = e.target.href;
			myupdate(url);
		}

		function myupdate(url){
			$.ajax({
				url: url,
				type:'GET',
				dataType: 'json',
				data : {
					filter: {
					}
				},
				timeout:10000,
			}).done(function( data ){
				posts.data = data
				posts.update()
			});
		}
		myupdate(url);

	</card>

</script>

<script>
	riot.mount('*');
</script>

	<div class="_p-overlay__close">
		<a href="#" class="_p-overlay__closebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	</div>

</div>

