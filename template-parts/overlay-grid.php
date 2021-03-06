<div class="_p-overlay">

	<div class="_p-overlay__close">
		<a href="#" class="_p-overlay__closebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	</div>

    <card data='{ data }' class="_p-rest__container"></card>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/riot/2.5.0/riot+compiler.min.js'></script>
	<script type="riot/tag">

	<card>

		<div class="_p-spinner__container active">
			<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
			</div>
		</div>

		<ul class="_p-tags__list _c-container">
			<li class="_p-tags__item _p-tags__item--active"><a onClick={ tags_list } href="<?php echo home_url(); ?>/wp-json/wp/v2/posts?_embed&per_page=100">全て</a></li>
			<?php
			$posttags = get_tags();
			if ($posttags):foreach($posttags as $tag): ?>
			<li class="_p-tags__item"><a onClick={ tags_list } href="<?php echo home_url(); ?>/wp-json/wp/v2/posts?tags=<?php echo esc_html($tag->term_id); ?>&_embed"><?php echo esc_html($tag->name); ?></a></li>
			<?php endforeach;endif; ?>
		</ul>


		<ul class="_p-entries _c-container _c-row">
			<li each={ data } class="_p-entries__item _c-row__col _c-row__col--lg-1-6 _c-row__col--md-1-6 _c-row__col--1-3">
				<section class="_p-entry-summary">
					<a href="{ link }" >
						<div class="_p-entry-summary__thumbnail">
							<img class="photo" src="{ _embedded["wp:featuredmedia"][0].media_details.sizes.thumbnail.source_url }" alt=""/>
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
			$('._p-tags__item').each(function(){
				$(this).removeClass('_p-tags__item--active');
			});
			$(e.target).parent().addClass('_p-tags__item--active');
			loadingThumbnails(e.target.href);
			$('._p-rest__container ._p-entries').fadeTo('slow', 0);
		}

		function loadingThumbnails(url){

			$('._p-spinner__container').addClass('active');

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
				image_loaded();
			});
		}

		function image_loaded(){

			var allImage = $("._p-rest__container ._p-entries img");
			var allImageCount = allImage.length;
			var completeImageCount = 0;
			var complete = false;

			for(var i = 0; i < allImageCount; i++){
				$(allImage[i]).bind("load", function(){
					completeImageCount ++;
					if (allImageCount == completeImageCount){
						$('._p-rest__container ._p-entries').fadeTo('slow', 1);
						$('._p-spinner__container').removeClass('active');
					}
				});
			}
		}

		loadingThumbnails(url);

	</card>

</script>

<script>
	riot.mount('*');
</script>

	<div class="_p-overlay__close">
		<a href="#" class="_p-overlay__closebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	</div>

</div>

