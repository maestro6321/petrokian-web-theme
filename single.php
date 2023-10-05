<?php 
get_header();
get_template_part('inc/index','header');

while (have_posts()) {
the_post();
?>
<section class="container single-container">
<article class="single-post-content">
    <header>
        <div class="post-title">
            <h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
        </div>
    </header>
<div class="post-content">
<?php the_content(""); }   ?>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magni iusto cum minus libero. 
Dignissimos ea, est nobis qui quidem totam, optio aut cum perspiciatis
 sit in illo eum molestias facere dicta similique voluptatem? Qui rem inventor
 e modi tenetur hic, harum esse amet velit assumenda unde officia veniam eum? Similiqu
 e iure quod eaque sed, harum enim facere temporibus, eligendi at aliquid accusantium ad dolor
 es neque, qui atque. Nulla facilis, laudantium vel perferendis obcaecati temporibus voluptatem di
 stinctio consectetur optio quo debitis sint. Quod beatae necessitatibus sunt aut quia quaerat. Officia
  nostrum doloremque praesentium possimus facilis. Veritatis aspernatur molestias hic animi, nobis optio 
  magnam, ipsa sequi quam ipsum tempore perferendis ea. Iusto veniam quos aspernatur excepturi earum saepe
   doloremque, accusantium vitae? Incidunt blanditiis cupiditate molestiae dolore eius ducimus quasi ut cor
   rupti repellat hic consectetur sunt laudantium nesciunt numquam esse ratione minus, mollitia obcaecati n
   am sit. Sequi adipisci rem fuga. Nulla recusandae sequi necessitatibus rem, eius quis reiciendis earum in 
   vel officia inventore beatae ipsa possimus vitae doloribus voluptatibus rerum qui labore. Laboriosam debiti
   s iure, unde, cum blanditiis molestias architecto sequi amet exercitationem libero animi earum tempora, fac
   ilis assumenda asperiores ab minus fuga aliquid consequuntur. Architecto exercitationem molestiae a ratione
    est blanditiis perspiciatis eos adipisci voluptatum illum ipsam fugiat, sapiente ullam nobis totam dolore 
    praesentium. Eum deserunt eius reprehenderit minima sed est dolorem numquam. Sapiente aut doloremque possi
    mus provident dignissimos vero, quibusdam accusantium. Deserunt ex assumenda quas minima earum at est dele
    ctus incidunt rem sit veritatis, cumque molestias enim consequuntur? Non natus fugit eius iure, nobis lauda
    ntium blanditiis inventore possimus, ipsa, quod odit earum in pariatur unde hic tempora quasi maxime aliqu
    id temporibus repellat aliquam mollitia eaque sint ab. Voluptates minima voluptatibus dicta, a, cupiditate 
    expedita eius consequuntur vel harum, temporibus nobis itaque! Nemo quae doloribus nihil voluptate eligendi
     veritatis hic dolorum reprehenderit eos natus voluptates, velit ratione perspiciatis! Quasi dignissimos
      similique repellendus, 
eaque ad alias veniam quaerat? Modi quae quos odit veniam?
</div>
<div class="post-img">
    <!-- <img src="<?php the_post_thumbnail(); ?>/images/1696393902726.jpg" alt=""> -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/1696393902726.jpg" alt="" style="width: -webkit-fill-available;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/1696393902726.jpg" alt="" style="width: -webkit-fill-available;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/1696393902726.jpg" alt="" style="width: -webkit-fill-available;">
</div>
</article>
</section>

 
<?php
// get_template_part('inc/index','news');
get_footer(); 
?>