<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?>>
    <?php $row_1_image = get_field("row_1_image");?>
    <div class="row-1" <?php if($row_1_image):
        echo 'style="background-image: url('.$row_1_image['url'].');"';
    endif;?>>
    </div><!--.row-1-->
    <div class="row-2">
		<div class="wrapper cap">
            <section class="col-1">
                <header><h1><?php the_title();?></h1></header>
                <?php the_content();?>
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
</article><!-- #post-## -->
