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
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $description_wrapper; ?> class="description col-xs-6 <?php print $description_classes; ?>">
      <?php print $description; ?>
    </<?php print $description_wrapper; ?>>

    <<?php print $price_wrapper; ?> class="price col-xs-3 <?php print $price_classes; ?>">
      <?php print $price; ?>
    </<?php print $price_wrapper; ?>>

    <<?php print $addtocart_wrapper; ?> class="addtocart col-xs-3 <?php print $addtocart_classes; ?>">
      <?php print $addtocart; ?>
    </<?php print $addtocart_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
