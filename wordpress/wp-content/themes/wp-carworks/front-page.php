<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="container">
    <div class="row">

      <?php get_sidebar(); ?>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-9 col-lg-9'); ?>>

          <?php the_content(); ?>
          <?php edit_post_link(); ?>

        </article>
      <?php endwhile; endif; ?>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

<?php get_footer(); ?>
