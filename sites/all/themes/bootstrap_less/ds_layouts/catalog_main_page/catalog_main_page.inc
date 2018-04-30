<?php

/**
 * @file
 * Display Suite Catalog On Main Page configuration.
 */

function ds_catalog_main_page() {
  return array(
    'label' => t('Catalog On Main Page'),
    'regions' => array(
      'top' => t('Top'),
      'bottom' => t('Bottom'),
    ),
    // Uncomment if you want to include a CSS file for this layout (catalog_main_page.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (catalog_main_page.png)
    // 'image' => TRUE,
  );
}
