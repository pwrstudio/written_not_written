<?php get_header(); ?>

<header class='first'>
  <a href='<?php echo get_site_url() . "/menu"; ?>' id='name' class='left'>written-not-written</a>
  <div class="caption"></div>
</header>

  <div class="image-container"></div>
  
  <div class="nav-overlay previous"></div>
  <div class="nav-overlay next"></div>


  <div class="image-list-container">
      <?php if( have_rows('images') ): ?>
        <?php while ( have_rows('images') ) : the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <img src="<?php echo $image['sizes']['pwr-large']; ?>" data-alt="<?php echo the_sub_field('caption'); ?>" class='no-show'>
        <?php endwhile; ?>
      <?php endif; ?>
  </div>
    
<?php get_footer(); ?>    
