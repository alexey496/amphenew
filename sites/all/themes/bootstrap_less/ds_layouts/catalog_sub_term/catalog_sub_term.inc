<?php

/**
 * @file
 * Display Suite Catalog Subterm configuration.
 */

function ds_catalog_sub_term() {
  return array(
    'label' => t('Catalog Sub Term'),
    'regions' => array(
      'top' => t('Top'),
      'bottom' => t('Bottom'),
    ),
    // Uncomment if you want to include a CSS file for this layout (catalog_sub_term.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (catalog_sub_term.png)
    // 'image' => TRUE,
  );
}
