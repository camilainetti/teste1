<?php
/**
 * Displays content for the "Narrow" template.
 *
 * @package Flint
 * @since 1.1.0
 */

?>

  <div class="row">
    <div class="hidden-xs hidden-sm col-md-1"></div>
    <div class="col-xs-12 col-sm-2 col-md-2">
      <?php flint_the_post_thumbnail(); ?>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-xs-12 col-sm-8 col-md-6' ); ?>>
      <header class="entry-header">
        <?php $type = get_post_type(); ?>
        <?php do_action( 'flint_open_entry_header_'.$type ); ?>

        <h1 class="entry-title"><?php if ( is_singular() ) { echo the_title();
} else { echo '<a href="' . get_permalink() .'" rel="bookmark">' . get_the_title() . '</a>'; } ?></h1>
        <?php if ( current_user_can( 'edit_posts' ) ) { ?><a class="btn btn-default btn-sm btn-edit hidden-xs" href="<?php echo get_edit_post_link(); ?>">Edit</a><?php } ?>

        <div class="entry-meta">
          <?php do_action( 'flint_entry_meta_above_'.$type ); ?>
        </div><!-- .entry-meta -->

        <?php do_action( 'flint_close_entry_header_'.$type ); ?>

      </header><!-- .entry-header -->

      <?php if ( is_search() ) : ?>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
      <?php else : ?>
      <div class="entry-content">
        <?php flint_the_content(); ?>
        <?php
        flint_link_pages( array(
          'before' => '<ul class="pagination">',
          'after'  => '</ul>',
        ) ); ?>
      </div><!-- .entry-content -->
      <?php endif; ?>

    </article><!-- #page-<?php the_ID(); ?> -->
    <div class="hidden-xs col-sm-2 col-md-3"></div>
  </div><!-- .row -->
