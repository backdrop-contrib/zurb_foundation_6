ZURB FOUNDATION 5
------------

"The most advanced responsive front-end framework in the world."
This theme uses the Foundation 5 CSS/Javascript framework from Zurb for a base theme.

- default Backdrop layouts
- Foundation style page elements

- a single CSS file for casual web developers OR
- SASS stylesheets using libSASS and Grunt for workflow

- settings page for serve local style/script files OR
- serve style/script files from Cloudflare CDN

- settings page to manually select which Javascript files/components you want to use OR
- you can dig into the code to use .info files and SASS imports instead

- (disabled by default) Bourbon SASS mixins
- (disabled by default) the Color module UI for changing theme colors

- through SASS and grunt watch, this theme enables LiveReload which automatically refreshes the page you are working on whenever you
make a CSS, SASS or Javascript alteration and save.  It is basically the same speed of development as directly typing CSS declarations into the browser using something like Firebug or Devtools.

"Foundation is made by ZURB, a product design company in Campbell, California. We've put more than 15 years of experience building web products, services and websites into this framework.  For more information or support, please visit <http://foundation.zurb.com/>"

CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Requirements
 - Installation
 - Coming From Drupal?
 - Casual Usage
 - Advanced Usage
 - File Structure
 - SASS
 - Questions
 - License
 - Maintainers


TESTED
-----

@todo
This theme has been manually tested successfully creating and viewing nodes and style guide in Backdrop with the Mobile Navigation, Webform and Responsive Menus modules.

KNOWN ISSUES
---------------------

NOTE -- this theme is in a heavy development state.  If you have spare time and shared ideas on how to propel it forward coding cleanly and under the appropriate licenses, you are welcome to join in and offer advice or build it together.

This theme works as is by just installing it.

This theme has a lot of functionality and widget type add-ons bundled in that are not actively integrated yet.
You can look through the folders and manually integrate what you need, or delete what you don't.
In time, we will get around to integrating this as well.  Thank you for your patience.

The next item on the agenda for this theme is to integrate Grunt Uncss cleanly into the build process, and decide if theme components like modals should use template.php + theme settings or if they should each be add-on modules.

SPECIAL THANKS
--------------

This theme is based on the Xtheme for Drupal. <https://www.drupal.org/project/xtheme>
Special thanks to <https://www.drupal.org/u/frankbaele> for this great work!

This theme uses the Foundation 5 CSS toolkit from Zurb
Special thanks to the developers at Zurb for this great work!
Tweet us at  @ZURBfoundation

This theme can use the Bourbon/Neat SASS extensions from thoughtbot.
Bourbon is maintained and funded by thoughtbot, inc. Tweet your questions or suggestions to @bourbonsass and while you’re at it follow us too.

Copyright © 2011–2015 thoughtbot, inc. Bourbon is free software, and may be redistributed under the terms specified in the license.

REQUIREMENTS
------------

None

INSTALLATION
------------
- download and install this theme per usual Backdrop themes: <https://backdropcms.org/guide/themes>
- to see how this theme handles all the page elements, use this module <https://github.com/backdrop-contrib/styleguide>

COMING FROM DRUPAL?
-------------------

If you are using Backdrop and have a previous knowledge of Drupal, you will notice that Drupal themes spend a lot of template files and CSS arranging things on the page where this theme doesn't so much.  This theme is more of a style guide of how page elements are supposed to look and not much layout.  It relies on the layouts module.

This theme does not use the Zurb grid by default.  It uses the default layouts module until layouts in Backdrop become more defined.

CASUAL USAGE
------------------

If you would like to use CSS instead of SASS, edit the css/style.css file to alter the appearence of your website.
Place your CSS at the bottom of the file.

If you would like to add custom Javascript to your site, edit the js/scripts.js file.

ADVANCED USAGE
------------------


FILE STRUCTURE
------------------

Overall file structure

- The .info file is for the listing of files to incorporate into your theme.
- The color folder is for the Color module UI.  Probably not important to alter.
- The CSS folder contains the style.css file you should use, which is the file that gets loaded on every page.  It gets overriden by SASS if you use SASS.
- The JS folder contains the scripts.js file you should use, which is the file that gets loaded on every page.
- The images folder is for your images and icons.
- The SASS folder is for your SASS CSS partials.
- Template.php contains PHP functions that alter the HTML of your Backdrop site.
- config.rb contains settings if you are using SASS Compass
- Gruntfile.js and package.json contain settings if you are using SASS Grunt

SASS file structure
-------------------
We are in the process of converting from random code from different places into follwowing:
http://www.sitepoint.com/architecture-sass-project/
http://sass-guidelin.es/

USAGE
-----

If you would like to use CSS instead of SASS, edit the css/style.css file to alter the appearence of your website.

You may extend this theme with the documentation/classes from http://foundation.zurb.com/learn/features.html#faster-to-learn

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
-----------
- grunt sass

compile the sass files

- grunt watch

start a watch and livereload session for the xtheme

- grunt prod

compile the theme for production

Compass compile
---------------

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

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.

Maintainers
-----------

- seeking

Ported to Backdrop by:

 - biolithic <https://github.com/biolithic>
