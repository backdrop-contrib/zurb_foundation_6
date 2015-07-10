<?php
/**
 * @file
 * Theme settings file for zurb_foundation_5.
 */

function zurb_foundation_5_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['zurb_foundation_5_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> instead of this website to serve the base CSS and Javascript files.  If you are using SASS, you will have to manually adjust your imports to avoid loading the same styles twice.'),
    '#default_value' => theme_get_setting('zurb_foundation_5_cdn', 'zurb_foundation_5'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['zurb_foundation_5_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script1', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.cookie.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script2', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script3', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script placeholder.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script4', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script5'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script abide.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script5', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script6'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script accordion.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script6', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script7'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script alert.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script7', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script8'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script clearing.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script8', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script9'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script9', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script10'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script equalizer.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script10', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script11'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script interchange.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script11', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script12'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script joyride.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script12', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script13'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script magellan.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script13', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script14'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script offcanvas.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script14', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script15'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script orbit.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script15', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script16'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script reveal.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script16', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script17'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script17', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tab.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script18', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script19', 'zurb_foundation_5'),
    );

$form['zurb_foundation_5_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script topbar.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_script20', 'zurb_foundation_5'),
    );

}
