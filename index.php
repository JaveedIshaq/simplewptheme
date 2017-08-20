
<?php  get_header(); ?>
<div class="container">
<div class="main">
    <?php if(have_posts()) : ?>

     <?php while(have_posts()) : the_post()?>
      <article class="post">
       <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
      </a>
      <div class="meta">
        created By: <?php the_author(); ?> on <?php the_time('l jS \of F Y h:i:s A'); ?>
      </div>
      <?php if(has_post_thumbnail()) : ?>
          <div class="post-thimbnail">
               <?php the_post_thumbnail(); ?>
          </div>
      <?php endif; ?>

      <?php the_excerpt(); ?>
       <a href="<?php the_permalink(); ?>" class="button">
        Read More
      </a>
    </article>

  <?php endwhile; ?>

<?php else : ?>

  <?php echo wpautop('sorry no posts are found');?>

<?php endif;?>
</div>
<?php  get_footer(); ?>