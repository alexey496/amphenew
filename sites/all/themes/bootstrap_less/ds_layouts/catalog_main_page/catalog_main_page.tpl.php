<?php
/**
 * @file
 * Display Suite Bootstrap 5 4 3 template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $left: Rendered content for the "Left" region.
 * - $left_classes: String of classes that can be used to style the "Left" region.
 *
 * - $center: Rendered content for the "Center" region.
 * - $center_classes: String of classes that can be used to style the "Center" region.
 *
 * - $right: Rendered content for the "Right" region.
 * - $right_classes: String of classes that can be used to style the "Right" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> col-sm-4 clearfix">
<a href="<?php print token_replace('[term:url:relative]', array('term' => $term)); ?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $top_wrapper; ?> class="top <?php print $top_classes; ?>">
      <?php print $top; ?>
    </<?php print $top_wrapper; ?>>

    <<?php print $bottom_wrapper; ?> class="bottom <?php print $bottom_classes; ?>">
      <?php print $bottom; ?>
    </<?php print $bottom_wrapper; ?>>

</a>
</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
