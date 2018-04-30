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

    <<?php print $variation_wrapper; ?> class="variation col-xs-4 <?php print $variation_classes; ?>">
      <?php print $variation; ?>
    </<?php print $variation_wrapper; ?>>

    <<?php print $name_wrapper; ?> class="name col-xs-4 <?php print $name_classes; ?>">
      <?php print $name; ?>
    </<?php print $name_wrapper; ?>>

    <<?php print $price_wrapper; ?> class="price col-xs-2 <?php print $price_classes; ?>">
      <?php print $price; ?>
    </<?php print $price_wrapper; ?>>
	
    <<?php print $addtocart_wrapper; ?> class="addtocart col-xs-2 <?php print $addtocart_classes; ?>">
      <?php print $addtocart; ?>
    </<?php print $addtocart_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
