<div class="post_full">
<article <?php post_class(); ?> >
  <header>
    <?php get_template_part('templates/entry-meta'); ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>

  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
</article>

<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'blaskan' ), 'after' => '</div>' ) ); ?>
<footer>
    <span class="author byline author vcard">
    <?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></span>


    <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
  <?php if ( count( get_the_category() ) ) : ?>
        <span class="categories"> -
            <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'blaskan' ), 'categories-label', get_the_category_list( ', ' ) ); ?>
        </span>
    <?php endif; ?>

    <?php
        $tags_list = get_the_tag_list( '', ', ' );
        if ( $tags_list ):
    ?>
        <span class="tags"> -
            <?php printf( __( '<span class="%1$s">Tagged with</span> %2$s', 'blaskan' ), 'tags-label', $tags_list ); ?>
        </span>
    <?php endif; ?>

    <?php edit_post_link( __( 'Edit', 'blaskan' ), ' <span class="edit-link"> - ', '</span>' ); ?>
</footer>
</div>
