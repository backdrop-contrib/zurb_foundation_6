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



function zurb_foundation_5_breadcrumb($variables) {

if (theme_get_setting('zurb_foundation_5_cdn') > 0)
{
backdrop_add_css('https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css', array('type' => 'external', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_css('themes/zurb_foundation_5/css/style.css', array('every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/zurb_foundation_5/js/foundation.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));

if (theme_get_setting('zurb_foundation_5_script1') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/fastclick.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script2') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/jquery.cookie.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script3') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script4') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/placeholder.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script5') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.abide.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script6') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.accordion.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script7') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.alert.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script8') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.clearing.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script9') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.dropdown.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script10') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.equalizer.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script11') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.interchange.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script12') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.joyride.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script13') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.magellan.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script14') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.offcanvas.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script15') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.orbit.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script16') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.reveal.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script17') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.slider.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script18') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.tab.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script19') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.tooltip.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script20') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.topbar.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}


}
else
{
backdrop_add_css("themes/zurb_foundation_5/css/style.css", array('every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/zurb_foundation_5/js/foundation.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/zurb_foundation_5/js/foundation.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));

if (theme_get_setting('zurb_foundation_5_script1') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/fastclick.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script2') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/jquery.cookie.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script3') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/modernizr.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script4') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/jquery.placeholder.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script5') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.abide.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script6') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.accordion.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script7') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.alert.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script8') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.clearing.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script9') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.dropdown.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script10') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.equalizer.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script11') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.interchange.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script12') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.joyride.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script13') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.magellan.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script14') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.offcanvas.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script15') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.orbit.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script16') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.reveal.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script17') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.slider.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script18') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.tab.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script19') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.tooltip.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_5_script20') > 0)
{
backdrop_add_js("themes/zurb_foundation_5/js/foundation.topbar.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}




}


backdrop_add_js("themes/zurb_foundation_5/js/scripts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));

}
