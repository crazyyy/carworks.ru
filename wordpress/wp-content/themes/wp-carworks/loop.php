<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper col-xl-12'); ?>>

    <div class="row">

      <a rel="nofollow" class="feature-img col-xl-4 col-lg-4 col-md-4" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) { ?>
          <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } else { ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php } ?>
      </a><!-- /post thumbnail -->

      <div class="col-xl-8 col-lg-8 col-md-8">
        <h2 class="inner-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2><!-- /post title -->

        <?php wpeExcerpt('wpeExcerpt40'); ?>
      </div>
      <!-- /.col-xl-8 col-lg-8 col-md-8 -->

    </div>
    <!-- /.row -->

  </div><!-- /looper -->
<?php endwhile; endif; ?>
