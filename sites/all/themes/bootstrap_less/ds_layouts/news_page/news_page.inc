<?php

/**
 * @file
 * Display Suite Bootstrap 8 configuration.
 */

function ds_news_page() {
  return array(
    'label' => t('News Page'),
    'regions' => array(
      'left' => t('Left'),
    ),
    // Uncomment if you want to include a CSS file for this layout (news_page.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (news_page.png)
    // 'image' => TRUE,
  );
}
