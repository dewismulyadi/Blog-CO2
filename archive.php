<?php get_header(); ?>
<div class="pt-3 container-fluid">
    <div class="mb-4 text-center">
        <h3 >Article</h3>
    </div>
    <div class="mx-4 text-center row">
        <?php if(have_posts() ) :
                while (have_posts()): the_post() ;?>
                    <div class="p-0 mx-2 bg-yellowalt col rounded-alt">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded-top-alt">
                        <div class="mx-2">
                            <h4 class="pt-4"><?php the_title( sprintf( '<a class="text-dark text-decoration-none"href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></h4>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php endwhile;
            else :
                echo "<div class='content-error'><p>No posts available</p></div>";
            endif;?>
    </div>
    <div class="p-4 m-4">
        <h3>Day, dd Month yyyy</h3>
    </div>
    <div class="px-4 mx-4">
        <div class="my-2 row">
        <?php while(have_posts()) : the_post(); //standart wordpress loop ?>
            <div class="col-4">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="p-2 img-fluid">
            </div>
            <div class="pt-4 col-8">
                <h4><a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>"> <?php the_title();?></a></h4>
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>