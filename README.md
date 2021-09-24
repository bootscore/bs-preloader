# bS Preloader

WordPress plugin to show a preloader in bootScore theme. Content will be shown when the page is fully loaded. When clicking a link (not # and external url), the preloader fades in again (not working on Mac Safari and all iOS Browsers) to get a smooth page transition.

Demo: https://bootscore.me/

Documentation: https://bootscore.me/documentation/bs-preloader/

## Installation

1. Download the zip file right here by pressing the green `code` button above. 
2. In your admin panel, go to Plugins > and click the Add New button.
3. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
4. Click Activate to use your new Plugin right away.

## Overriding templates via theme

Template files can be found within the /bs-preloader-main/templates/ plugin directory.

Edit files in an upgrade-safe way using overrides. Copy the template into a directory within your theme named /bs-preloader-main keeping the same file structure but removing the /templates/ subdirectory. Path must be `/your-theme/bs-preloader-main/[file].php`.

The copied file will now override the bS Preloader template file. Change spinner, classes or HTML as you want.

### Templates that can be overwritten:

- preloader.php


## License & Credits

- bS Preloader, MIT License https://github.com/bootscore/bs-preloader/blob/main/LICENSE
- Plugin Update Checker, YahnisElsts, MIT License https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt
