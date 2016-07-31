<?php get_header(); ?>

<body class='about'>

  <header>
    <div>
      <strong>
        <a href='<?php echo get_site_url();?>'>written–not–written</a>
      </strong>
    </div>
    <div><?php echo get_the_title();?></div>
    <?php $cv = get_field('cv'); ?>
    <a href='<?php echo $cv['url']; ?>' target=_blank download>download cv</a>
  </header>

  <div class="text-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content();?>
    <?php endwhile; endif;?>
  </div>
  
</body>

<?php get_footer(); ?>    
