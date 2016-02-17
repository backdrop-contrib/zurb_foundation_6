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
 * Implements hook_preprocess_layout().
 */
function zurb_foundation_6_subtheme_preprocess_layout(&$variables) {
  if ($variables['content']['header']) {
    $variables['content']['header'] = '<div class="l-header-inner">' . $variables['content']['header'] . '</div>';
  }

if (theme_get_setting('zurb_foundation_6_subtheme_cdn_css') > 0)
{
backdrop_add_css('https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css', array('type' => 'external', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_cdn_flex_css') > 0)
{
backdrop_add_css('https://cdnjs.cloudflare.com/ajax/libs/foundation/6.1.2/foundation-flex.min.css', array('type' => 'external', 'every_page' => TRUE, 'preprocess' => TRUE));
}

$var1 = theme_get_setting('zurb_foundation_6_subtheme_juiced_main_background');
$var2 = theme_get_setting('zurb_foundation_6_subtheme_juiced_big_statement_background');
$var3 = theme_get_setting('zurb_foundation_6_subtheme_juiced_main_background_blurred');
$var4 = theme_get_setting('zurb_foundation_6_subtheme_juiced_big_statement_background_blurred');

if ($var1 && $var3 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var1 && $var3 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement { background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}


$var5 = theme_get_setting('zurb_foundation_6_subtheme_body_main_background');
$var6 = theme_get_setting('zurb_foundation_6_subtheme_footer_main_background');
$var7 = theme_get_setting('zurb_foundation_6_subtheme_body_main_background_blurred');
$var8 = theme_get_setting('zurb_foundation_6_subtheme_footer_main_background_blurred');

if ($var5 && $var7 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var5 && $var7 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout { background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var6 && $var8 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } footer.l-footer { background: transparent; } }", array('type' => 'inline'));
}

if ($var6 && $var8 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer { background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}



if (theme_get_setting('zurb_foundation_6_subtheme_js_cdn_all') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_js_local_all') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_js_cdn_each') > 0)
{

backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
if (theme_get_setting('zurb_foundation_6_subtheme_script1') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/fastclick.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script2') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/jquery.cookie.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script3') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script4') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/placeholder.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script5') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.box.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script6') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.keyboard.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script7') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.mediaQuery.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script8') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.motion.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script9') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.nest.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script10') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.timerAndImageLoader.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script11') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.touch.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script12') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.util.triggers.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script13') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.abide.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script14') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.accordion.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script15') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.accordionMenu.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script16') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.drilldown.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script17') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.dropdown.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script18') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.dropdownMenu.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script19') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.equalizer.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script20') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.interchange.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script21') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.magellan.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script22') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.offcanvas.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script23') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.orbit.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script24') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.responsiveMenu.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script25') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.responsiveToggle.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script26') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.reveal.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script27') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.slider.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script28') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.sticky.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script29') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.tabs.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script30') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.toggler.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script31') > 0)
{
backdrop_add_js("https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.tooltip.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

}




if (theme_get_setting('zurb_foundation_6_subtheme_js_local_each') > 0)
{

backdrop_add_js("themes/zurb_foundation_6/js/foundation.core.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
if (theme_get_setting('zurb_foundation_6_subtheme_script1') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/fastclick.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script2') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/jquery.cookie.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script3') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/modernizr.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script4') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/jquery.placeholder.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script5') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.box.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script6') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.keyboard.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script7') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.mediaQuery.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script8') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.motion.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script9') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.nest.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script10') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.timerAndImageLoader.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script11') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.touch.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script12') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.util.triggers.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script13') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.abide.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script14') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.accordion.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script15') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.accordionMenu.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script16') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.drilldown.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script17') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.dropdown.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script18') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.dropdownMenu.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script19') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.equalizer.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script20') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.interchange.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script21') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.magellan.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script22') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.offcanvas.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script23') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.orbit.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script24') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.responsiveMenu.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script25') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.responsiveToggle.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script26') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.reveal.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script27') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.slider.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script28') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.sticky.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script29') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.tabs.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script30') > 0)
{
backdrop_add_js("themes/zurb_foundation_6/js/foundation.toggler.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('zurb_foundation_6_subtheme_script31') > 0)
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

  if (theme_get_setting('zurb_foundation_6_subtheme_sass') > 0)
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
