<?php

/**
 * @file
 * Display Suite Front Page configuration.
 */

function ds_front_page() {
  return array(
    'label' => t('Front Page'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (front_page.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (front_page.png)
    // 'image' => TRUE,
  );
}
