<?php get_header(); ?>
    <aside class="">
      <?php get_sidebar(); ?>
    </aside>
    <?php while (have_posts()):the_post();?>
      <article>
        <header>
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
          <?php the_date(); ?>
        </header>
        <div>
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
<?php get_footer(); ?>
