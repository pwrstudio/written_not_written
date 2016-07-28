<?php get_header(); ?>

  <div class="container-menu">

    <div class='inner-header'>
      <a href='menu' id='name' class='left'>Jürgen Beck</a>
    </div>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>

<?php get_footer(); ?>    
