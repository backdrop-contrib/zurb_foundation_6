<?php
/**
 * @file
 * Theme settings file for zurb_foundation_6.
 */

function zurb_foundation_6_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['zurb_foundation_6_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use jsdelivr CDN</b> instead of this website to serve the base Foundation6 CSS files.  If you are using SASS, you will have to manually adjust your imports to avoid loading the same styles twice.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_cdn', 'zurb_foundation_6'),
  );

$form['disclaimer3'] = array(
  '#markup' => '<p>' . t('Third party helper utilities') . '</p>',
);

$form['zurb_foundation_6_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script1', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.cookie.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script2', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script3', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script placeholder.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script4', 'zurb_foundation_6'),
    );

$form['disclaimer1'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['disclaimer2'] = array(
  '#markup' => '<p>' . t('Or, if you check the box below, you can load all the scripts in a minified file.  Leave unchecked to load which components you actually need.') . '</p>',
);

$form['zurb_foundation_6_script0'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load all components in a single file'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script0', 'zurb_foundation_6'),
    );

$form['disclaimer4'] = array(
  '#markup' => '<p>' . t('Zurb Foundation helper utilities') . '</p>',
);

$form['zurb_foundation_6_script5'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.box.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script5', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script6'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.keyboard.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script6', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script7'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.mediaQuery.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script7', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script8'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.motion.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script8', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script9'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.nest.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script9', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script10'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.timerAndImageLoader.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script10', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script11'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.touch.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script11', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script12'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.triggers.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script12', 'zurb_foundation_6'),
    );

$form['disclaimer5'] = array(
  '#markup' => '<p>' . t('Zurb Foundation components') . '</p>',
);

$form['zurb_foundation_6_script13'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script abide.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script13', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script14'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script accordion.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script14', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script15'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script accordionMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script15', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script drilldown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script18', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script19', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdownMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script20', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script21'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script equalizer.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script21', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script22'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script interchange.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script22', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script24'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script magellan.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script24', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script25'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script offcanvas.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script25', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script26'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script orbit.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script26', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script27'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script responsiveMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script27', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script28'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script responsiveToggle.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script28', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script29'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script reveal.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script29', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script30'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script30', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script31'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script sticky.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script31', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script32'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tabs.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script32', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script33'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script toggler.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script33', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script34'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script34', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('zurb_foundation_6_juiced_main_background', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_6_juiced_main_background_blurred', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('zurb_foundation_6_juiced_big_statement_background', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_6_juiced_big_statement_background_blurred', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('zurb_foundation_6_body_main_background', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_6_body_main_background_blurred', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('zurb_foundation_6_footer_main_background', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_6_footer_main_background_blurred', 'zurb_foundation_6'),
    );

}
