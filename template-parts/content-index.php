<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <?php $row_1_image = get_field("row_1_image");?>
    <div class="row-1" <?php if($row_1_image):
        echo 'style="background-image: url('.$row_1_image['url'].');"';
    endif;?>>
    </div><!--.row-1-->
    <section class="row-2">
		<div class="wrapper cap copy">
            <div class="wrapper">
                <?php the_content();?>
            </div><!--.wrapper-->
        </div><!--.wrapper-->
    </section><!--.row-2-->
    <section class="row-3">
        <div class="wrapper cap">
            <?php get_template_part("template-parts/content","circles");?>
        </div><!--.cap-->
    </section><!--.row-3-->
</article><!-- #post-## -->
