<?php


/**
 * Подключим Google шрифт fira_sans_condensed.
 * В файле "variable-overrides.less" указать "@font-family-base: 'Fira Sans Condensed', sans-serif;"
 */
function bootstrap_less_preprocess_html(&$vars) {
  // Подлкючаем Google шрифты.
  $fonts = array(
  'google_font_fira_sans_condensed' => 'https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,300i,400,400i,500,500i,600,700&amp;subset=cyrillic',
  );

  foreach ($fonts as $fid => $font) {
    $element = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => $font,
        'rel' => 'stylesheet',
        'type' => 'text/css',
      ),
    );
    drupal_add_html_head($element, $fid);
  }
}



// Добавим класс navbar-right к Secondary menu и заменим класс secondary на secondary-nav
function bootstrap_less_menu_tree__secondary(&$variables) {
  return '<ul class="menu nav navbar-nav navbar-right secondary-nav">' . $variables['tree'] . '</ul>';
}


// Заменим стандартный разделитель ">" модуля Hierarchical Select на ", "
function bootstrap_less_hs_taxonomy_formatter_lineage($variables) {
  $output = '';
  $lineage = $variables['lineage'];
  $separator = theme('hierarchical_select_item_separator');

  // Render each item within a lineage.
  $items = array();
  foreach ($lineage as $level => $item ) {
    $line  = '<span class="lineage-item lineage-item-level-' . $level . '">';
    $line .= drupal_render($item);
    $line .= '</span>';
    $items[] = $line;
  }
  $output .= implode(', ', $items);

  return $output;
}


 /*
 * Включаем возможность перевода заголовка итоговой суммы "Order total"
 */
function bootstrap_less_commerce_price_formatted_components_alter (&$components, $price, $entity){
  $order_total = $components['commerce_price_formatted_amount']['title'];
  $components['commerce_price_formatted_amount']['title']=t($order_total);
}




 /*
 * Темизируем цену
 */
function bootstrap_less_commerce_currency_info_alter(&$currencies, $langcode) {
  $currencies['RUB']['symbol'] = '₽'; // Меняем значек рубля
  //$currencies['RUB']['decimals'] = 0; // Уберем копейки (черевато изменением всех цен в 100 раз)
}


 /*
 * Форма добавления товара "в корзину"
 */
function bootstrap_less_form_commerce_cart_add_to_cart_form_alter(&$form,&$form_state) {
  $form['submit']['#value'] = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Купить';//изменим кнопку
  $form['quantity']['#title'] = ''; //Уберем label "Количество"
  //$form['submit']['#attributes']['class'][] = 'btn-success'; //Изменим класс кнопки
  // изменим внешний вид кнопки, если товара нет в наличии на складе
  if ($form['#attributes']['class']['stock'] == 'out-of-stock') {
    $form['submit']['#attributes']['class'][] = 'btn-default'; //Изменим класс кнопки
    $form['submit']['#value'] = 'Заказать';//изменим текст кнопки
  } else {
    $form['submit']['#attributes']['class'][] = 'btn-success';
  }
}


 /*
 * Изменим класс кнопки формы поиска. Меняются классы всех кнопок с надписью Search
 */
function bootstrap_less_bootstrap_colorize_text_alter(&$texts) {
  $texts['matches'][t('Search')] = 'danger';
}


 /*
 * Правим блок корзины
 */
function bootstrap_less_preprocess_commerce_cart_block(&$vars) {
  $order_wrapper = entity_metadata_wrapper('commerce_order', $vars['order']);
  $quantity = commerce_line_items_quantity($order_wrapper->commerce_line_items, commerce_product_line_item_types());
  //$quantity_text = format_plural($quantity, '@count item', '@count items', array(), array('context' => 'product count on a Commerce order'));
  $total = $order_wrapper->commerce_order_total->value();
  $total_text = commerce_currency_format($total['amount'], $total['currency_code']);
  $output = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span class="total-amount">' . $total_text . '</span><span class="product-quantity">' . $quantity . '</span>';
  $vars['contents_view'] = l($output, 'cart', array('html' => TRUE));
}


 /*
 * Правим пустую корзину
 */
function bootstrap_less_commerce_cart_empty_block() {
  return '<div class="cart-contents cart-empty"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span>' . t('Cart') . '</span></div>';
}


 /*
 * Добавим недостающий класс Bootstrap для формы поиска блока Search pages
 */
function bootstrap_less_form_search_api_page_search_form_search_alter(&$form, &$form_state, $form_id) {
  $form['#attributes']['class'][] = 'navbar-form';
}


 /*
 * Отключим ненужные CSS модуля commerce_extra
 */
function bootstrap_less_css_alter(&$css) {
  $exclude = array(
    'sites/all/modules/commerce_extra/modules/quantity/commerce_extra_quantity.css' => FALSE,
  );
  $css = array_diff_key($css, $exclude);
}

 /*
 * Заменим стандартную иконку pdf на замечательную из glyphicon
 */
function bootstrap_less_file_icon($variables) {
  $file = $variables['file'];
  $mime = check_plain($file->filemime);
  // если тип pdf заменяем иконку на glyphicon
  if ($mime == 'application/pdf') {
    return '<span class="glyphicon glyphicon-file" aria-hidden="true"></span>';
  }
}
