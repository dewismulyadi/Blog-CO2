<?php get_header(); ?>
    <div class="banner">
        <div class="kiri">
        <h3>Kumpulan Artikel dan Berita Terkini</h3>
        </div>
        <div class="kanan">
            <img src="<?php echo get_template_directory_uri();?>/image/perpus.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <h3>SELAMAT DATANG DIKUMPULAN 
            ARTIKEL DAN BERITA</h3>
        <h5>Terupdate dan Terpercaya</h5>
        <div class="sambutan">
        <p>Kami hadir dalam mengumpulkan berita dan artikel dari semua sumber nasional, internasional dan juga sumber terpercaya dan selalu update dalam mengumpulkan berita. </p>
        <p>Kami menerima kiriman yaitu berupa artikel apabila artikel yang kami terima layak dan pantas untuk dipost dalam we kami</p>    
        <div class="button">
            <a class="btn" href="">Lihat Detail</a>
        </div>
    </div>
    </div>
    <div class="container">
        <h3>Artikel</h3>
        <p>Artikel paling banyak dibaca : </p>
    </div>
<div class="artikel">
        <?php
			$recent = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => '4',
                    'category_name' => 'Artikel',
					'order'=> 'DESC',
				)
			);
			if($recent->have_posts()) :
				while ($recent->have_posts()):$recent->the_post();
					if ($recent->current_post == 0) :
						echo "<div style='clear:both'></div>";
					else :
						?>
                            <article id="post-<?php the_ID(); ?>" class="post-outer" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                            <div class="post-inner">
                            <div class="entry-thumbnail">
                                <a class="thumb-link" href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>"/>
                                </a>
                            </div>
                            <div class="entry-content">
                                <h3 class="entry-title" itemprop="headline">
                                    <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                </h3>
                                <div>
                                <p><?php echo get_the_excerpt(); ?></p></div>
                            </div>
                            <div class='clear'></div>
                            </div>
                        </article>
                        <?php
					endif;
				endwhile;
				else :
					echo "<div class='content-error'><p>No posts available</p></div>";
				endif;
			wp_reset_query();
		?>
</div>

<div class="container">
        <h3>Berita</h3>
        <p>Berita paling banyak dibaca : </p>
    </div>
<div class="berita">
        <?php
			$recent = new WP_Query(
				array(
					'post_type' => 'post',
					'posts_per_page' => '4',
					'order'=> 'DESC',
                    'category_name' => 'berita'
				)
			);
			if($recent->have_posts()) :
				while ($recent->have_posts()):$recent->the_post();
					if ($recent->current_post == 0) :
						echo "<div style='clear:both'></div>";
					else :
						?>
                            <article id="post-<?php the_ID(); ?>" class="post-outer" itemprop="mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
                            <div class="post-inner">
                            <div class="entry-thumbnail">
                                <a class="thumb-link" href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php the_title(); ?>"/>
                                </a>
                            </div>
                            <div class="entry-content">
                                <h3 class="entry-title" itemprop="headline">
                                    <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                </h3>
                                <div>
                                <p><?php echo get_the_excerpt(); ?></p></div>
                            </div>
                            <div class='clear'></div>
                            </div>
                        </article>
                        <?php
					endif;
				endwhile;
				else :
					echo "<div class='content-error'><p>No posts available</p></div>";
				endif;
			wp_reset_query();
		?>
</div>
<?php get_footer(); ?>

