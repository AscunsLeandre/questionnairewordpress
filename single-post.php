<?php get_header(); ?>
    <h1>Hello World ca va OUII BIEN ca va </h1>
    <?php the_post;?>
      <article>
        <header>
          <h2><a href="<?php the_permalink;?>"></a><?php the_title(); ?></h2>
        </header>
        <div>
          <?php the_content(); ?>
          <?php if(comments_open() || get_comments_number()){
            comments_template();
          } ?>
        </div>
      </article>
<?php get_footer(); ?>
