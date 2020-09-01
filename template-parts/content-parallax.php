<?php /* The template for displaying the Parallax Home Sections */ ?>

				<?php $queryObject = new WP_Query( 'post_type=home_sections&posts_per_page=3&orderby=menu_order&order=asc' );
				// The Loop!
				if ($queryObject->have_posts()) {
				    while ($queryObject->have_posts()) { $queryObject->the_post(); 
				$post_image_id = get_post_thumbnail_id($post->ID);
						if ($post_image_id) {
							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
							if ($thumbnail) (string)$thumbnail = $thumbnail[0];
						}?>	
				<section id="slide-<?php echo $post->menu_order;?>" class="homeSlide">
				    <div class="bcg"
				         style="background: url('<?php echo $thumbnail; ?>') no-repeat;"
					     data-center="background-position: 50% 0px;"
				         data-top-bottom="background-position: 50% -200px;"
				         data-anchor-target="#slide-<?php echo $post->menu_order;?>" >
				        <div class="hsContainer"
					         data-center="background-position: 50% 0px;"
					         data-top-bottom="background-position: 50% 200px;" >
				            <div class="hsContent"
					             data-center="opacity: 2"
				                 data-106-top="opacity: 0"
								 data-anchor-target="#slide-<?php echo $post->menu_order;?> h2" >
								<div class="wrap">
									<div class="centered">
										<h2 class="parallax-title theme-font-bold"><?php the_title(); ?></h2>
									</div>
								</div>	
				            </div><!-- end .hsContent -->
				        </div><!-- end .hsContianer -->
				    </div><!-- end .bcg -->
				</section>
				    <div class="bottom-parallax entry-content cf">
						<div class="valign">
							<?php the_content(); ?>
						</div><!-- end .valign -->
				    </div><!-- end .bottom-parallax -->
				<?php }  } ?>
			</div>
