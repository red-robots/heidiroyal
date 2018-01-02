<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-contact"); ?>>
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
                    <?php $map = get_field("map");
                    if($map):
                        echo $map;
                    endif;?>
                </aside><!--.col-2-->
            </div><!--.row-2-->
        </div><!--.wrapper-->
    </div><!--.row-2-->
</article><!-- #post-## -->
