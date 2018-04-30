<?php

/**
 * @file
 * Display Suite News Full configuration.
 */

function ds_news_full() {
  return array(
    'label' => t('News Full'),
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (news_full.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (news_full.png)
    // 'image' => TRUE,
  );
}
