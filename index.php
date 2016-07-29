<?php get_header(); ?>

<body>
  
  <header>
    <div><strong>written–not–written</strong></div>
    <?php get_template_part('components/menu');?>  
  </header>
  
  <div class='slides-container'>
    <?php $landing = get_page_by_title( 'landing' );?>
    <?php $image = get_field('image', $landing->ID ); ?>
    <img src="<?php echo $image['sizes']['pwr-large']; ?>" data-caption="<?php echo the_sub_field('caption'); ?>" class='slide shown'>
  </div>
  
  <a href='about' class='about-menu'>about / contact</a>
  
</body>

<?php get_footer(); ?>    

