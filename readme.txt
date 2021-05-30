=== bS5 Preloader ===

Contributors: craftwerk

Requires at least: 4.5
Tested up to: 5.7.2
Requires PHP: 5.6
Stable tag: 5.0.0.7
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin adds a preloader to bootScore 5 theme, Copyright 2021 Bastian Kreiter.


== Installation ==

1. In your admin panel, go to Plugins > and click the Add New button.
2. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
3. Click Activate to use your new Plugin right away.


== Usage ==

Read documentation https://bootscore.me/documentation/preloader/

Override plugin template by creating a folder your-theme/bs5-preloader and paste a copy of preloader.php in plugin folder templates.


== Changelog ==

    = 5.0.0.7 - May 30 2021 =
    
        * [BUGFIX] Exclude .dropdown-toggle from fade-out

    = 5.0.0.6 - May 28 2021 =
    
        * [IMPROVEMENT] Hide on Internet Explorer
        * [IMPROVEMENT] Fade out effect on click <a>...</a> for smooth page transition (works not on Mac Safari and all iOS Browsers)

    = 5.0.0.5 - March 08 2021 =
    
        * [IMPROVEMENT] Uses zi-1070 class of parent theme instead of own CSS (needs at least bootScore 5.0.0.5)

    = 5.0.0.4 - March 05 2021 =
    
        * [IMPROVEMENT] Uses Bootstrap positioning classes instead of own CSS

    = 5.0.0.3 - February 11 2021 =
    
        * [SEO] Load CSS in external file again

    = 5.0.0.2 - February 10 2021 =
    
        * [NEW] Override template in child-theme 

    = 5.0.0.1 - February 09 2021 =
    
        * [SEO] Load CSS inline to reduce file request
        * [SEO] Load preloader.js in footer

    = 5.0.0 - December 30 2020 =
    
        * Initial release