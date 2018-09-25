<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <?php get_sidebar(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-9 col-lg-9'); ?>>

        <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        <?php edit_post_link(); ?>

      </article>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

<?php get_footer(); ?>
