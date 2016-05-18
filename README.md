ZURB FOUNDATION 6
-----------------

This theme uses the Foundation 6.2 CSS/Javascript framework from ZURB for a base theme.

This theme is updated for Backdrop CMS 1.4+!  It contains the page-width admin UI setting.

- novices can edit just the css/your-custom.css file to alter the appearence of your website.

- or developers can use the libSASS, liveReload, NPM and Grunt built-in tools for a styling workflow

- novices can install, edit, and deploy the theme as is (deleting the subtheme folder)

- or developers can use the easy, out-of-the-box subtheming folder options for easier future updates to the theme

- novices can use the Responsive Menus or Mobile Navigation modules (downloaded separately) for dropdown or mobile-friendly main menu.

- or developers can theme their own menus without needing to un-theme existing menu CSS

- sliders, custom fonts and other theme features do not come with this theme and you are encouraged to incorporate separate modules for each page feature that you wish to have.

- this theme contains checkboxes to serve base style/script files from your site or from Cloudflare CDN

- this theme contains checkboxes to serve modernizr script for browser feature detection, jquery-validate for form validation, fastclick for mobile tapping, and hammer for touch based events.  You must provide the custom integration for each.

- this theme contains easy UI background-image settings for supporting layouts.  Mobile (no slow downloads), regular screen, and high-resolution (larger downloads) backgrounds are supported.

- You can change your website colours from this theme's settings page using the Color module.  (Though it is actually faster/more accurate just to edit the css/your-custom.css or Sass files).  To use this functionality, enable the Color module on your website. Edit your theme .info file to remove the semi-colon from the ;stylesheets[all][] = css/colors.css.  Finally, visit your theme settings page, select your colours, and hit save.  Because this is not a priority for all sites and we only have so much time, if you see an error while using this feature please raise an issue on https://github.com/backdrop-contrib or @biolithic and we will get to fixing it.

- a "minimal design with tools" is a good example of how to use this theme.

- an "out of the box design" is probably not a good fit for this theme.

"The most advanced responsive front-end framework in the world."

"Foundation is made by ZURB, a product design company in Campbell, California. We've put more than 15 years of experience building web products, services and websites into this framework.  For more information or support, please visit <http://foundation.zurb.com/>"


CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Coming From Drupal?
 - Javascript Usage
 - Novice Theming
 - Intermediate Theming
 - Advanced Theming
 - Advanced Usage
 - File Structure
 - SASS
 - Questions
 - License
 - Maintainers

TESTED
-----

This theme has been manually tested successfully creating and viewing nodes and style guide in Backdrop 1.4.

http://dev-backdropthemes.pantheon.io/ZURB-6

http://dev-backdropthemes.pantheon.io/demo-ZURB-6

http://dev-backdropthemes.pantheon.io/admin/appearance/styleguide/ZURB_foundation_6

KNOWN ISSUES
---------------------

NOTE -- this theme is stable but being developed.  If you have spare time and shared ideas on how to propel it forward coding cleanly and under the appropriate licenses, you are welcome to join in and offer advice or build it together.

This theme has a lot of functionality and widget type add-ons bundled in that are not actively integrated yet.
You can look through the folders and manually integrate what you need, or delete what you don't.

SPECIAL THANKS
--------------

This theme uses the Foundation 6 theme framework from ZURB
Special thanks to the developers at ZURB for this great work!
Tweet us at @ZURBfoundation

This theme can use the Bourbon/Neat SASS extensions from thoughtbot.  Uncomment those lines in your gruntfile.js to get started!
Bourbon is maintained and funded by thoughtbot, inc. Tweet your questions or suggestions to @bourbonsass and while you’re at it follow us too.

Copyright © 2011–2015 thoughtbot, inc. Bourbon is free software, and may be redistributed under the terms specified in the license.

node-bourbon is Copyright © 2013-2014 Michael LaCroix. It is free software, and may be redistributed under the terms specified in the LICENSE file.

node-neat is Copyright © 2013-2014 Michael LaCroix. It is free software, and may be redistributed under the terms specified in the LICENSE file.

This theme can use the Susy SASS extensions. Uncomment those lines in your gruntfile.js to get started! © Copyright 2015 | Miriam Eric Suzanne. <http://susydocs.oddbird.net>

Special thanks to Michael LaCroix @iamlacroix <http://www.lacroixdesign.net> Frank Baele <https://www.drupal.org/u/frankbaele> and Danny Englander @Danny_Englander <http://dannyenglander.com> for their workflow documentation and help!!!  Also to Wicker Park, Chicago, IL for fostering the creative life to the world.

COMING FROM DRUPAL?
-------------------

If you are using Backdrop and have a previous knowledge of Drupal, you will notice that Drupal themes spend a lot of template files and CSS arranging things on the page where this theme doesn't so much.  This theme is more of a style guide of how page elements are supposed to look and not much layout.  It relies on the layouts module.

This theme does not use the ZURB grid or any grid by default -- it relies on the Layout module to provide that.

JAVASCRIPT USAGE
------------------

If you would like to add custom Javascript to your site, edit the js/scripts.js file (in the subtheme if you are using that setup).

Novice Theming
------------------

If you just want to start using this theme right now and don't feel that you will need to support this very much in the future, you can!
-- delete the subtheme folder...it's just dead weight.
-- if you would like to add custom Javascript to your site, edit the js/scripts.js file.
-- if you would like to add custom CSS to your site, edit the css/your-custom.css file.
-- if you would like to use the Admin UI to customize your site, enable the Color module and visit /admin/appearance/settings/zurb_foundation_6

Intermediate Theming
----------------------

If you use a bit of wisdom on theming, you will know that there are base styles, and then there are your own custom styles.  There is the theme as of this moment, but in the future, updates may be made to the core theme and you may want to incorporate those back down easily to your custom theme.  You may even hate the base styles of this theme and just wish to incorporate your own only using this theme as a starting point.

This is called "sub-theming".

To accomplish sub-theming easily with this theme:

Copy the folder zurb_foundation_6_subtheme and paste it in your site's root THEMES directory.  After doing this, you will have at least two folders in that same level: zurb_foundation_6 and zurb_foundation_6_subtheme.  Delete the old zurb_foundation_6_subtheme folder that's inside of the parent theme zurb_foundation_6.  Inside of your top-level zurb_foundation_6_subtheme, rename zurb_foundation_6_subtheme.info.starterkit to zurb_foundation_6_subtheme.info

After clearing your site cache, visit /admin/appearance/list .  Enable ZURB Foundation 6 Subtheme, and make it your default theme.  Now, you can edit custom styles in this theme while it inherits styles from its parent theme zurb_foundation_6.  When updates come out for the zurb_foundation_6 theme, you can just copy and paste or update the parent theme any time and it won't erase your custom theming work (which is done now in the child theme zurb_foundation_6_subtheme).

You work in the top-level zurb_foundation_6_subtheme theme.

-- if you would like to add custom Javascript to your site, edit the js/scripts.js file.
-- if you would like to add custom CSS to your site, edit the css/your-custom.css file.
-- if you would like to use the Admin UI to customize your site, visit /admin/appearance/settings/zurb_foundation_6_subtheme

It will import the parent theme CSS and Javascript.  By editing the subtheme files, you will add on top of those.
It won't import the parent theme theme settings and template files.

If you like, you can rename every instance of zurb_foundation_6_subtheme to your own theme name, and by copying and pasting your subtheme folder, you can create more than one subtheme.

For more on this topic, here is an article that might help you <http://singlebrook.com/blog/drupal-sub-themes-using-sass>

Advanced Theming
------------------

Create a subtheme as stated above.

Use the built-in tools which will increase your productivity to produce leaner, faster downloading styles.

Visit /admin/appearance/settings/zurb_foundation_6_subtheme and:

-- Uncheck "use Cloudflare CDN"

-- Check "Only load the your-custom.css sub-theme file and remove the parent theme styles."

-- Open up your gruntfile.js and comment out or uncomment the lines of the tools that you wish to use.

-- Open up your sass/style.scss file in your subtheme and uncomment/comment the lines of the tools/partials that you wish to use.

-- Edit the sass/your-custom Sass files to add your custom styles.  Edit the sass/core at your own risk.

-- If you need to alter template.php, theme-settings.php, .tpl files, Javascript files, etc... make sure to do that in your subtheme.

-- If you want to update the theme (from a newer version), copy the sass/core files from the new version over the sass/core files in your current subtheme.

Sass will always over-ride and save over your /css/your-custom.css file.  If you are writing CSS by hand in addition to Sass, make a new CSS file, include it in your .info file, and the write custom CSS to that file.  This way, if you "Grunt watch" without thinking about it, any custom CSS will be safe and won't be over-ridden.



ADVANCED USAGE
------------------

FILE STRUCTURE
------------------

Overall file structure

- The .info file is for the listing of files to incorporate into your theme.
- The color folder is for the Color module UI.  Probably not important to alter.
- The CSS folder contains the your-custom.css file which is the CSS file that gets loaded on every page.  It gets overriden by SASS if you use SASS.
- The JS folder contains the scripts.js file you should use, which is the file that gets loaded on every page.
- The images folder is for your images and icons.
- The SASS folder is for your SASS CSS partials.
- Template.php contains PHP functions that alter the HTML of your Backdrop site.
- config.rb contains settings if you are using SASS Compass
- Gruntfile.js and package.json contain settings if you are using libSASS
- If you are not aware, the sass and node_modules folders do not need to be on the live server.  They are for local development only.


SASS file structure

This theme is in the process of retro-fitting its CSS into SASS.
We are in the process of converting from random code from different places into following:
<http://www.sitepoint.com/architecture-sass-project/>
<http://sass-guidelin.es/>

This file organization is described as such:

core folder is for Sass partials downloaded from Backdropcms.org

your-custom folder loads on top of those core files and are blank, ready for you to add your custom styles to

- style partial is where you can choose/add/remove which partials get added to the final overall CSS file
- print partial is not used by default but would contain styles for viewing printed copies of your website
- wysiwyg partial is not used by default but would contain styles for the rich text editors of your website

VENDOR FOLDER
- keep all your third-party library partials in one place in this folder

HELPERS FOLDER
- variables partial for people to work on the overall settings/defaults of the website
- extendables, functions, and mixins partials for people to work on the theming functions of the website

DESIGN FOLDER
- typography partials for people to work on the typography of the website
- layout partial for people to work on the big picture and layout aspects of the website
- components partial for people to work on the atomic design, buttons, and small aspects of the website
- navigation partial for people to work on the header and footer of the website
- colors partial for people to work on the colors of the website

PAGES FOLDER
- partials for people to work on admin or authenticated user pages of the site which aren't public facing

THEMES FOLDER
- partials for people to work on different themes of the website (seasonal, regional, etc)

FOUNDATION FOLDER
- partials from the official ZURB Foundation 6 framework

USAGE
-----

SASS
-----

This theme can also use SASS for theming workflow.
The primary way to get started is by using NodeJS in your command line/terminal.

- NodeJS and NPM

Install and download NodeJS at: http://nodejs.org/ if you have already not done so on your computer for any other task.

- Grunt

Install and download Grunt on your command line: npm install -g grunt-cli if you have already not done so on your computer for any other task.

After you have those two dependencies working on your computer, use the command line to enter the root of your theme.

In the root of the theme, type

npm install

to install the SASS tools for this theme.

After this has installed, use these commands on the command line in the root of your theme to make the theme do its thing:

Grunt tasks
---------------------

- grunt watch

start watching for changes you make to your files and on save automatically reload the page in your localhost.

- grunt prod

compile/minify the theme files for production

Compass compile
---------------------

You can also compile this theme with compass or ruby just install the following gems

gem install sass
gem install compass
gem install bourbon
gem install neat


Questions?
----------

Do you represent some code or project mentioned or used here and feel that this does not represent you correctly?
Let us know and the maintainer will happy to work with you or field your request, even taking this project down.

License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

Maintainers
-----------

- biolithic, seeking

Ported to Backdrop by:

- biolithic <https://github.com/biolithic>
