  <footer class="site-footer">
    <p><?php echo "VadarBeta";?> - &copy <?php echo "2016";?></p>
    <nav class="site-nav-footer">
      <?php
      $args = array('theme_location' => 'footer');
      ?>
      <?php wp_nav_menu($args);?>
    </nav>
    <?php wp_footer();/*we need this to include the javascript*/ ?>
  </footer>
</div><!-- container-->
<?php wp_footer();?>
</body>
</html>
