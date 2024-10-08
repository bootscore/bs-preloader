=== bs Preloader ===

Contributors: Bastian Kreiter, Kemal Sulic, Murilo Carvalho

Stable tag: 5.5.0
Tested up to: 6.6
Requires at least: 5.0
Requires PHP: 7.4
License: MIT License
License URI: https://github.com/bootscore/bs-preloader/blob/main/LICENSE

Plugin adds a preloader to Bootscore theme, Copyright 2021 - 2024 The Bootscore Contributors.


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

= 5.5.0 - October 08 2024 =

### Features

* Added a filter to preloader bg and added a hook

### Improvements

* Added icon.png
* Renamed filter `bootscore/class/preloader_spinner` into `bootscore/class/preloader/spinner`

### Bugfixes

* Favicon disappears on non-admin pages if favicon is selected via the Customizer

### Templates changed

* `preloader.php`

= 5.4.1 - August 31 2024 =

#### Improvements

* Added icon.svg
* Updated meta
* Tested up to WP 6.6

= 5.4.0 - May 03 2024 =

#### Feature

* Added a filter to loading spinner

= 5.3.1 - March 28 2024 =

#### Improvement

* Moved js and css to assets folder

#### Update

* Update checker 5.4

= 5.3.0 - January 18 2023 =

#### Improvement

* Added bg-body class to #preloader
* Removed -main branch suffix from plugin's folder. This does not affect existing bs-preloader-main installations.

#### Removed

* Hide preloader on IE10+ 7bb956c (@crftwrk)

#### Update

* Update checker 5.3 b580ec7 (@crftwrk)

= 5.2.0 - December 14 2023 =

#### Feature

* Rewrite locate template script to skip -main suffix in child folder

#### Update

* Update checker v5

= 5.1.2 - August 27 2023 =

#### Bugfix

* Downgrade to update checker v4

= 5.1.1 - August 26 2023 =

#### Improvement

* Deny direct access #12

#### Update

* Plugin checker 5.2 #13

= 5.1.0 - June 08 2023 =

#### Feature

* Add composer.json

= 5.0.1.5 - June 30 2022 =

#### Improvement

* Reformat files

= 5.0.1.4 - January 18 2022 =

#### Bugfix

* Changed class sr-only to visually-hidden (BS5)

= 5.0.1.3 - January 13 2022 =

#### Bugfix

* Prevents preloader stucking by press the browser back/forward buttons https://github.com/bootscore/bs-preloader/issues/6

= 5.0.1.2 - November 08 2021 =

#### Bugfix

* Exclude :mailto, :tel, .woocommerce-MyAccount-downloads-file and data-fade="false" from fade-in.

= 5.0.1.1 - November 07 2021 =

#### Improvement

* Refactored preloader.js https://github.com/bootscore/bs-preloader/issues/3
* Reformat files

= 5.0.1.0 - September 24 2021 =

#### Feature

* Added Update Checker

#### Bugfix

* Prevent ctrl/cmd + click links from fade-in

= 5.0.0.8 - August 24 2021 =

#### Bugfix

* Exclude .comments-link from fade-out
* Exclude .woocommerce-MyAccount-downloads-file from fade-out

= 5.0.0.7 - May 30 2021 =

#### Bugfix

* Exclude .dropdown-toggle from fade-out

= 5.0.0.6 - May 28 2021 =

#### Improvement

* Hide on Internet Explorer
* Fade out effect on click <a>...</a> for smooth page transition (works not on Mac Safari and all iOS Browsers)

= 5.0.0.5 - March 08 2021 =

#### Improvement

* Uses zi-1070 class of parent theme instead of own CSS (needs at least bootScore 5.0.0.5)

= 5.0.0.4 - March 05 2021 =

#### Improvement

* Uses Bootstrap positioning classes instead of own CSS

= 5.0.0.3 - February 11 2021 =

#### Improvement

* Load CSS in external file again

= 5.0.0.2 - February 10 2021 =

#### Feature

* Override template in child-theme 

= 5.0.0.1 - February 09 2021 =

#### Improvement

* Load CSS inline to reduce file request
* Load preloader.js in footer

= 5.0.0 - December 30 2020 =

* Initial release
