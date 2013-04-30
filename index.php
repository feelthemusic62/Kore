<?php get_header(); ?>
    
    <section id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </article>
        <?php endwhile; else: ?>
            <article class="post">
                <p><?php _e('Sorry we don\'t found.'); ?></p>
            </article>
        <?php endif; ?>
    </section>
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>