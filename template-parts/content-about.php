<?php
/**
 * Template part for displaying page content in page-about.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-about"); ?>>

   
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
            <div class="wrapper cap pagetitlediv">
                <header class="row-1"><h1><?php echo get_the_title(); ?></h1></header>
                <?php if (get_the_content()) { ?>
                <div class="entry-content"><?php the_content(); ?></div> 
                <?php } ?>
            </div>
            <?php  
            $args = array(
                'posts_per_page'   => -1,
                'post_type'        => 'lawyers',
                'post_status'      => 'publish'
            );
            $items = new WP_Query($args);
            if ( $items->have_posts() ) { ?>
                <?php $i=1; while ( $items->have_posts() ) : $items->the_post(); ?>
                <div class="wrapper cap block-info block<?php echo $i?>">
                    <div class="row-2 clear-bottom">
                        <aside class="col-1 copy">
                            <?php $name = get_the_title();
                            $linkedin = get_field("linkedin");
                            $email = get_field("email"); ?>
                            <header><h2><?php echo $name;?></h2></header>
                            <div class="spacer"></div>
                            <?php if($linkedin || $email) { ?>
                                <div class="social">
                                    <?php if($linkedin):?>
                                        <div class="linkedin">
                                            <a href="<?php echo $linkedin;?>">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div><!--linkedin-->
                                    <?php endif;
                                    if($email):?>
                                        <div class="email">
                                            <a href="mailto:<?php echo $email;?>">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </div><!--linkedin-->
                                    <?php endif;?>
                                </div><!--.social-->
                            <?php } else { ?>
                            <div class="nosocial"></div>
                            <?php } ?>

                            <?php $sidebar = get_field("sidebar");
                            if($sidebar):?>
                                <div class="list">
                                    <?php echo $sidebar;?>
                                </div><!--.list-->
                            <?php endif;?>
                        </aside><!--.col-1-->

                        <?php $pic = get_field('image'); ?>
                        <section class="col-2">
                            <div class="copy">
                                <?php if ($pic) { ?>
                                 <div class="profilepic"><img src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['title']; ?>" /></div>   
                                <?php } ?>
                                <?php the_content();?>
                            </div><!--.copy-->
                        </section><!--.col-2-->

                    </div>
                </div>
                <?php $i++; endwhile; wp_reset_postdata(); ?>
            <?php } ?>

        </div><!--.row-2-->
     


</article><!-- #post-## -->
