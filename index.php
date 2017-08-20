
<?php  get_header(); ?>

       <div class="main">
              <div class="container">
                
              
       	    <?php if(have_posts()) : ?>
                  
                 <?php while(have_posts()) : the_post()?>
                    <a href="<?php the_permalink(); ?>">
                 	<h3><?php the_title(); ?></h3>
                    </a>
                      <div class="meta">
                      	created By: <?php the_author(); ?> on <?php the_time('l jS \of F Y h:i:s A'); ?>
                      </div>

                 	<?php the_content(); ?>
                 <?php endwhile; ?>

       	    <?php else : ?>

                    <?php echo wpautop('sorry no posts are found');?>
                       
       	     <?php endif;?>
             </div>
       </div>

<?php  get_footer(); ?>