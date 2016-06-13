<?php
/**
 * @file
 * Zurb Foundation 6 sub theme template functions
 *
*/

/**
 * Implements hook_preprocess_maintenance_page().
 */
function zurb_foundation_6_subtheme_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'bartik') . '/css/maintenance-page.css');
}

/**
 * Implements template_preprocess_page().
 */
function zurb_foundation_6_subtheme_preprocess_page(&$variables) {

$current_layout_obj = layout_get_layout_by_path();
$current_layout = $current_layout_obj->name;
$uses_admin_width = config_get('zurb_foundation_6_subtheme.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_element1');
    if ($uses_layout_width1 < 1) {
      $max_width_layouts1 = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts1');
      $max_width_number1 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_number1');
      foreach ($max_width_layouts1 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number1) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


    $uses_layout_width2 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_element2');
    if ($uses_layout_width2 < 1) {
      $max_width_layouts2 = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts2');
      $max_width_number2 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_number2');
      foreach ($max_width_layouts2 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number2) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



    $uses_layout_width3 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_element3');
    if ($uses_layout_width3 < 1) {
      $max_width_layouts3 = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts3');
      $max_width_number3 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_number3');
      foreach ($max_width_layouts3 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number3) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



  }
}

function zurb_foundation_6_subtheme_preprocess_layout(&$variables) {
  if ($variables['is_front']) {
    $variables['classes'][] = 'layout-front';
  }

$current_layout = $variables["layout"]->name;
$uses_admin_width = config_get('zurb_foundation_6_subtheme.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_element1');
    if ($uses_layout_width1 > 0) {
      $max_width_layouts1 = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts1');
      $max_width_number1 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_number1');
      foreach ($max_width_layouts1 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number1) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


    $uses_layout_width2 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_element2');
    if ($uses_layout_width2 > 0) {
      $max_width_layouts2 = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts2');
      $max_width_number2 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_number2');
      foreach ($max_width_layouts2 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number2) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



    $uses_layout_width3 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_element3');
    if ($uses_layout_width3 > 0) {
      $max_width_layouts3 = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts3');
      $max_width_number3 = config_get('zurb_foundation_6_subtheme.settings', 'max_width_number3');
      foreach ($max_width_layouts3 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number3) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


  }



// backgrounds
// body region
$var1 = theme_get_setting('body_main_background', 'zurb_foundation_6_subtheme');
$var2 = theme_get_setting('body_main_background_retina', 'zurb_foundation_6_subtheme');
$var3 = theme_get_setting('body_main_background_blurred', 'zurb_foundation_6_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { html body { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { html body { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { html body { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// calltoaction region
$var1 = theme_get_setting('footer_main_background', 'zurb_foundation_6_subtheme');
$var2 = theme_get_setting('footer_main_background_retina', 'zurb_foundation_6_subtheme');
$var3 = theme_get_setting('footer_main_background_blurred', 'zurb_foundation_6_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-calltoaction { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-calltoaction { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-calltoaction { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// juiced_main region
$var1 = theme_get_setting('juiced_main_background', 'zurb_foundation_6_subtheme');
$var2 = theme_get_setting('juiced_main_background_retina', 'zurb_foundation_6_subtheme');
$var3 = theme_get_setting('juiced_main_background_blurred', 'zurb_foundation_6_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center;  } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .juiced-main { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement1 region
$var1 = theme_get_setting('statement1_background', 'zurb_foundation_6_subtheme');
$var2 = theme_get_setting('statement1_background_retina', 'zurb_foundation_6_subtheme');
$var3 = theme_get_setting('statement1_background_blurred', 'zurb_foundation_6_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement1 { background: url($var1) no-repeat; background-size: cover; background-position: center;} }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement1 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement1 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement2 region
$var1 = theme_get_setting('statement2_background', 'zurb_foundation_6_subtheme');
$var2 = theme_get_setting('statement2_background_retina', 'zurb_foundation_6_subtheme');
$var3 = theme_get_setting('statement2_background_blurred', 'zurb_foundation_6_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement2 { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement2 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement2 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement3 region
$var1 = theme_get_setting('statement3_background', 'zurb_foundation_6_subtheme');
$var2 = theme_get_setting('statement3_background_retina', 'zurb_foundation_6_subtheme');
$var3 = theme_get_setting('statement3_background_blurred', 'zurb_foundation_6_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement3 { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement3 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement3 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}



if (theme_get_setting('zurb_foundation_6_cdn_css') > 0)
{
backdrop_add_css('https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.css', array('type' => 'external', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_cdn_flex_css') > 0)
{
backdrop_add_css('https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation-flex.min.css', array('type' => 'external', 'every_page' => TRUE, 'preprocess' => TRUE));
}


if (theme_get_setting('zurb_foundation_6_js_cdn_all') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_js_local_all') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_js_cdn_each') > 0)
{

backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
if (theme_get_setting('zurb_foundation_6_script1') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/fastclick.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script2') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/jquery.cookie.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script3') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script4') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/placeholder.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script5') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.box.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script6') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.keyboard.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script7') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.mediaQuery.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script8') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.motion.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script9') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.nest.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script10') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.timerAndImageLoader.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script11') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.touch.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script12') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.triggers.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script13') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.abide.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script14') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.accordion.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script15') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.accordionMenu.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script16') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.drilldown.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script17') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.dropdown.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script18') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.dropdownMenu.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script19') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.equalizer.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script20') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.interchange.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script21') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.magellan.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script22') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.offcanvas.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script23') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.orbit.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script24') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.responsiveMenu.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script25') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.responsiveToggle.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script26') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.reveal.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script27') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.slider.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script28') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.sticky.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script29') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.tabs.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script30') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.toggler.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script31') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.tooltip.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

}




if (theme_get_setting('zurb_foundation_6_js_local_each') > 0)
{

backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
if (theme_get_setting('zurb_foundation_6_script1') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/fastclick.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script2') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/jquery.cookie.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script3') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/modernizr.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script4') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/jquery.placeholder.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script5') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.box.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script6') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.keyboard.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script7') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.mediaQuery.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script8') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.motion.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script9') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.nest.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script10') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.timerAndImageLoader.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script11') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.touch.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script12') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.triggers.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script13') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.abide.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script14') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.accordion.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script15') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.accordionMenu.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script16') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.drilldown.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script17') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.dropdown.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script18') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.dropdownMenu.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script19') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.equalizer.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script20') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.interchange.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script21') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.magellan.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script22') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.offcanvas.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script23') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.orbit.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script24') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.responsiveMenu.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script25') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.responsiveToggle.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script26') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.reveal.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script27') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.slider.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script28') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.sticky.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script29') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.tabs.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script30') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.toggler.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_script31') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.tooltip.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

}


backdrop_add_js("themes/zurb_foundation_6_subtheme/js/scripts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));
}

/**
 * Implements theme_field__field_type().
 */
function zurb_foundation_6_subtheme_field__taxonomy_term_reference($variables) {
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


function zurb_foundation_6_subtheme_css_alter(&$css) {
  $css_to_remove = array();
  if (theme_get_setting('zurb_foundation_6_subtheme_cdn_css') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','zurb_foundation_6') . '/css/foundation.min.css';
  }

  if (theme_get_setting('sass') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','zurb_foundation_6') . '/css/style.css';
  $css_to_remove[] = backdrop_get_path('theme','zurb_foundation_6') . '/css/foundation.min.css';
  }

  foreach ($css_to_remove as $index => $css_file) {
      unset($css[$css_file]);
    }
}

function zurb_foundation_6_subtheme_menu_tree($variables) {
return '<ul class="menu">' . $variables['tree'] . '</ul>';
}

/**
  * Overwrite theme_button()
  */
  function zurb_foundation_6_subtheme_button($variables) {
    $element = $variables['element'];
    $element['#attributes']['type'] = 'submit';
    element_set_attributes($element, array('id', 'name', 'value'));
    $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
    if (!empty($element['#attributes']['disabled'])) {
      $element['#attributes']['class'][] = 'form-button-disabled';
    }
    //custom class
    $element['#attributes']['class'][] = 'button';
    $element['#attributes']['class'][] = 'hollow';
    // $element['#attributes']['class'][] = 'radius';
    return '<input' . backdrop_attributes($element['#attributes']) . ' />';
  }
