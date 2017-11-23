<div>
  <?php if(!function_exists('dynamic_sidebar')) ||! dynamic_sidebar()) : ?>
  <li>Recherche

  <?php get_search_form(); ?>
 </li>
 <li> Méta
   <ul>
     <?php wp_register(); ?>
     <li><?php  wp_logout();?></li>
     <li><?php wp_meta(); ?></li>
   </ul>w
 </li>
<?php endif; ?>
</div>
