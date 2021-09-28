<?php get_header(); ?>

<div class="single">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php
        //check if post has category Artikel
        if(is_category('Berita')){
            $class = 'Berita';
        }else if(is_category('Artikel')){
            $class = 'Artikel';
        }
    ?>
    <div class="page-content <?php echo $class;?>">
        <h1><?php echo get_the_title(); ?></h1>
        <div class="post-content">
            <?php the_content();?>
        </div>
        <?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>