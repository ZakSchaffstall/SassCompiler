SassCompiler
============

Forked https://github.com/BradCrumb/SassCompiler in an attempt to update it to Cake 3.0

The SassCompiler provides a CakePHP Sass Component which automates the process of compiling .scss (not yet .sass) files to css. It uses the PHP interface provided by http://leafo.net/scssphp/

## Requirements

The master branch has the following requirements:

* CakePHP 3.0 or greater.
* PHP 5.3.0 or greater.

## Installation

* Clone/Copy the files in this directory into `plugin/SassCompiler`
* Ensure the plugin is loaded in `config/bootstrap.php` by calling `Plugin::load('SassCompiler', ['bootstrap' => true]);`
* Include the Sass component in the initialize function in your `AppController.php`:
	* `$this->loadComponent('SassCompiler.Sass');`

## Documentation

The component will check for scss files to (re)compile automatically when:
 * Debug level is `true`
 * autoRun is set to true in the component settings
 * Cache-time expires

In a live environment one can force the component to (re)compile all scss files by supplying forceSassToCompile=true in the request string.

The component writes cache-files to your CakePHP's cache-directory in a subdirectory called "SassComponent".
All scss files should be placed in the `webroot/sass` directory (to generate css-files in the default `webroot/css` directory).

The default duration time for the cache is 4 hours.
After that time the cache expires and after a new request the component will check for updated or added scss files.

### Possible Component Settings
```php

$this->loadComponent('SassCompiler.Sass', [
	'sourceFolder'		=> 'sass',						// Where to look for .scss files, (From the ROOT directory)
	'targetFolder'		=> false,						// Where to put the generated css (From the ROOT directory)
	'formatter'			=> 'scss_formatter_compressed',	// PHPSass compatible style (compressed or nested)
	'forceCompiling'	=> false,						// Always recompile
	'autoRun'			=> false,						// Check if compilation is necessary, this ignores the CakePHP Debug setting
	'import_paths'		=> array()						// Array of paths to search for scss files when using @import, path has to be relative to the sourceFolder
]);

```

### Compass
Haven't gotten the compass stuff working yet.

## License
GNU General Public License, version 3 (GPL-3.0)
http://opensource.org/licenses/GPL-3.0