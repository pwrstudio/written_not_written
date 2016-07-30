<?php get_header(); ?>

<body>

  <header>
    <div>
      <strong>
        <a href='<?php echo get_site_url();?>'>written–not–written</a>
      </strong>
    </div>
    <div><?php echo get_the_title();?> (<span id='index'></span>/<span id='total'></span>): <span class="caption"></span></div>
    <div class='extended-caption'></div>

  </header>

  <div class="nav-overlay previous"></div>
  <div class="nav-overlay next"></div>

  <div id='slides'>
    <div class="slides-container">

    <?php $i = 0;?>

    <?php if( have_rows('content') ): ?>
      <?php while ( have_rows('content') ) : the_row(); ?>

        <?php if ($i == 0):?>

          <?php if(get_sub_field('media_type') == 'Image'):?>
            <?php $image = get_sub_field('image'); ?>
            <?php $pdf = get_sub_field('pdf_file'); ?>
      
            <img src="<?php echo $image['sizes']['pwr-large']; ?>" data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>' class='slide shown'>
      
          <?php else:?>

            <div class='slide shown'>
              <?php echo get_sub_field('text');?>
            </div>

          <?php endif;?>

          <?php $i = 1;?>

        <?php else: ?>

          <?php if(get_sub_field('media_type') == 'Image'):?>
            <?php $image = get_sub_field('image'); ?>
            <?php $pdf = get_sub_field('pdf_file'); ?>

            <img src="<?php echo $image['sizes']['pwr-large']; ?>" data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>' class='slide'>
          <?php else:?>
            <div class='slide'>
              <?php echo get_sub_field('text');?>
            </div>
          <?php endif;?>

        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>


    </div>
  </div>
  
  <a href='about' class='about-menu'>about / contact</a>

</body>  
  
<?php get_footer(); ?>    
