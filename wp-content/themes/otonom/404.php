<?php /* Template Name: 404 */  get_header(); ?>
<section id="" class="section container">
  <div class="lost_thumb">
    <div class="grid">  
      <ul>
      <?php
        if( have_rows('liens_de_limage', 64) ):
          while ( have_rows('liens_de_limage', 64) ) : the_row();
        ?>
        <li class="thumb"><img src="<?php the_sub_field('new_image'); ?>" alt=""></li>
        <?php
        endwhile;
        else :
          endif;
        ?>
      </ul>
    </div>
  </div>
</section>
<?php get_footer(); ?>
