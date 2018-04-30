<?php

/**
 * @file
 * Display Suite Search Result configuration.
 */

function ds_search_result() {
  return array(
    'label' => t('Search Result'),
    'regions' => array(
      'description' => t('Description'),
      'price' => t('Price'),
      'addtocart' => t('AddToCart'),
    ),
    // Uncomment if you want to include a CSS file for this layout (search_result.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (search_result.png)
    // 'image' => TRUE,
  );
}
