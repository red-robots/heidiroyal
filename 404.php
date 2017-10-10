<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<?php $post = get_post(1);
				setup_postdata();?>
				<?php $row_1_image = get_field("row_1_image");?>
				<div class="row-1" <?php if($row_1_image):
					echo 'style="background-image: url('.$row_1_image['url'].');"';
				endif;?>>
				</div><!--.row-1-->
				<div class="row-2">
					<div class="wrapper cap">
						<section class="col-1">
							<header><h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1></header>
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'acstarter' ); ?></p>
						</section><!--.col-1-->
						<aside class="col-2">
							<?php $practice_areas_title = get_field("practice_areas_title","option");
							if($practice_areas_title):?>
								<header><h2><?php echo $practice_areas_title;?></h2></header>
							<?php endif;?>
							<div class="wrapper">
								<?php for($i=1;$i<4;$i++):
									$image = get_field("circle_{$i}_image","option");
									$title = get_field("circle_{$i}_title","option");
									$link = get_field("circle_{$i}_link","option");?>
									<div class="circle">
										<?php if($link):?>
											<a href="<?php echo $link;?>">
										<?php endif;?>
											<div class="wrapper" <?php if($image):
												echo 'style="background-image: url('.$image['sizes']['medium'].');"';
											endif;?>>
												<?php if($title):?>
													<div class="title">
														<?php echo $title;?>
													</div><!--.title-->
												<?php endif;?>
											</div><!--.wrapper-->
										<?php if($link):?>
											</a>
										<?php endif;?>
									</div><!--.circle-->
								<?php endfor;?>
							</div><!--.wrapper-->
						</aside><!--.col-2-->
					</div><!--.wrapper-->
				</div><!--.row-2-->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
