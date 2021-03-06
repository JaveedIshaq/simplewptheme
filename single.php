
<?php  get_header(); ?>
<div class="container">
<div class="main">

    <?php if(have_posts()) : ?>

     <?php while(have_posts()) : the_post()?>
      <article class="post">
        <h3><?php the_title(); ?></h3>
      <div class="meta">
        created By: <?php the_author(); ?> on <?php the_time('l jS \of F Y h:i:s A'); ?>
      </div>
      <?php if(has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
               <?php the_post_thumbnail(); ?>
          </div>
      <?php endif; ?>
      <?php the_content(); ?>
    </article>

  <?php endwhile; ?>

<?php else : ?>

  <?php echo wpautop('sorry no posts are found');?>

<?php endif;?>
<?php comments_template(); ?>
</div>
<?php  get_footer(); ?>