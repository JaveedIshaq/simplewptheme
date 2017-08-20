<div class="side-bar">
     <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
     <?php endif; ?>
</div>
<div class="clr"></div>
</div><!-- end div.container -->
       <footer>
          <div class="container">
          
            <p>&copy; <?php echo the_date('Y') ?> - <?php  bloginfo('name'); ?></p> 

          </div>
       	        
       </footer>

<?php wp_footer(); ?>
</body>
</html>