<div class="wrapper circles">
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
                            <div class="title-sub">
                                <?php echo $title;?>
                            </div><!--.title-sub-->
                        </div><!--.title-->
                    <?php endif;?>
                </div><!--.wrapper-->
            <?php if($link):?>
                </a>
            <?php endif;?>
        </div><!--.circle-->
    <?php endfor;?>
</div><!--.wrapper-->