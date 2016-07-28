<?php // Make menu out of posts ?>
<?php $args = array('post_type' => 'post', 'posts_per_page' => -1); ?>
<?php $menu = new WP_Query( $args ); ?>
<div class='menu'>
  <?php while ( $menu->have_posts() ) : $menu->the_post(); ?>
    <a href='<?php echo get_the_permalink();?>'><?php echo get_the_title();?></a>
  <?php endwhile; ?>
</div>
<?php wp_reset_query(); ?>