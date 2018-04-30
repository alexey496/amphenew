<?php

/**
 * @file
 * Display Suite Product Item configuration.
 */

function ds_product_item() {
  return array(
    'label' => t('Product Item'),
    'regions' => array(
      'variation' => t('Variation'),
      'name' => t('Name'),
      'price' => t('Price'),
      'addtocart' => t('AddToCart'),
    ),
    // Uncomment if you want to include a CSS file for this layout (product_item.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (product_item.png)
    // 'image' => TRUE,
  );
}
