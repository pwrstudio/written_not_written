<?php get_header(); ?>

<body>

  <header>
    <div>
      <strong>
        <a href='<?php echo get_site_url();?>'>written–not–written</a>
      </strong>
    </div>
    <div><strong><?php echo get_the_title();?></strong> (<span id='index'></span>/<span id='total'></span>): <span class="caption"></span></div>
    <div class='extended-caption'></div>

  </header>

  <div id='slides'>
    <div class="slides-container">
      
    <?php $i = 0;?>

    <?php // Get all slides ?>
    <?php if( have_rows('content') ): ?>
      <?php while ( have_rows('content') ) : the_row(); ?>

        <?php // If it is the first slide... ?>
        <?php if ($i == 0):?>
      
          <?php // If the slide is an image ?>
          <?php if(get_sub_field('media_type') == 'Image'):?>
      
            <?php // get image and pdf fields ?>
            <?php $image = get_sub_field('image'); ?>
            <?php $pdf = get_sub_field('pdf_file'); ?>
      
            <?php // Output with class 'shown' ?>
            <img src="<?php echo $image['sizes']['pwr-large']; ?>" data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>' class='slide shown'>
      
          <?php // If text slide ?>
          <?php elseif(get_sub_field('media_type') == 'Text'):?>
      
            <?php // get image and pdf fields ?>
            <?php $pdf = get_sub_field('pdf_file'); ?>
            
            <?php // Output with class 'shown' ?>
            <div class='slide shown' data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>'>
              <?php echo get_sub_field('text');?>
            </div>
      
          <?php // If audio slide ?>
          <?php elseif(get_sub_field('media_type') == 'Audio'):?>
      
            <?php // get audio and pdf fields ?>
            <?php $pdf = get_sub_field('pdf_file'); ?>
            <?php $audio = get_sub_field('audio_file'); ?>
            
            <?php // Output with class 'shown' ?>
            <div class='slide audio shown' data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>'>
              <audio src="<?php echo $audio['url']; ?>" controls data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>' class='slide shown'></audio>
            </div>
      
          <?php // Else: video slide ?>
          <?php else: ?>
      
            <div class='slide shown code' data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>'>
<!--              <div class='embed-responsive embed-responsive-16by9'>  -->
                <?php echo get_sub_field('code');?>
<!--              </div>-->
            </div>
      
          <?php endif;?>

          <?php // Count up ?>
          <?php $i = 1;?>

        <?php // If not first slide ?>
        <?php else: ?>

          <?php if(get_sub_field('media_type') == 'Image'):?>
            <?php $image = get_sub_field('image'); ?>
            <?php $pdf = get_sub_field('pdf_file'); ?>

            <img src="<?php echo $image['sizes']['pwr-large']; ?>" data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>' class='slide'>
          
          <?php elseif(get_sub_field('media_type') == 'Text'):?>
      
            <?php $pdf = get_sub_field('pdf_file'); ?>
            <div class='slide' data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>'>
              <?php echo get_sub_field('text');?>
            </div>
      
          <?php // If audio slide ?>
          <?php elseif(get_sub_field('media_type') == 'Audio'):?>
      
            <?php // get audio and pdf fields ?>
            <?php $pdf = get_sub_field('pdf_file'); ?>
            <?php $audio = get_sub_field('audio_file'); ?>
            
            <?php // Output with class 'shown' ?>
            <div class='slide audio' data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>'>
              <audio src="<?php echo $audio['url']; ?>" controls data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>' class='slide shown'></audio>
            </div>
      
          <?php else: ?>
            <div class='slide code' data-caption="<?php echo the_sub_field('caption'); ?>" data-extended='<?php echo the_sub_field('extended_caption'); ?>' data-pdf='<?php echo $pdf['url'];?>'>
<!--              <div class='embed-responsive embed-responsive-16by9'>  -->
                <?php echo get_sub_field('code');?>
<!--              </div>-->
            </div>
          <?php endif; ?>
      
        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>

    </div>
  </div>
  
  <div class='about-menu'>about / contact</div>
  
  <?php // Navigation ?>
  <div class="nav-overlay previous"></div>
  <div class="nav-overlay next"></div>

</body>  
  
<?php get_footer(); ?>    
