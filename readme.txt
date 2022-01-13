=== bS Preloader ===

Contributors: Bastian Kreiter, Kemal Sulic

Requires at least: 4.5
Tested up to: 5.8.3
Requires PHP: 5.6
Stable tag: 5.0.1.3
License: MIT License
License URI: https://github.com/bootscore/bs-preloader/blob/main/LICENSE

This plugin adds a preloader to bootScore theme, Copyright 2021 The bootScore Contributors.


== Credits ==

    - Update Checker https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt, Copyright 2017, Jānis Elsts


== Installation ==

1. In your admin panel, go to Plugins > and click the Add New button.
2. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
3. Click Activate to use your new Plugin right away.


== Usage ==

Read documentation https://bootscore.me/documentation/bs-preloader/

Override plugin template by creating a folder your-theme/bs-preloader-main and paste a copy of preloader.php in plugin folder templates.


== Changelog ==

    = 5.0.1.3 - January 13 2021 =
    
        * [BUGFIX] Prevents preloader stucking by press the browser back/forward buttons https://github.com/bootscore/bs-preloader/issues/6

== Changelog ==

    = 5.0.1.2 - November 08 2021 =
    
        * [HOTFIX] Exclude :mailto, :tel, .woocommerce-MyAccount-downloads-file and data-fade="false" from fade-in.

    = 5.0.1.1 - November 07 2021 =
    
        * [IMPROVEMENT] Refactored preloader.js https://github.com/bootscore/bs-preloader/issues/3
        * [IMPROVEMENT] Reformat files

    = 5.0.1.0 - September 24 2021 =
    
        * [BUGFIX] Prevent ctrl/cmd + click links from fade-in
        * [NEW] Added Update Checker

    = 5.0.0.8 - August 24 2021 =
    
        * [BUGFIX] Exclude .comments-link from fade-out
        * [BUGFIX] Exclude .woocommerce-MyAccount-downloads-file from fade-out

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
