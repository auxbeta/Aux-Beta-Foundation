				<div id="pre-footer" class="padded cf">
					
					<div class="centered">
							<a href="/retailers"><h2 class="centered theme-font-bold">Where to Buy</h2></a>
					</div>
					
						<!-- Retailers Post Type Loop -->
						<?php $queryObject = new WP_Query( 'post_type=retailers&orderby=menu_order&order=asc&posts_per_page=7' );
						if ($queryObject->have_posts()) { ?> 
						<ul class="grid-x centered main-container"> <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
						<div class="cell small-3 medium-1"	
							<div class="inner-article cf">
								<header class="article-header">
	<!-- 											<div class="home-img-cont cf centered" style="background: url'<?php the_post_thumbnail( 'full' ); ?>') no-repeat;')"> -->
								</header>
								<section>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'bones-thumb-640', array( 'class' => 'hover-gray img-width-contain' ) );
								} else { ?> 
								<img src="<?php echo esc_url( get_theme_mod( 'logo-upload' ) ); ?>" alt="<?php the_title(); ?>" class="img-width-contain" />
								<?php } ?> 																				
								</a>
							
								<?php the_content(); ?>
								</section>
								<footer>
	<!-- 										<div class="single-title home-title centered top-pad product-header" ><?php the_title(); ?></div> -->
								</footer>
							</div>
					    <?php } ?> </ul> <?php } ?>
						</div>
				</div>
