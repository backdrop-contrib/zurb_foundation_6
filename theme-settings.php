<?php
/**
 * @file
 * Theme settings for Zurb Foundation 6 parent theme
 *
*/

function zurb_foundation_6_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['disclaimer1'] = array(
  '#markup' => '<p><strong>' . t('These settings for the parent theme do NOT extend into the subtheme.') . '</strong></p>',
);

$form['zurb_foundation_6_cdn_css'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> to serve the Zurb Foundation 6 CSS with standard grid as one minified CSS file.  <br>Uncheck</b> to serve the CSS from your web server.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_cdn_css', 'zurb_foundation_6'),
  );

$form['zurb_foundation_6_cdn_flex_css'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> to serve the Zurb Foundation 6 CSS with flexbox grid as one minified CSS file.  <br>Uncheck</b> to serve the CSS from your web server.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_cdn_flex_css', 'zurb_foundation_6'),
  );

$form['zurb_foundation_6_js_cdn_all'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: <b>Use Cloudflare CDN</b> instead of this website to serve the whole Zurb Foundation 6 JS library as one minified Javascript file. <br>Uncheck</b> for the option to serve the JS files piece by piece.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_cdn_all', 'zurb_foundation_6'),
  );

$form['zurb_foundation_6_js_local_all'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: serve the whole Zurb Foundation 6 JS library as one minified Javascript file from this server. <br>Uncheck</b> for the option to serve the JS files piece by piece.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_local_all', 'zurb_foundation_6'),
  );

$form['disclaimer2'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['zurb_foundation_6_js_cdn_each'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Advanced mode: <b>Use Cloudflare CDN</b> instead of this website to serve the Zurb Foundation 6 JS components piece by piece. <br>Uncheck</b> to not serve these files.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_cdn_each', 'zurb_foundation_6'),
);

$form['zurb_foundation_6_js_local_each'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Advanced mode: <b>Use your server</b> instead of a CDN to serve the Zurb Foundation 6 JS components piece by piece. <br>Uncheck</b> to not serve these files.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_local_each', 'zurb_foundation_6'),
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

$form['zurb_foundation_6_script16'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script drilldown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script16', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script17'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script17', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdownMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script18', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script equalizer.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script3', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script interchange.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script20', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script21'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script magellan.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script21', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script22'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script offcanvas.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script22', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script23'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script orbit.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script23', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script24'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script responsiveMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script24', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script25'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script responsiveToggle.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script25', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script26'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script reveal.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script26', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script27'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script27', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script28'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script sticky.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script28', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script29'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tabs.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script29', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script30'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script toggler.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script30', 'zurb_foundation_6'),
    );

$form['zurb_foundation_6_script31'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script31', 'zurb_foundation_6'),
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

$form['recommended'] = array(
  '#markup' => '<p>' . t('Looking for additional theme features?  You might find what you are looking in layouts or modules.  Some common items to add to your site might be:<br><a href="https://backdropcms.org/modules">Modules</a><br><a href="https://backdropcms.org/layouts">Layouts</a><br>Menus<br><a href="https://backdropcms.org/project/mobile_navigation">Mobile Navigation</a><br><a href="https://backdropcms.org/project/responsive_menus">Responsive Menus</a><br><a href="https://backdropcms.org/project/wpmenu">WPMenu</a><br>Widgets<br><a href="https://backdropcms.org/project/google_fonts">Google Fonts</a><br><a href="https://backdropcms.org/project/back_to_top">Back To Top</a><br><a href="https://backdropcms.org/project/fanciblock">FanciBlock</a><br><a href="https://backdropcms.org/project/flexslider">FlexSlider</a><br>Parallax<br><a href="https://backdropcms.org/project/parallax_bg">Parallax_BG</a><br><a href="https://backdropcms.org/project/scrollreveal">Scroll Reveal</a><br><a href="https://backdropcms.org/project/void_menu">Void Menu</a> ') . '</p>',
);

}
