<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <?php get_sidebar(); ?>

      <div class="col-xl-9 col-lg-9" >
        <div class="row">
          <h1 class="ctitle col-xl-12"><?php the_category(', '); ?></h1>
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>
        </div>
      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

<?php get_footer(); ?>
