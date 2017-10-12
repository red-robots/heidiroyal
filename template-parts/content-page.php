<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
    <?php $row_1_image = get_field("row_1_image");?>
    <div class="row-1" <?php if($row_1_image):
        echo 'style="background-image: url('.$row_1_image['url'].');"';
    endif;?>>
    </div><!--.row-1-->
    <div class="row-2">
		<div class="wrapper cap">     
            <header class="row-1"><h1><?php the_title();?></h1></header>
            <div class="row-2 clear-bottom">
                <section class="col-1">
                    <div class="copy">
                        <?php the_content();?>
                    </div><!--.copy-->
                </section><!--.col-1-->
                <aside class="col-2">
                    <?php get_template_part("template-parts/content","circles");?>
                </aside><!--.col-2-->
            </div><!--.row-2-->
        </div><!--.wrapper-->
    </div><!--.row-2-->
</article><!-- #post-## -->
