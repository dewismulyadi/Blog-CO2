<?php get_header(); ?>
<?php
    //check if post has category Artikel
    if(is_category('Berita')){
        $class = 'Berita';
    }else if(is_category('Artikel')){
        $class = 'Artikel';
    }
    ?>
<div class="pt-4 container-fluid">
<?php if(have_posts()) : the_post(); ?>
    <div class="col-9 ps-4 ms-4 <?php echo $class;?>">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="p-4 row ps-4 ms-4">
        <div class="col-8">
            <div class="img-fluid img-medium">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid img-medium ">
                <p class="post"><?php the_content();?></p>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php endif; ?>
</div>
<?php get_footer(); ?>
