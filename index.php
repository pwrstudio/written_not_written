<?php get_header(); ?>

  <header class='first'>
    
    <div id='name' class='left'>
      <a href='menu'><strong>written–not–written</strong></a>
    </div>
    
    <div id='current' class='right'>
      
      <?php $args = array('post_type' => 'page', 'pagename' => 'current','posts_per_page' => 1); ?>

      <?php $current = new WP_Query( $args ); ?>
      <?php while ( $current->have_posts() ) : $current->the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; wp_reset_query(); ?>
    
    </div>
    
      <?php $args = array(
      'post_type'		=> 'page',
      'pagename' => 'intro-text',
      'posts_per_page'	=> 1
      ); ?>

      <?php $current = new WP_Query( $args ); ?>
      <?php while ( $current->have_posts() ) : $current->the_post(); ?>
          <div class="caption caption-mobile"><?php the_content();?></div>
      <?php endwhile; wp_reset_query(); ?>
    
  </header>

  <?php $args = array(
  'post_type'		=> 'page',
  'pagename' => 'intro-image',
  'posts_per_page'	=> 1
  ); ?>

  <?php $current = new WP_Query( $args ); ?>
    <?php while ( $current->have_posts() ) : $current->the_post(); ?>
      <?php $image = get_field('intro_image' ); ?>
      <a href="menu"><div class="intro-image-container" style="background-image:url(<?php echo $image['url']?>), url(<?php echo $image['sizes']['pwr-small']?>)"></div></a>
  <?php endwhile; wp_reset_query(); ?>
  
<?php get_footer(); ?>    
