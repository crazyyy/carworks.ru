  </section><!-- /section -->

</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">

      <div class="footer-copyright col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.</p>
        <p>ИП Пилипенко П.В., ОГРНИИП 313774623300939 ИНН 773124146072</p>
        <p>Тонирование машин, ремонт автостекол, установка парктроников, ксенона и сигнализаций, автозвук, полировка, обучение.</p>
      </div>
      <!-- /.footer-copyright col-xl-4 -->

      <div class="footer-navi-top col-xl-2 col-lg-2 col-md-4 col-sm-12">
        <?php wpeHeadNav(); ?>
      </div>
      <!-- /.footer-navi col-xl-2 -->

      <div class="footer-navi-full col-xl-6 col-lg-6 col-md-8 col-sm-12">
        <?php wpeFootNav(); ?>
      </div>
      <!-- /.footer-navi-full col-xl-6 -->

    </div>
  </div><!-- /.container -->
</footer><!-- /footer -->

  <div class="modal-bg">
    <div class="modal-container">
    </div><!-- /.modal-container -->
    <span class="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span>
  </div><!-- /.modal-bg -->

  <div class="call-me-hidden">
    <?php echo do_shortcode('[contact-form-7 id="517" title="Контактная форма 1"]'); ?>
  </div>
  <!-- /.call-me-hidden -->

  <?php wp_footer(); ?>

</body>
</html>
