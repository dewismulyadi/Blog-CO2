<?php get_header(); ?>
<?php
    //check if post has category Artikel
    if(is_category('Berita')){
        $class = 'Berita';
        $bg = 'bg-yellowalt';
        $text = 'text-dark';
    }else if(is_category('Artikel')){
        $class = 'Artikel';
        $bg = 'bg-darkalt';
        $text = 'text-white';
    }
    ?>
    
<div class="container-fluid">
    <div class="py-4 text-center row col-12">
        <h2><strong><?php echo $class ?></strong></h2></a>
        <h4>Most Read :</h4>
    </div>

    <div class="mx-auto mb-5 row justify-content-center">
    <?php $the_query = new WP_Query(
        array(
            'post_type' => 'post',
            'posts_per_page' => '4',
            'category_name' => $class,
            'order'=> 'DESC',
            ) 
    ); ?>

        <?php if($the_query->have_posts() ) :
                while ($the_query->have_posts()): $the_query->the_post() ;
                    if ($the_query->current_post == 0) :
                        echo "<div style='clear:both'></div>";
                    else :
                        ?>
                        <div class="col-md-3 col-sm-12 <?php echo $bg ?> <?php echo $text ?> p-0 mx-auto rounded-alt mb-4">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded-top-alt">
                            <div class="mx-2">
                                <h4 class="pt-2 text-center card-title"><a class="<?php echo $text ?> text-decoration-none" href="<?php the_permalink(); ?>"> <?php the_title();?></a></h4>
                                <p class="p-3 text-center card-text text-break"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile;
            else :
                echo "<div class='content-error'><p>No posts available</p></div>";
            endif;?>
    </div>
    <div class="p-3 row ms-5">
    </div>
    

        <?php if(have_posts() ) : ?>
            <?php while(have_posts()) : the_post(); //standart wordpress loop ?>
            <div class="row ms-5">
                <h2><?php the_date() ?></h2>
            </div>
            <div class="ps-5">
                <div class="py-2 my-2 row justify-content-center">
                    <div class="col-md-3 col-sm-12 col-4">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h4><a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>"> <?php the_title();?></a></h4>
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
</div>
<?php get_footer(); ?>