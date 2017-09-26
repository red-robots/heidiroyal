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
        <?php the_content();?>
    </section><!--.row-2-->
    <section class="row-3">
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
    </section><!--.row-3-->
</article><!-- #post-## -->
