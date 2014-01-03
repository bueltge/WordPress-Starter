# WordPress Starter
This is simple starter skeleton repo for a WordPress developer and live site - reduce the `wp-config.php` for live sites. The `.htaccess` is optimized for performance and security topics.

## Description
* `wpbeta` as default name for the wp-directory; because i use the last nightly build for development
* WordPress as a Git submodule in `/wpbeta/`
* Custom content directory in `/wp-content/`
* Custom plugin directory in `/wp-plugins/`
* Custom multisite plugin directory in `/wpmu-plugins/`
* `wp-config.php` in the root
* Default as Multisite mode

## Installation
1. Clone the Starter to your webserver `git clone https://github.com/bueltge/WordPress-Starter.git`
2. You need to run `git submodule init` and `git submodule update --recursive` to pull the WordPress Core
3. Change the settings, in particular the database inside the `wp-config.php`

## Other Notes
### License
Good news, this plugin is free for everyone! Since it's released under the GPL, you can use it free of charge on your personal or commercial blog. But if you enjoy this plugin, you can thank me and leave a [small donation](http://bueltge.de/wunschliste/ "Wishliste and Donate") for the time I've spent writing and supporting this plugin. And I really don't want to know how many hours of my life this plugin has already eaten ;)

### Contact & Feedback
The starter skeleton is created by me ([Frank Bültge](http://bueltge.de)) with many different input from other people

Please let me know if you like the plugin or you hate it or whatever ... Please fork it, add an issue for ideas and bugs.

### Disclaimer
I'm German and my English might be gruesome here and there. So please be patient with me and let me know of typos or grammatical farts. Thanks

#### Bitdeli Badge for GitHub Analytics
[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/bueltge/wordpress-starter/trend.png)](https://bitdeli.com/free "Bitdeli Badge")