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
				<?php $post = get_post(70);
				setup_postdata($post);?>
				<?php $row_1_image = get_field("row_1_image");?>
				<div class="row-1" <?php if($row_1_image):
					echo 'style="background-image: url('.$row_1_image['url'].');"';
				endif;?>>
				</div><!--.row-1-->
				<div class="row-2">
					<div class="wrapper cap">
						<header class="row-1"><h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1></header>
						<div class="row-2 clear-bottom">
							<section class="col-1">
								<div class="copy">
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'acstarter' ); ?></p>
									<?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
								</div><!--.copy-->
							</section><!--.col-1-->
							<aside class="col-2">
								<?php get_template_part("template-parts/content","circles");?>
							</aside><!--.col-2-->
						</div><!--.row-2-->
					</div><!--.wrapper-->
				</div><!--.row-2-->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
