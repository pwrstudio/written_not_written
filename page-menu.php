<?php get_header(); ?>

  <div class="container-menu">

  <div class='inner-header'>
    <div id='name' class='left'>Jürgen Beck</div>
    <div id='current' class='right'>
      
      <?php $args = array(
      'post_type'		=> 'page',
      'pagename' => 'current',
      'posts_per_page'	=> 1
      ); ?>

      <?php $current = new WP_Query( $args ); ?>
      <?php while ( $current->have_posts() ) : $current->the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; wp_reset_query(); ?>
    
    </div>
  </div>

  <div class='project-menu'> 
    
    <?php $args = array(
    'post_type'		=> 'post',
    'posts_per_page'	=> -1
    ); ?>

    <?php $current = new WP_Query( $args ); ?>

    <?php while ( $current->have_posts() ) : $current->the_post(); ?>

      <?php if(get_field('post_type') == 'Link'): ?>
        <a href='<?php echo get_field('link'); ?>' class='menu-item' target=_blank>
          <?php echo get_the_title(); ?>
        </a>
      <?php else:?>
        <a href='<?php echo get_permalink(); ?>' class='menu-item'>
          <?php echo get_the_title(); ?>
        </a>
      <?php endif;?>

    <?php endwhile; wp_reset_query(); ?>
  
  </div> 

  <a href='<?php echo get_site_url() . "/info"; ?>'class='menu-item'>info/contact</a>

  </div>

  <?php get_footer(); ?>