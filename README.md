# bs Preloader

[![Packagist Prerelease](https://img.shields.io/packagist/vpre/bootscore/bs-preloader?logo=packagist&logoColor=fff)](https://packagist.org/packages/bootscore/bs-preloader)
[![Github All Releases](https://img.shields.io/github/downloads/bootscore/bs-preloader/total.svg)](https://github.com/bootscore/bs-preloader/releases)

WordPress plugin to show a preloader in Bootscore theme. Content will be shown when the page is fully loaded. When clicking a link (not # and external url), the preloader fades in again (not working on Mac Safari and all iOS Browsers) to get a smooth page transition.

- Demo: https://bootscore.me/
- Documentation: https://bootscore.me/documentation/bs-preloader/

## Installation

1. Download latest release [bs-preloader.zip](https://github.com/bootscore/bs-preloader/releases/latest/download/bs-preloader.zip). 
2. In your admin panel, go to Plugins > and click the Add New button.
3. Click Upload Plugin and Choose File, then select the Plugin's .zip file. Click Install Now.
4. Click Activate to use your new Plugin right away.

## Overriding templates via theme

Template files can be found within the `/bs-preloader/templates/` plugin directory.

Edit files in an upgrade-safe way using overrides. Copy the template into a directory within your theme named `/bs-preloader` keeping the same file structure but removing the `/templates/` subdirectory. Path must be `/your-theme/bs-preloader/[file].php`.

The copied file will now override the bs Preloader template file. Change spinner, classes or HTML as you want.

### Templates that can be overwritten:

- `preloader.php`

## License & Credits

- bs Preloader, MIT License https://github.com/bootscore/bs-preloader/blob/main/LICENSE
- Plugin Update Checker, YahnisElsts, MIT License https://github.com/YahnisElsts/plugin-update-checker/blob/master/license.txt
