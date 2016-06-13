<?php
/**
 * @file
 * Theme settings for Zurb Foundation 6 sub theme
 *
*/

function zurb_foundation_6_subtheme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['use_max_width'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Check to use the admin settings below </b> to control the theme max-width. <b>Uncheck</b> to write CSS to control the theme max-width.'),
    '#default_value' => theme_get_setting('use_max_width', 'zurb_foundation_6_subtheme'),
  );

$layouts = layout_load_all();
$layout_items = array();
$options = array();
foreach ($layouts as $layout => $item) {
    $options[$item->name] = check_plain($item->title);
}


$form['maxwidth1'] = array(
        '#title' => t('Theme Max-Width 1'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts1');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth1']['site_layouts1'] = array(
        '#title' => t('Set a site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth1']["max_width_element1"] = array(
        '#title' => t('For this page area.  For this to work correctly on -page content- option, you must enable it on a layout of the B4 Full Radix or Zurb 6 Toolkit contrib layouts or similar. '),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('zurb_foundation_6_subtheme.settings', 'max_width_element1')
    );

  $form['maxwidth1']["max_width_number1"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('zurb_foundation_6_subtheme.settings', 'max_width_number1')
    );


$form['maxwidth2'] = array(
        '#title' => t('Theme Max-Width 2'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts2');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth2']['site_layouts2'] = array(
        '#title' => t('Set another site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth2']["max_width_element2"] = array(
        '#title' => t('For this page area.  For this to work correctly on -page content- option, you must enable it on a layout of the B4 Full Radix or Zurb 6 Toolkit contrib layouts or similar. '),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('zurb_foundation_6_subtheme.settings', 'max_width_element2')
    );

  $form['maxwidth2']["max_width_number2"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('zurb_foundation_6_subtheme.settings', 'max_width_number2')
    );




$form['maxwidth3'] = array(
        '#title' => t('Theme Max-Width 3'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('zurb_foundation_6_subtheme.settings', 'site_layouts3');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth3']['site_layouts3'] = array(
        '#title' => t('Set another site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth3']["max_width_element3"] = array(
        '#title' => t('For this page area.  For this to work correctly on -page content- option, you must enable it on a layout of the B4 Full Radix or Zurb 6 Toolkit contrib layouts or similar. '),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('zurb_foundation_6_subtheme.settings', 'max_width_element3')
    );

  $form['maxwidth3']["max_width_number3"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('zurb_foundation_6_subtheme.settings', 'max_width_number3')
    );





// backgrounds
$form['zurb_foundation_6_backgrounds'] = array(
        '#title' => t('Set background images for site regions'),
        '#type' => 'fieldset',
    );

// body area
$form['zurb_foundation_6_backgrounds']["disclaimer"] = array(
  '#markup' => '<p>' . t('An image style such as [mywebsite.com/]files/styles/[large or custom]/[path to image] or one of these services may be helpful here: imgix.com, imagefly.io, cloudinary.com, imageresizer.io or aws.amazon.com/s3.') . '</p>',
);

$form['zurb_foundation_6_backgrounds']['body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a layout.'),
      '#default_value' => theme_get_setting('body_main_background', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['body_main_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the main page area in a layout.'),
      '#default_value' => theme_get_setting('body_main_background_retina', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('body_main_background_blurred', 'zurb_foundation_6_subtheme'),
    );




//l-calltoaction area
$form['zurb_foundation_6_backgrounds']['footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the call to action area in a layout.'),
      '#default_value' => theme_get_setting('footer_main_background', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['footer_main_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the call to action area in a layout.'),
      '#default_value' => theme_get_setting('footer_main_background_retina', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('footer_main_background_blurred', 'zurb_foundation_6_subtheme'),
    );


//juiced-main area
$form['zurb_foundation_6_backgrounds']['juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('juiced_main_background', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['juiced_main_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('juiced_main_background_retina', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('juiced_main_background_blurred', 'zurb_foundation_6_subtheme'),
    );






//statement 1
$form['zurb_foundation_6_backgrounds']['statement1_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement 1 area in a layout.'),
      '#default_value' => theme_get_setting('statement1_background', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['statement1_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the big statement 1 area in a layout.'),
      '#default_value' => theme_get_setting('statement1_background_retina', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['statement1_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('statement1_background_blurred', 'zurb_foundation_6_subtheme'),
    );






//statement 2
$form['zurb_foundation_6_backgrounds']['statement2_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement 2 area in a layout.'),
      '#default_value' => theme_get_setting('statement2_background', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['statement2_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the big statement 2 area in a layout.'),
      '#default_value' => theme_get_setting('statement2_background_retina', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['statement2_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('statement2_background_blurred', 'zurb_foundation_6_subtheme'),
    );





//statement 3
$form['zurb_foundation_6_backgrounds']['statement3_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement 3 area in a layout.'),
      '#default_value' => theme_get_setting('statement3_background', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['statement3_background_retina'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for high resolution screens for the big statement 3 area in a layout.'),
      '#default_value' => theme_get_setting('statement3_background_retina', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_backgrounds']['statement3_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('statement3_background_blurred', 'zurb_foundation_6_subtheme'),
    );



$form['zurb_foundation_6_cdn_css'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> to serve the Zurb Foundation 6 CSS with standard grid as one minified CSS file.  <br>Uncheck</b> to serve the CSS from your web server.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_cdn_css', 'zurb_foundation_6_subtheme'),
  );

$form['zurb_foundation_6_cdn_flex_css'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> to serve the Zurb Foundation 6 CSS with flexbox grid as one minified CSS file.  <br>Uncheck</b> to serve the CSS from your web server.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_cdn_flex_css', 'zurb_foundation_6_subtheme'),
  );

$form['zurb_foundation_6_js_cdn_all'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: <b>Use Cloudflare CDN</b> instead of this website to serve the whole Zurb Foundation 6 JS library as one minified Javascript file. <br>Uncheck</b> for the option to serve the JS files piece by piece.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_cdn_all', 'zurb_foundation_6_subtheme'),
  );

$form['zurb_foundation_6_js_local_all'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: serve the whole Zurb Foundation 6 JS library as one minified Javascript file from this server. <br>Uncheck</b> for the option to serve the JS files piece by piece.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_local_all', 'zurb_foundation_6_subtheme'),
  );

$form['disclaimer2_subtheme'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['zurb_foundation_6_js_cdn_each'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Advanced mode: <b>Use Cloudflare CDN</b> instead of this website to serve the Zurb Foundation 6 JS components piece by piece. <br>Uncheck</b> to not serve these files.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_cdn_each', 'zurb_foundation_6_subtheme'),
);

$form['zurb_foundation_6_js_local_each'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Advanced mode: <b>Use your server</b> instead of a CDN to serve the Zurb Foundation 6 JS components piece by piece. <br>Uncheck</b> to not serve these files.'),
    '#default_value' => theme_get_setting('zurb_foundation_6_js_local_each', 'zurb_foundation_6_subtheme'),
);

$form['disclaimer3_subtheme'] = array(
  '#markup' => '<p>' . t('Third party helper utilities') . '</p>',
);

$form['zurb_foundation_6_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script1', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.cookie.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script2', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script3', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script placeholder.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script4', 'zurb_foundation_6_subtheme'),
    );

$form['disclaimer4_subtheme'] = array(
  '#markup' => '<p>' . t('Zurb Foundation helper utilities') . '</p>',
);

$form['zurb_foundation_6_script5'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.box.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script5', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script6'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.keyboard.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script6', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script7'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.mediaQuery.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script7', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script8'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.motion.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script8', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script9'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.nest.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script9', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script10'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.timerAndImageLoader.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script10', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script11'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.touch.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script11', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script12'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script util.triggers.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script12', 'zurb_foundation_6_subtheme'),
    );

$form['disclaimer5_subtheme'] = array(
  '#markup' => '<p>' . t('Zurb Foundation components') . '</p>',
);

$form['zurb_foundation_6_script13'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script abide.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script13', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script14'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script accordion.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script14', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script15'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script accordionMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script15', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script16'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script drilldown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script16', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script17'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script17', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdownMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script18', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script equalizer.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script3', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script interchange.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script20', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script21'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script magellan.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script21', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script22'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script offcanvas.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script22', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script23'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script orbit.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script23', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script24'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script responsiveMenu.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script24', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script25'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script responsiveToggle.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script25', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script26'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script reveal.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script26', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script27'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script27', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script28'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script sticky.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script28', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script29'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tabs.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script29', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script30'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script toggler.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script30', 'zurb_foundation_6_subtheme'),
    );

$form['zurb_foundation_6_script31'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('zurb_foundation_6_script31', 'zurb_foundation_6_subtheme'),
    );



$form['sass'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Only load the your-custom.css sub-theme file and remove the parent theme styles.  Use caution:  this setting is for if you are trying to make a smaller download by compiling with Sass'),
    '#default_value' => theme_get_setting('sass', 'zurb_foundation_6_subtheme'),
  );

}
