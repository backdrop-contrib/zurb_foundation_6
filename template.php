<?php

/**
 * Implements hook_preprocess_maintenance_page().
 */
function zurb_foundation_5_mobile_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'zurb_foundation_5') . '/css/maintenance-page.css');
}

/**
 * Implements hook_preprocess_layout().
 */
function zurb_foundation_5_mobile_preprocess_layout(&$variables) {
  if ($variables['content']['header']) {
    $variables['content']['header'] = '<div class="l-header-inner">' . $variables['content']['header'] . '</div>';
  }
}

/**
 * Implements theme_menu_tree().
 */
function zurb_foundation_5_mobile_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_field__field_type().
 */
function zurb_foundation_5_mobile_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $item_attributes = (isset($variables['item_attributes'][$delta])) ? backdrop_attributes($variables['item_attributes'][$delta]) : '';
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $item_attributes . '>' . backdrop_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the surrounding DIV with appropriate classes and attributes.
  if (!in_array('clearfix', $variables['classes'])) {
    $variables['classes'][] = 'clearfix';
  }
  $output = '<div class="' . implode(' ', $variables['classes']) . '"' . backdrop_attributes($variables['attributes']) . '>' . $output . '</div>';

  return $output;
}


/**
  * Overwrite theme_button()
  */
  function zurb_foundation_5_button($variables) {
    $element = $variables['element'];
    $element['#attributes']['type'] = 'submit';
    element_set_attributes($element, array('id', 'name', 'value'));
    $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
    if (!empty($element['#attributes']['disabled'])) {
      $element['#attributes']['class'][] = 'form-button-disabled';
    }
    //custom class
    $element['#attributes']['class'][] = 'button';
    $element['#attributes']['class'][] = 'small';
    $element['#attributes']['class'][] = 'radius';
    return '<input' . backdrop_attributes($element['#attributes']) . ' />';
  }


/**
  * Override theme_status_messages()
  **/
  function zurb_foundation_5_status_messages($variables) {
    $display = $variables['display'];
    $output = '';
    $status_heading = array(
      'status' => t('Status message'),
      'error' => t('Error message'),
      'warning' => t('Warning message'),
    );
    foreach (backdrop_get_messages($display) as $type => $messages) {
      //convert to foundation classes
      switch ( $type ) {
        case 'error': $type = 'alert';
        break;
        case 'status': $type = 'success';
        break;
        case 'warning': $type = 'secondary';
        break;
      }
      $output .= "<div data-alert class=\"alert-box $type\">\n";
      if (!empty($status_heading[$type])) {
        $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
      }
      if (count($messages) > 1) {
        $output .= " <ul>\n";
        foreach ($messages as $message) {
          $output .= '  <li>' . $message . "</li>\n";
        }
        $output .= " </ul>\n";
      }
      else {
        $output .= $messages[0];
      }
      $output .= "<a href=\"\" class=\"close\">&times;</a></div>\n";
    }
    return $output;
  }
