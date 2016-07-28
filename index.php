<?php get_header(); ?>

  <header>
    <div><strong>written–not–written</strong></div>
    <?php get_template_part('components/menu');?>  
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
