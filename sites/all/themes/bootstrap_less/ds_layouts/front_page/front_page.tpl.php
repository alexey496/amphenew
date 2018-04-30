<?php
/**
 * @file
 * Display Suite Bootstrap 8 3offset1 template.
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
 * - $right: Rendered content for the "Right" region.
 * - $right_classes: String of classes that can be used to style the "Right" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $left_wrapper; ?> class="col-md-8 <?php print $left_classes; ?>">
      <h1>Продукция</h1>
      <div class="row">
        <?php print $left; ?>
      </div>
    </<?php print $left_wrapper; ?>>

    <<?php print $right_wrapper; ?> class="col-md-3 col-md-offset-1 <?php print $right_classes; ?>">
      <h1> Новости</h1>
      <?php print $right; ?>
    </<?php print $right_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
