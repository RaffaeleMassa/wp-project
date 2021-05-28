<?php get_header(); ?>
    <div id="banner">
        <h1 id="title-banner">REFICIO DESIGN</h1>
        <h3 id="title-banner">Ricrea il tuo mobile da zero</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/Blog') ?>">
            <h2 class="page-heading">All Blog</h2>
        </a>

        <section>

        <?php  

        while(have_posts()){
            the_post();
        
        ?>

<div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="<?php echo the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="#">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                       <?php the_content(); ?>
                    </p>
                    <a href="#" class="btn-readmore">Read more</a>
                </div>
            </div>

            <?php }
             wp_reset_query(); ?>

        </section>


        <div class="pagination">
           <?php echo paginate_links();?>
       </div>
    <?php get_footer() ?>

