<?php
/**
 * OHAKO
 * front-page.php
 */
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>

  <?php get_template_part('template-parts/site-header'); ?>

  <main>
  <!-- MV -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content();?>
  <?php endwhile; endif;?>

  </main>

  <?php get_template_part('template-parts/site-footer'); ?>

  <?php get_footer(); ?>

</body>
</html>