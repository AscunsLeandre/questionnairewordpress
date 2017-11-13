<?php get_header(); ?>
<<<<<<< HEAD
    <h1>Hello World ca va OUII BIEN ca va </h1>
    <?php while (have_posts()):the_post();?>
      <article>
        <header>
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
=======
    <h1>Hello World ca va OUII BIEN ca va  ? </h1>
    <?php while (have_posts()):the_post;?>
      <article>
        <header>
          <h2><?php the_title(); ?></h2>
>>>>>>> 1f1f25a38e8881a96e72d4d652af504e5ac4e390
        </header>
        <div>
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
<?php get_footer(); ?>
