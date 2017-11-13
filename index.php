<?php get_header(); ?>
    <h1>Hello World ca va OUII BIEN ca va </h1>
    <?php while (have_posts()):the_post;?>
      <article>
        <header>
          <h2><a href="<?php the_permalink;?>"></a><?php the_title(); ?></h2>
        </header>
        <div>
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
<?php get_footer(); ?>
