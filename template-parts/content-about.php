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
    <?php $row_1_image = get_field("row_1_image");?>
    <div class="row-1" <?php if($row_1_image):
        echo 'style="background-image: url('.$row_1_image['url'].');"';
    endif;?>>
    </div><!--.row-1-->
    <section class="row-2">
        <header><h1><?php the_title();?></h1></header>
        <div class="col-1">
            <?php $image = get_field("image");
            $name = get_field("name");
            $linkedin = get_field("linkedin");
            $email = get_field("email");
            if($image):?>
                <div class="headshot">
                    <div class="wrapper">
                        <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                    </div><!--.wrapper-->
                </div><!--.headshot-->
            <?php endif;
            if($name):?>
                <header><h2><?php echo $name;?></h2></header>
                <div class="spacer"></div><!--.spacer-->
            <?php endif;
            if($linkedin ||$email):?>
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
                            <a href="<?php echo $email;?>">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </div><!--linkedin-->
                    <?php endif;?>
                </div><!--.social-->
            <?php endif;?>
        </div><!--.col-1-->
        <div class="col-2">
            <?php the_content();?>
        </div><!--.col-1-->
    </section><!--.row-2-->
</article><!-- #post-## -->
