<?php get_header(); ?>

    <?php the_post;?>
      <article>
        <header>
          <h2><a href="<?php the_permalink;?>"></a><?php the_title(); ?></h2>
        </header>
        <div>
          <?php the_content(); ?>
        </div>
        <div>
          <?php if(comments_open() || get_comments_number()){
            comments_template();
          } ?>
        </div>
      </article>
<?php get_footer(); ?>
