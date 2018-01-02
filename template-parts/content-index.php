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
    <?php $row_1_image = get_field("row_1_image");
    $row_1_image_mobile = get_field("row_1_image_mobile");?>
    <div class="row-1 <?php if($row_1_image_mobile) echo "mobile ";?>">
        <?php if($row_1_image):?>
            <img class="desktop" src="<?php echo $row_1_image['url'];?>" alt="<?php echo $row_1_image['alt'];?>">
        <?php endif;?>
        <?php if($row_1_image_mobile):?>
            <img class="mobile" src="<?php echo $row_1_image_mobile['url'];?>" alt="<?php echo $row_1_image_mobile['alt'];?>">
        <?php endif;?>
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
